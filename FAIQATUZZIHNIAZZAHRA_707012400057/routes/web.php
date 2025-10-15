<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\ShapeController;

Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);

Route::get('/shape', [ShapeController::class, 'shape']);
Route::post('/hasil', [ShapeController::class, 'hasil']);

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, nama';
});

Route::get('/user/{name}', function ($name) {
    return "Nama saya $name";
});

Route::get('/greet/{name}', function ($name = 'Naura') {
    return "Halo, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Faiqatuzzihni Az Zahra', 'nim' => '707012400057', 'kelas' => 'D4SIKC-48-02']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
}) ->name('home.page');
