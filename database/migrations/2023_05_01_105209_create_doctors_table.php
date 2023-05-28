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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doc_name');
            $table->string('doc_description');
            $table->string('doc_qualification');
            $table->integer('doc_phone');
            $table->string('doc_email');
            $table->integer('doc_fee');
            $table->string('doc_address');
            $table->string('doc_slot');
            $table->string('doc_status');
            $table->string('doc_image');
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
        Schema::dropIfExists('doctors');
    }
};
