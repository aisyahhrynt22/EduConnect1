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
    return view('halaman_utama');
});

Route::get('/home_agen', function () {
    return view('halaman_utama_agen');
});

Route::get('/agen', function () {
    return view('profil_agen');
});

