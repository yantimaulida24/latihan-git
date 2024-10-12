<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;


// Rute untuk menampilkan daftar mobil
Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');

// Rute untuk menampilkan form tambah mobil
Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');

// Rute untuk menyimpan data mobil baru
Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');

// Rute untuk menampilkan form edit mobil berdasarkan id
Route::get('/mobil/{id}/edit', [MobilController::class, 'edit'])->name('mobil.edit');

// Rute untuk memperbarui data mobil yang di-edit
Route::put('/mobil/{id}', [MobilController::class, 'update'])->name('mobil.update');

// Rute untuk menghapus mobil berdasarkan id
Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');

