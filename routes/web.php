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


Route::get('/bantuan', function () {
    return view('bantuan');
});

//Agen
Route::get('/dashboard', function () {
    return view('Agen.dashboard');
})->middleware(['auth'])->name('dashboard');

//Admin
Route::get('/dashboard_admin', function () {
    return view('Admin.dashboard_admin');
})->middleware(['auth'])->name('dashboard_admin');

require __DIR__.'/auth.php';

//Calon Mhs

Route::get('/LoginMhs', [LoginCalonMhsController::class, 'log']);
Route::get('/RegistrasiMhs', [RegisterCalonMhsController::class, 'reg']);
