<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DistanceController;
use App\Http\Controllers\PathController;

Route::get('/', function () {
    return view('instructions');
});


//
Route::get('/cities', [CityController::class, 'index']);
Route::post('/cities', [CityController::class, 'store']);
Route::get('/distances', [DistanceController::class, 'index']);
Route::post('/distances', [DistanceController::class, 'store']);

Route::match(['get', 'post'], '/shortest-path', [PathController::class, 'shortestPath']);

//
Route::get('/distances-table', [DistanceController::class, 'listDistances']);
