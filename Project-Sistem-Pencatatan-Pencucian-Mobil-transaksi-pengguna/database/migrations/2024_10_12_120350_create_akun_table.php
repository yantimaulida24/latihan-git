<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunTable extends Migration
{
    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->id('id_akun'); // Primary key
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('posisi');
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('akun');
    }
}
