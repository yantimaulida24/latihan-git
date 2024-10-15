<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DashboardController;



// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});
// Route resource untuk transaksi (CRUD Transaksi)
// Ini sudah mencakup semua metode yang diperlukan, termasuk edit, update, dan destroy
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/create', [TransaksiController::class, 'create']);
Route::post('/transaksi/store', [TransaksiController::class, 'store']);

// Route resource untuk admin
Route::resource('admin', AdminController::class);

Route::resource('dashboard', DashboardController::class);

Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/pelanggan/create', [PelangganController::class, 'create']);


Route::post('/pelanggan/store', [PelangganController::class, 'store']);