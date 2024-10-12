<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            // Menggunakan $table->id() untuk membuat kolom id auto-increment
            $table->id('id_transaksi');
            // Menyesuaikan foreignId dengan tabel 'pelanggan'
            $table->string('id_pelanggan', 50);
            $table->date('tanggal_transaksi');
            $table->string('no_plat_mobil', 50);
            $table->string('metode_pembayaran', 50);
            $table->decimal('total_pembayaran', 10, 2);
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
