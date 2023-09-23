<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JadwalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/karyawan', function () {
    return view('karyawan.index');
});
Route::get('/jadwal', function () {
    return view('jadwal.index');
});
Route::get('/jadwala', function () {
    return view('jadwala.index');
});
Route::resource('/jadwal', JadwalController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::get('/jadwala', [App\Http\Controllers\JadwalController::class, 'indexa']);