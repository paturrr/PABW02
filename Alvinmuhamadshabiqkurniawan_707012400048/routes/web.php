<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return 'Hello, alvjn';
});

Route::get('/user/{name}', function ($name) {
    return "Nama saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo $name";
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/about', function() {
    return view('about', ['name' => 'alvjn', 'nim' =>'707012400048', 'kelas' => '48-02']);
});

Route::get('/home', function () {
    return ('Halo ini adalah halaman home');
})->name('home page');