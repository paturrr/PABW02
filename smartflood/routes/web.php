<?php

use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [SensorController::class, 'home']);
Route::get('/tentang', [SensorController::class, 'tentang']);

Route::get('/sensor', [SensorController::class, 'sensor']);
Route::post('/hasilsensor', [SensorController::class, 'hasilsensor']);
?>