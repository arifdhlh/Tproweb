<?php

use App\Http\Controllers\kunjunganController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\urusController;

use App\Http\Controllers\dashkunjunganController;
use App\Http\Controllers\dashlayananController;
use App\Http\Controllers\dashobatController;
use App\Http\Controllers\dashprofilController;
use App\Http\Controllers\dashgaleriController;
use App\Http\Controllers\dashurusController;


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

// Route::get('/', [kunjunganController::class, 'index']);

Route::get('/', [profilController::class, 'index']);
Route::get('/services', [layananController::class, 'index']);
Route::get('/obat', [obatController::class, 'index']);
Route::get('/info', [kunjunganController::class, 'index']);
Route::get('/galeri', [galeriController::class, 'index']);
Route::get('/pengurus', [urusController::class, 'index']);

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);

Route::post('/logout', [loginController::class, 'logout']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/kunjungan', dashkunjunganController::class)->middleware('auth');
Route::resource('/dashboard/obat', dashobatController::class)->middleware('auth');
Route::resource('/dashboard/profil', dashprofilController::class)->middleware('auth');
Route::resource('/dashboard/layanan', dashlayananController::class)->middleware('auth');
Route::resource('/dashboard/galeri', dashgaleriController::class)->middleware('auth');
Route::resource('/dashboard/urus', dashurusController::class)->middleware('auth');