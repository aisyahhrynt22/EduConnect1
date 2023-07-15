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

// ------------------------------------Halaman utama------------------------------------

Route::get('/', function () {
    return view('halaman_utama.home');
});

// ------------------------------------Admin------------------------------------

Route::get('/adminedu', function () {
    return view('admin.home');
});

Route::get('/adminedu/cek_mgm', function () {
    return view('admin.cek_mgm');
});

Route::get('/adminedu/informasi_agen', function () {
    return view('admin.informasi_agen');
});

Route::get('/adminedu/informasi_agen/detail', function () {
    return view('admin/informasi_agen.detail');
});

Route::get('/adminedu/informasi_agen/status', function () {
    return view('admin/informasi_agen.status');
});

// ------------------------------------Agen------------------------------------

Route::get('/agen/login', function () {
    return view('agen.login');
});

Route::get('/agen/register', function () {
    return view('agen.regis');
});

Route::get('/agen', function () {
    return view('agen.home');
});

Route::get('/agen/profil', function () {
    return view('agen.profil');
});

Route::get('/agen/informasi', function () {
    return view('agen.informasi');
});

// //Agen
// Route::get('/dashboard', function () {
//     return view('Agen.dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/bantuan', function () {
//     return view('bantuan');
// });

Route::get('/agen/bantuan', function () {
    return view('agen.bantuan');
});

// ------------------------------------Calon_Mhs------------------------------------

Route::get('/calon_mhs/login', function () {
    return view('calon_mhs.login');
});

Route::get('/calon_mhs/register', function () {
    return view('calon_mhs.regis');
});

