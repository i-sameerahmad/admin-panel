<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varified_pets', function (Blueprint $table) {
            $table->id();
            $table->string('vpet_name');
            $table->string('vpet_description');
            $table->string('vpet_price');
            $table->string('vpet_image');
            $table->string('vpet_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('varified_pets');
    }
};
