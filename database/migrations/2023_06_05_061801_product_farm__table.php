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
        Schema::create('tb_productfarms', function (Blueprint $table) {

            $table->id();
            $table->string('nama_produk');
            $table->string('asal_produk');
            $table->integer('harga_produk');
            $table->text('gambar_produk');
            $table->string('produsen_produk');
            $table->text('deskripsi_produk');
            $table->string('status');
            $table->string('jenis_potong');
            // $table->string('qty');

            $table->boolean('halal');
            $table->boolean('rendah_lemak');
            $table->boolean('qty');

            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_productfarms');
    }
};
