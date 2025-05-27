<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/create-barang', [BarangController::class, 'create']);
Route::post('/create-barang', [BarangController::class, 'store']);

Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/create-laporan', [LaporanController::class, 'create']);
Route::post('/create-laporan', [LaporanController::class, 'store']);