<?php

use Illuminate\Support\Facades\Route;

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
