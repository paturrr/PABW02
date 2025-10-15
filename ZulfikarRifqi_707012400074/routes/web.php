<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\BangunDatarController;

Route::get('/rumus', [BangunDatarController::class, 'rumus']);
Route::post('/count', [BangunDatarController::class, 'count']);

Route::get('/input', [KalkulatorController::class, 'input']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello, Zulfikar';
});

Route::get('/user/{Zulfikar}', function ($name){
    return "Nama Saya $name";
});

Route::get('/great/{Zulfikar}', function  ($name = 'Guest'){
    return "Hallo, $name";
});

Route::get('/profile', function (){
    return view('profile');
});

Route::get('/about', function (){
    return view('about', ['name' => 'Zulfikar Rifqi', 'NIM' => '707012400074', 'Kelas' => 'D4 SIKC 48-02']);
});

Route::get('/home', function (){
    return 'Halo, ini adalah halaman Home';
})->name('home.page');
