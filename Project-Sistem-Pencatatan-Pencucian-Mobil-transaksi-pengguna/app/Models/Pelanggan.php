<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel (plural lowercase)
    protected $table = 'pelanggan';

    // Tentukan primary key jika tidak menggunakan id sebagai default
    protected $primaryKey = 'id_pelanggan';

    // Tentukan kolom-kolom yang bisa diisi secara massal (mass assignment)
    protected $fillable = [
        'nama_pelanggan',
        'no_telepon',
    ];
}
