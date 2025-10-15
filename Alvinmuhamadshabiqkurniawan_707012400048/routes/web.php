<?php


use App\Http\Controllers\KalkulatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/index', [KalkulatorController::class, 'index']);
Route::post('/hasilakhir', [KalkulatorController::class, 'hasilakhir']);

?>