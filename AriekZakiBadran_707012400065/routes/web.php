<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Ariek';
});

Route::get('/user/{AriekZakiBadran}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ariek Zaki Badran', 'nim' => '707012400065', 'kelas' => 'D4SIKC48-02']);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman Home';
})->name('home.page');

use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

use App\Http\Controllers\KalkulatorController;
Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);

use App\Http\Controllers\BangunDatarController;
Route::get('/rumus', [BangunDatarController::class, 'rumus']);
Route::post('/count', [BangunDatarController::class,'count']);
