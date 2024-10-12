<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController; // Pastikan ini di atas

// Route ke halaman awal (Welcome Page)
Route::get('/', function () {
    return view('welcome');
});



Route::resource('mobil', MobilController::class);

