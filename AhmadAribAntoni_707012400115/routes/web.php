<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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
use App\Http\Controllers\BangunDatarController;
Route::get('/', [BangunDatarController::class, 'indeks'])->name('indeks');

Route::post('/persegi-panjang', [BangunDatarController::class, 'persegiPanjang'])->name('persegiPanjang');
Route::post('/persegi', [BangunDatarController::class, 'persegi'])->name('persegi');
Route::post('/lingkaran', [BangunDatarController::class, 'lingkaran'])->name('lingkaran');

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']); 
//Kalkulator
use App\Http\Controllers\KalkulatorController;
Route::get('/index', [KalkulatorController::class, 'index']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);
//bangundatar
Route::get('/rumus', [BangunDatarController::class, 'rumus']);
Route::post('/count', [BangunDatarController::class, 'count']);

Route::get('Hello', function () {
    return "Hello , Arib";
});

Route::get('/User/{name}',function($nama){
    return "nama saya $nama";
});

Route::get('/profile',function(){
   return view('profile');
});

Route::get('/about',function(){
   return view('about',['name'=>'Arib'],['nim'=>'707012400115','kelas'=>'D4SIKC-48-02']);
});

Route::get('/home',function(){
   return ('ini halaman home');
})->name('home.page');