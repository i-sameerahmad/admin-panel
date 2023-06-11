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
            $table->BigInteger('doc_phone');
            $table->string('doc_email');
            $table->integer('doc_fee');
            $table->string('doc_address');
            $table->string('doc_slot');
            $table->string('doc_status');
            $table->string('doc_image');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
