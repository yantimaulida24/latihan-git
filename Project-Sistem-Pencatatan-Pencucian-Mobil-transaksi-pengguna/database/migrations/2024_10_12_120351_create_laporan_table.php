<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('id_laporan'); // Primary key
            $table->unsignedBigInteger('id_transaksi'); // Foreign key
            $table->date('tanggal');
            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('id_akun'); // Foreign key
            $table->timestamps(); // created_at, updated_at

            // Foreign key relations
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi')->onDelete('cascade');
            $table->foreign('id_akun')->references('id_akun')->on('akun')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
