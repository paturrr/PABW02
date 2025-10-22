<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home');
Route::get('tentang');

Route::get('sensor');
Route::post('hasil-sensor');


