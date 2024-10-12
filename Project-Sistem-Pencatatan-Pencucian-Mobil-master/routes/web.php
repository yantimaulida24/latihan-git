<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MobilController;

// Route untuk halaman mobil
Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');


// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});
// Route resource untuk transaksi (CRUD Transaksi)
// Ini sudah mencakup semua metode yang diperlukan, termasuk edit, update, dan destroy
Route::resource('transaksi', TransaksiController::class);

// Route resource untuk admin
Route::resource('admin', AdminController::class);
