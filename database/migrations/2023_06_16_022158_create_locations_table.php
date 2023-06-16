<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_supplocations', function (Blueprint $table) {
            $table->id();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->String('nama_lokasi');
            $table->String('pemilik_lokasi');
            $table->String('kategori');
            $table->String('jalan_lokasi');
            $table->String('asalkot_lokasi');
            $table->String('ket_lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_supplocations');
    }
};
