<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\BangunDatarController;

Route::get('/form', [DataController::class,'form']);
Route::post('/proses', [DataController::class,'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, ratu';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Nama Saya,$name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ratu Fadhilah Putri', 'NIM' => '707012400116', 'Kelas' => 'D4SIKC-48-02']);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman Home';
})->name('home.page');

Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);

Route::get('/bangun-datar', [BangunDatarController::class, 'index']);
Route::post('/bangun-datar/hitung', [BangunDatarController::class, 'hitung'])->name('bangun.hitung');