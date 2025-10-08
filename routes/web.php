<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/hello', function(){
    return 'Hello, calista';
});

//routing dengan parameter
Route :: get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

//routing parameter opsional
Route :: get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

//routing dengan view
Route :: get('/profile', function () {
    return view('profile');
});

//routing data ke view
Route :: get('/about', function () {
    return view('about', ['name' => 'Calista', 'nim'=>'70701240070', 'kelas'=> '48-02']);
});

Route :: get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})->name('home.page');