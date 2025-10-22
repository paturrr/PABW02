<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartFloodController;
use App\Http\Controllers\DatasensorController;

Route::get('/home', function () {
    return view('home');
});
Route::get('/form', [DatasensorController::class, 'form']);
Route::post('/sensor', [DatasensorController::class, 'sensor']);

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
