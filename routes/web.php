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


Route::resource('/pegawai', App\Http\Controllers\PegawaiController::class);
Route::resource('/jabatan', App\Http\Controllers\JabatanController::class);
Route::get('/pegawai/gaji/{pegawai}', [App\Http\Controllers\JabatanController::class, 'showGaji'])->name('showGaji');;
Route::get('/pegawai/absensi/{pegawai}', [App\Http\Controllers\JabatanController::class, 'showAbsensi'])->name('showAbsensi');;
Route::post('/pegawai/gaji/', [App\Http\Controllers\JabatanController::class, 'saveGaji'])->name('saveGaji');;
Route::post('/pegawai/absensi/', [App\Http\Controllers\JabatanController::class, 'saveAbsensi'])->name('saveAbsensi');;
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
