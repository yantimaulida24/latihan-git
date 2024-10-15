<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil'; // Nama tabel yang digunakan
    protected $primaryKey = 'no_plat_mobil'; // Primary key, auto-increment
    public $incrementing = true; // Pastikan auto-increment aktif
    protected $keyType = 'int'; // Tipe data integer untuk ID

    protected $fillable = [
        'no_plat_mobil',
        'id_pelanggan',
        'jenis mobil',
        'nama mobil',
    ];
}
