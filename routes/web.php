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
Route::get('/pegawai/absensi/{pegawai}', [App\Http\Controllers\PegawaiController::class, 'showAbsensi'])->name('show.Absensi');;
Route::get('/pegawai/absensi/{pegawai}/tambah/', [App\Http\Controllers\PegawaiController::class, 'saveAbsensi'])->name('save.Absensi');
Route::post('/pegawai/absensi/{pegawai}', [App\Http\Controllers\PegawaiController::class, 'storeAbsensi'])->name('store.Absensi');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
