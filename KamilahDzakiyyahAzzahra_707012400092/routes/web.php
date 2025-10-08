<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello, zara';
});

Route::get('/user/{name}', function ($name) {
    return "nama saya $name";
});

Route::get('/greet/{name?}', function ($name = 'anomali') {
    return "halo, $name";
});

Route::get('/profile', function () {
    return view ('profile');
});

Route::get('/about', function () {
    return view ('about', ['name' => 'Kamilah Dzakiyyah Azzahra', 'nim'=>'707012400092', 'kelas'=>'D4SIKC-48-02']);
});

Route::get('/home', function () {
    return 'halo, ini adalah halaman home';
})->name('home.page');