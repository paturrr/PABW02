<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function () {
    return 'Hello, Muhammad Fitra Alhadi';
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
    return view('about', ['name'=>'Muhammad Fitra Alhadi','nim'=>'707012400126','kelas'=>'D4SIKC-48-02' ]);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman home';
})->name('home.page');
