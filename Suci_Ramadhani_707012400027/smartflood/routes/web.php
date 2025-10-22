<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\SensorController;

Route::get('/sensor', [SensorController::class, 'sensor']);
Route::post('hasil-sensor', [SensorController::class, 'hasil-sensor']);

 Route::get('/tentang', function () {
    return view ('tentang');
 }) -> name ('tentang');

 Route::get('/home', function (){
    return view ('home');
 }) -> name ('home');
 
