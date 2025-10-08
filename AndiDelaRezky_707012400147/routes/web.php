<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Andi dela rezky';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name  = 'guest') {
    return "Halo $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about' , ['name' => 'Andi Dela Rezky', 'nim' => '707012400147', 'kelas' => 'D4 SIKC-48-02']);
});

Route::get('/home', function () {
    return 'Hello,ini adalah halaman home';
}) ->name('home.page');
