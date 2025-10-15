<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\BangunDatarController;

Route::get('/form', [DataController::class, 'form']);
Route::get('/proses', [DataController::class, 'proses']);

Route::get('/kalkulator', [KalkulatorController::class, 'kalkulator']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);

Route::get('/BangunDatar', [BangunDatarController::class, 'index'])->name('BangunDatar');
Route::post('/persegi', [BangunDatarController::class, 'persegi'])->name('persegi');
Route::post('/persegi_panjang', [BangunDatarController::class, 'persegiPanjang'])->name('persegi_panjang');
Route::post('/segitiga', [BangunDatarController::class, 'segitiga'])->name('segitiga');
Route::post('/lingkaran', [BangunDatarController::class, 'lingkaran'])->name('lingkaran');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello, suci ramadhani';
 });

 Route::get('/greet/{name?}', function ($name = 'Anomali') {
    return "Halo $name";
 });

  Route::get('/user/{name?}', function ($name = 'Suci') {
    return "Halo $name";
 });

 Route::get('/profile', function () {
    return view ('profile');
 });

 Route::get('/about', function () {
    return view ('about', ['name' => 'Suci Ramadhani', 'nim' => '202012400027' , 'kelas' => 'D4SIKC-48-02']);
 });

 Route::get('/home', function () {
    return 'Halo, ini adalah halaman Home!';
 })-> name ('home.page');