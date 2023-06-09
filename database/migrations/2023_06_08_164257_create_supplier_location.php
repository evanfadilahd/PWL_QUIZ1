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
        Schema::create('tb_supplier_location', function (Blueprint $table) {
            $table->id();
            $table->string('latlong');

            $table->string('nama_tempat');
            $table->string('namapem_tempat');
            $table->string('kategori');
            $table->string('jalan_tempat');
            $table->string('asalkot_tempat');
            $table->text('keterangan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_supplier_location');
    }
};
