<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Distance;

use Illuminate\Http\Request;

class PathController extends Controller
{
    //
     // حساب أقصر مسار بين مدينتين باستخدام خوارزمية ديكسترا
     public function shortestPath(Request $request)
     {
         $cities = City::all();
         $startCity = City::find($request->start_city_id);
         $endCity = City::find($request->end_city_id);

         if ($request->isMethod('post')) {
             $graph = $this->buildGraph();
             $shortestPath = $this->dijkstra($graph, $startCity->id, $endCity->id);

             return view('shortest-path', compact('cities', 'shortestPath', 'startCity', 'endCity'));
         }

         return view('shortest-path', compact('cities'));
     }
     // دالة بناء الرسم البياني
     private function buildGraph()
     {
         $distances = Distance::all();
         $graph = [];

         foreach ($distances as $distance) {
             $graph[$distance->from_city_id][$distance->to_city_id] = $distance->distance;
             $graph[$distance->to_city_id][$distance->from_city_id] = $distance->distance; // لتمثيل طريق ثنائي الاتجاه
         }

         return $graph;
     }

     // تطبيق خوارزمية ديكسترا
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
