<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KakulatorController;
use App\Http\Controllers\BangunDatarController;

Route::get('/bangun-datar', [BangunDatarController::class, 'index']);
Route::post('/bangun-datar/hitung', [BangunDatarController::class, 'hitung'])->name('bangun.hitung');

Route::get('/form', [DataController::class, 'Form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function () {
    return 'Hello, Fedro Richard Elion Mangedong';
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
    return view('about', ['name'=>'Fedro Richard Elion Mangedong ','nim'=>'707012400094','kelas'=>'D4SIKC-48-02' ]);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman home';
})->name('home.page');

Route::get('/index', [KakulatorController::class, 'index'])->name('kakulator.index');

Route::post('/hasil', [KakulatorController::class, 'hitung'])->name('kakulator.hitung');

