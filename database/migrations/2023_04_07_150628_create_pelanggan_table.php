<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 150);
            $table->string('jenis_kelamin', 10);
            $table->integer('nomor_hp');
            $table->string('alamat_email', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
};
