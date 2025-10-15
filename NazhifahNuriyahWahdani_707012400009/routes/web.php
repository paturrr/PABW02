<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\BangunDatarController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/indexKalkulator', [KalkulatorController::class, 'indexKalkulator']);
Route::post('/hitungKalkulator', [KalkulatorController::class, 'hitungKalkulator']);

Route::get('/viewbd', [BangunDatarController::class, 'viewbd']);
Route::post('/tobd', [BangunDatarController::class, 'tobd'])->name('tobd');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Zipaayaa';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Hello, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Zipaayaa', 'nim' => '707012400009', 'kelas' => 'D4 SIKC 48-02']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home'  ;
})->name('home.page');
