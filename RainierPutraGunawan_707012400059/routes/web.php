<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user{rainier}', function ($name) {
    return "Nama saya $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rainier Putra Gunawan', 'nim' => '707012400059', 'class' => 'D4SIKC-48-02']);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman home';
})->name('home.page');
