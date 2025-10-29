<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'simpan'])->name('mahasiswa.simpan');
Route::get('/mahasiswa/tampil', [MahasiswaController::class, 'tampil'])->name('mahasiswa.tampil');
