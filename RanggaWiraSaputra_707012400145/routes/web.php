<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello , Rangga';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya  $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Nama Saya  $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rangga Wira Saputra', 'NIM' => '707070', 'jurusan' => 'SIKC']);
});


Route::get('/home', function () {
    return 'Halo ini adalah halaman home';
})->name('home.page');
