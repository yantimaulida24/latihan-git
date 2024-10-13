<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PelangganMobilController;

//Route resource untuk pelanggan-mobil
Route::get('/pelanggan-mobil', [PelangganMobilController::class, 'index'])->name('pelanggan-mobil.index');

//Route resource untuk halaman mobil
Route::resource('mobil', MobilController::class);

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});
// Route resource untuk transaksi (CRUD Transaksi)
// Ini sudah mencakup semua metode yang diperlukan, termasuk edit, update, dan destroy
Route::resource('transaksi', TransaksiController::class);

// Route resource untuk admin
Route::resource('admin', AdminController::class);
