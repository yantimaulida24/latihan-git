<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    protected $primaryKey = 'no_plat_mobil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['no_plat_mobil', 'nama_mobil', 'jenis_mobil'];
}