<?php

namespace App\Http\Controllers;
use App\Models\Distance;
use App\Models\City;
use Illuminate\Http\Request;

class DistanceController extends Controller
{
    //
     // عرض جميع المسافات
     public function index()
     {
         $cities = City::all();
         $distances = Distance::with('fromCity', 'toCity')->get();
         return view('distances', compact('cities', 'distances'));
     }
     // إضافة مسافة بين مدينتين
     public function store(Request $request)
     {
         $request->validate([
             'from_city_id' => 'required|exists:cities,id',
             'to_city_id' => 'required|exists:cities,id',
             'distance' => 'required|numeric',
         ]);

         $distance = Distance::create([
             'from_city_id' => $request->from_city_id,
             'to_city_id' => $request->to_city_id,
             'distance' => $request->distance,
         ]);

         return response()->json(['message' => 'Distance added successfully', 'distance' => $distance]);
     }

         // عرض جميع المسافات مع ترتيبها
    public function listDistances()
    {
        // جلب جميع المسافات مع ترتيبها من الأقصر إلى الأطول
        $distances = Distance::orderBy('distance', 'asc')->get();

        // عرض View مع تمرير المسافات إليه
        return view('distances_table', compact('distances'));
    }
}
