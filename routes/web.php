<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginCalonMhsController;
use App\Http\Controllers\RegisterCalonMhsController;

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

//Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

//Agen
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Calon Mhs

Route::get('/LoginMhs', [LoginCalonMhsController::class, 'log']);
Route::get('/RegistrasiMhs', [RegisterCalonMhsController::class, 'reg']);
