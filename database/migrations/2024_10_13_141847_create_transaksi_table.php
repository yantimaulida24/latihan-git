<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi'); // Auto-increment ID
            $table->unsignedBigInteger('id_pelanggan'); // Foreign key if needed
            $table->string('no_plat_mobil');
            $table->string('metode_pembayaran', 50);
            $table->decimal('total_pembayaran', 10, 2);
            $table->date('tanggal_transaksi');
            $table->string('status', 50);
            $table->timestamps(); // Menyimpan created_at dan updated_at secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
