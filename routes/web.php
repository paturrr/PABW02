<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KalkulatorController;

Route::get('/form',[DataController::class, 'form']);
Route::post('/proses',[DataController::class, 'proses']);

Route::get('/input', [KalkulatorController::class, 'input']);
Route::post('/hasil', [KalkulatorController::class, 'hasil']);


Route::get('/pilih', [ShapeController::class, 'pilih']);
Route::get('/inputPersegi', [ShapeController::class, 'inputPersegi']);
Route::get('/hasilPersegi', [ShapeController::class, 'hasilPersegi']);








/*Route::get('/', function () {
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
})->name('home.page');*/