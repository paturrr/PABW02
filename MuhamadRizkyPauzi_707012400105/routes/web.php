<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataControllers;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LuasBangunDatar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [DataControllers::Class, 'form']);
Route::post('/proses',[DataControllers::Class, 'proses']);

Route::get('/index', [KalkulatorController::Class, 'index']);
Route::post('/hasilPerhitungan',[KalkulatorController::Class, 'hasilPerhitungan']);

Route::get('/indexLuas', [LuasBangunDatar::Class, 'indexLuas']);
Route::post('/rumus',[LuasBangunDatar::Class, 'hasilLuas']);
