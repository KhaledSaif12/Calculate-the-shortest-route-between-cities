<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Distance;

use Illuminate\Http\Request;

class PathController extends Controller
{
    //
    public function shortestPath(Request $request)
    {
        $cities = City::all();

        if ($request->isMethod('post')) {
            $startCityId = $request->input('start_city_id');
            $endCityId = $request->input('end_city_id');

            if (!$startCityId || !$endCityId) {
                return redirect()->back()->withErrors('Invalid city IDs provided.');
            }

            $graph = $this->buildGraph();
            $allPaths = [];
            $this->findAllPaths($graph, $startCityId, $endCityId, [], $allPaths);

            $shortestPath = $this->dijkstra($graph, $startCityId, $endCityId);

            return view('shortest-path', [
                'cities' => $cities,
                'allPaths' => $allPaths,
                'shortestPath' => $shortestPath,
                'startCityId' => $startCityId,
                'endCityId' => $endCityId,
                'graph' => $graph,
            ]);
        }

        return view('shortest-path', ['cities' => $cities]);
    }

    private function buildGraph()
    {
        $distances = Distance::all();
        $graph = [];

        foreach ($distances as $distance) {
            if (!isset($graph[$distance->from_city_id])) {
                $graph[$distance->from_city_id] = [];
            }
            if (!isset($graph[$distance->to_city_id])) {
                $graph[$distance->to_city_id] = [];
            }
            $graph[$distance->from_city_id][$distance->to_city_id] = $distance->distance;
            $graph[$distance->to_city_id][$distance->from_city_id] = $distance->distance; // تمثيل طريق ثنائي الاتجاه
        }

        return $graph;
    }

    private function findAllPaths($graph, $start, $end, $path = [], &$allPaths = [])
    {
        $path[] = $start;

        if ($start == $end) {
            $allPaths[] = $path;
            return;
        }

        if (!isset($graph[$start])) return;

        foreach ($graph[$start] as $neighbor => $distance) {
            if (!in_array($neighbor, $path)) {
                $this->findAllPaths($graph, $neighbor, $end, $path, $allPaths);
            }
        }
    }

    private function dijkstra($graph, $start, $end)
    {
        $distances = [];
        $previous = [];
        $queue = [];

        foreach ($graph as $city => $neighbors) {
            $distances[$city] = INF;
            $previous[$city] = null;
            $queue[$city] = INF;
        }

        $distances[$start] = 0;
        $queue[$start] = 0;

        while (!empty($queue)) {
            $currentCity = array_search(min($queue), $queue);
            unset($queue[$currentCity]);

            if ($currentCity == $end) {
                $path = [];
                while ($previous[$currentCity]) {
                    array_unshift($path, $currentCity);
                    $currentCity = $previous[$currentCity];
                }
                array_unshift($path, $start);
                return ['path' => $path, 'distance' => $distances[$end]];
            }

            foreach ($graph[$currentCity] as $neighbor => $distance) {
                $alt = $distances[$currentCity] + $distance;
                if ($alt < $distances[$neighbor]) {
                    $distances[$neighbor] = $alt;
                    $previous[$neighbor] = $currentCity;
                    $queue[$neighbor] = $alt;
                }
            }
        }

        return ['path' => [], 'distance' => INF]; // إذا لم يتم العثور على مسار
    }
}
