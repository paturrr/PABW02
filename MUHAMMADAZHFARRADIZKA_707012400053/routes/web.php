<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\BentukController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/bentuk', [BentukController::class, 'bentuk']);
Route::post('/hasil', [BentukController::class, 'hasil']);

Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, iyaz';
});

Route::get('/user/{name}', function ($name) {
    return "Nama saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'azhfaradizka', 'nim' => '707012400053', 'kelas' => '48-02']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})-> name('home.page');