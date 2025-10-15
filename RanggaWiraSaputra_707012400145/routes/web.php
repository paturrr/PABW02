<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\BangunDatarController;


Route::get('/rumus', [BangunDatarController::class, 'rumus']);
Route::post('/count', [BangunDatarController::class,'count']);


Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);


Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/view', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello , Rangga';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya  $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Nama Saya  $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rangga Wira Saputra', 'NIM' => '707070', 'jurusan' => 'SIKC']);
});


Route::get('/home', function () {
    return 'Halo ini adalah halaman home';
})->name('home.page');