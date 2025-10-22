<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

// Route::get('/', function () {
//     return "view";
// });

Route::get('/', function () {
    return view('hasil2');
});

//Route::get('/hasil', [SensorController::class, 'hasil']);
Route::get('/form', [SensorController::class, 'form']);
Route::get('/form', [SensorController::class, 'form']);

Route::get('/form', function () {
    return view('form');
});

