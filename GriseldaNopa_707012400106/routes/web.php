<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Griselda';
});

Route::get('/user/{name}', function ($name) {
    return "Nama saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function () {
    return view ('profile');
});

Route::get('/about', function () {
    return view ('about', ['name' => 'Griselda', 'nim' => '707012400106', 'class' => 'D4 SIKC - 48 - 02']);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman Home';
})->name('home.page') ;

