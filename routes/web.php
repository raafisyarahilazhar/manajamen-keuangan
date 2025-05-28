<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::post('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/barang', [BarangController::class, 'index'])->middleware('auth');
Route::get('/create-barang', [BarangController::class, 'create'])->middleware('auth');
Route::post('/create-barang', [BarangController::class, 'store'])->middleware('auth');

Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth');
Route::get('/create-laporan', [LaporanController::class, 'create'])->middleware('auth');
Route::post('/create-laporan', [LaporanController::class, 'store'])->middleware('auth');

// Route::get('/', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
