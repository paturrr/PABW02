<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

Route::get('/form', [SensorController::class, 'form']);
Route::post('/hasilSensor', [SensorController::class, 'hasilSensor']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2', function () {
    return 'Selamat Datang di SmartFlood Bandung Sistem Peringatan Dini Banjir 
Berbasis IoT.';
})->name('home2.page');

Route::get('/tentang', function () {
    return view('tentang');
});

