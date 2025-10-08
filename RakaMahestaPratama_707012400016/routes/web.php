<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return 'Hello, Raka Mahesta';
});

Route::get('/user/{Raka}', function($name) {
    return "Nama saya $name";
});

Route::get('/greet/{Raka?}', function($name = 'guest') {
    return "Nama saya $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Raka Mahesta Pratama', 'nim' => '707012400016', 'class' => 'D4SIKC-48-02']);
});

Route::get('/home', function () {
    return 'Hallo, ini adalah halaman home';
})->name('home.page');
