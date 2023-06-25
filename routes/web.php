<?php

use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\RegistrasiAgenController;
use App\Http\Controllers\LoginCalonMhsController;
use App\Http\Controllers\LoginAgenController;
use App\Http\Controllers\HalamanAgenController;
use App\Http\Controllers\RegisterCalonMhsController;
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
//CRUD Halaman Utama
Route::get('/', [HalamanUtamaController::class, 'index']);

//CRUD Agen
Route::get('/RegistrasiAgen/reg', [RegistrasiAgenController::class, 'reg']); // ke tampilan registrasi
Route::post('/RegistrasiAgen', [RegistrasiAgenController::class, 'store']); // utk simpen data ke database

Route::get('/LoginAgen', [LoginAgenController::class, 'log']); 

// Route::middleware(['auth'])->group(function () {
//     Route::get('/HalamanAgen', [HalamanAgenController::class, 'index']);
// });

Route::get('/HalamanAgen', [HalamanAgenController::class, 'index']);


//CRUD Calon Mhs
Route::get('/LoginMhs', [LoginCalonMhsController::class, 'log']);
Route::get('/RegistrasiMhs', [RegisterCalonMhsController::class, 'reg']);
