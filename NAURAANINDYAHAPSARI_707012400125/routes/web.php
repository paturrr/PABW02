<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Naura';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name}', function ($name = 'kasih tak dianggap') {
    return "Halo $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Naura Anindya Hapsari', 'nim' => '707012400125', 'kelas' => 'D4SIKC-48-02'] );
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})->name('home.page');
