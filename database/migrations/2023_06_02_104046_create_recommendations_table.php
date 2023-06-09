<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationsTable extends Migration
{
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->decimal('average_rating', 3, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recommendations');
    }
};
