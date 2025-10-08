<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Muhith!';
});

Route::get('/user/{Muhith}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Raihan Abdul Muhith', 
    'nim' => '707012400098', 'kelas' => 'D4 SIKC 48-02']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})->name('home.page');