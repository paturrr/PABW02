<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/', function () {
    return 'hello, Fazmi';
});

Route::get('/user/{Fazmi}', function ($name) {
    return "Nama Saya, $name";
});

Route::get('/greet/{Fazmi?}', function ($name = 'guest') {
    return "hallo, $name";
});

Route::get('profile/', function () {
    return view('profile');
});

Route::get('about/', function () {

    return view('about', ['name' => 'Fazmi', 'Nim' => '707012400039', 'kelas' => 'D4SIKC-48-02']);
});

Route::get('home/', function () {
    return 'Halo, Ini adalah halaman home';
})->name('home.page');
