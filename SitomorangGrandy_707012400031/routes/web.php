<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function() {
    return 'Hello, Grandy'; 
});

Route::get('/user/{Grandy}',function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})->name('home.page');

Route::get('/about', function () {
    return view('about', ['name' => 'Grandy', 'nim' => '707012400031', 'kelas' => 'D4SIKC4802']);
});