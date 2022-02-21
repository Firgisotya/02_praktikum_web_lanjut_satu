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
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return
    'Nama : Firgi Sotya Izzuddin '.
    'Nim  : 2041720207';
});

Route::get('/article/{id}', function($id){
    return 'Ini Halaman article '. $id;
});
