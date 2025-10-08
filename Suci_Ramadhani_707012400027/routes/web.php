<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello, suci ramadhani';
 });

 Route::get('/greet/{name?}', function ($name = 'Anomali') {
    return "Halo $name";
 });

  Route::get('/user/{name?}', function ($name = 'Suci') {
    return "Halo $name";
 });

 Route::get('/profile', function () {
    return view ('profile');
 });

 Route::get('/about', function () {
    return view ('about', ['name' => 'Suci Ramadhani', 'nim' => '202012400027' , 'kelas' => 'D4SIKC-48-02']);
 });

 Route::get('/home', function () {
    return 'Halo, ini adalah halaman Home!';
 })-> name ('home.page');