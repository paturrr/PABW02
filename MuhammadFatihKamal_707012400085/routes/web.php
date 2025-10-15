<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function () {
    return 'Hello, Muhammad Fatih Kamal';
});

Route::get('/user/{name}', function ($name) {
    return "Nama saya : $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Hallo, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name'=>'Muhammad Fatih Kamal','nim'=>'707012400085','kelas'=>'D4SIKC-48-02' ]);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman home';
})->name('home.page');

use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

use App\Http\Controllers\KalkulatorController;

Route::get('/input', [KalkulatorController::class, 'index'])->name('index');
Route::post('/hasil', [KalkulatorController::class, 'hitung'])->name('hasil');


use App\Http\Controllers\BangunDatarController;
Route::get('/rumus', [BangunDatarController::class, 'rumus']);
Route::post('/count', [BangunDatarController::class,'count']);
