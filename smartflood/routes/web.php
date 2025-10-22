<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\SensorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sensor', [SensorController::class, '/sensor']);
Route::post('/hasil-sensor', [SensorController::class, '/hasil-sensor']);