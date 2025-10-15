<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;

Route::get('/form', [DataController:: class, 'form']);
Route::POST('/proses', [DataController:: class, 'proses']);

Route::get('/index', [KalkulatorController:: class, 'index'])->name('index');
Route::POST('/hasil2', [KalkulatorController:: class, 'hitung'])->name('hitung');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Hello, Dyah';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Dyah', 'nim' => '707012400136', 'kelas' => 'D4SIKC 48-02']);
});

Route::get('/home', function () {
    return 'Halo,Ini adalah halaman Home';
})->name('home.page');
