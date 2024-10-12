<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi'; // Nama tabel yang digunakan
    protected $primaryKey = 'id_transaksi'; // Primary key
    protected $fillable = [
        'tanggal_transaksi',
        'id_pelanggan',
        'no_plat_mobil',
        'metode_pembayaran',
        'total_pembayaran',
        'status',
    ];

    // Jika tidak menggunakan created_at dan updated_at, tambahkan ini:
    // public $timestamps = false;
}
