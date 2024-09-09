<?php

namespace App\Http\Controllers;
use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //
     // عرض جميع المدن
     public function index()
     {
         // الحصول على جميع المدن من قاعدة البيانات
         $cities = City::all();

         // تمرير المتغير $cities إلى View
         return view('cities', compact('cities'));
     }

     // إضافة مدينة جديدة
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|unique:cities,name',
         ]);

         // إنشاء المدينة الجديدة
         $city = City::create([
             'name' => $request->name,
         ]);

         // إعادة توجيه المستخدم بعد إضافة المدينة
         return redirect()->back()->with('success', 'City added successfully');
     }
}
