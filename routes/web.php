<?php

use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\RegistrasiAgenController;
use App\Http\Controllers\LoginCalonMhsController;
use App\Http\Controllers\LoginAgenController;
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
Route::get('/RegistrasiAgen', [RegistrasiAgenController::class, 'reg']); //belum ada tampilan, cek di reg agen
Route::get('/LoginAgen', [LoginAgenController::class, 'log']); //belum ada tampilan, cek di log agen

//CRUD Calon Mhs
Route::get('/LoginMhs', [LoginCalonMhsController::class, 'log']); 