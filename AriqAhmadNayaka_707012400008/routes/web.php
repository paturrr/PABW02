<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\kalkulator_controller;

Route::get('form', [DataController::class, 'form']);
Route::post("/process", [DataController::class, 'process']);

Route::get('kalkulator', [kalkulator_controller::class, 'index'])->name('kalkulator.index');
Route::post('kalkulator', [kalkulator_controller::class, 'hitung'])->name('kalkulator.hitung');


















// =================================================================
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{nama}/{nim}/{kelas}', function ($nama, $nim, $kelas) {
    return view('about', ['nama' => $nama, 'nim' => $nim, 'kelas' => $kelas]);
});

// Route::get('/nama/{nama}', function ($nama) {
//     return view('panggilnama', ['nama' => $nama]);
// });

// Route::get('/home', function () {
//     return view('home');
// })->name('home.page');

// =================================================================
