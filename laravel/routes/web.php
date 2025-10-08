<?php

use Illuminate\Support\Facades\Route;

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