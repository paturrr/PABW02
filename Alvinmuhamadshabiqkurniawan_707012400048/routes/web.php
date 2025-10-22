<?php


use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\KbaruController;
use App\Http\Controllers\LoopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/hasilakhir', [KalkulatorController::class, 'hasilakhir']);

Route::get('/kalkulatorbaru',[KbaruController::class, 'kalkulatorbaru']);
Route::post('/tampilkan', [KbaruController::class, 'tampilkan']);

Route::get('/tesloop', [LoopController::class, 'tesloop']);
Route::post('/tampilkanLoop', [LoopController::class, 'tampilkanLoop']);

?>