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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('description_detaillee');
            $table->string('image');
            $table->integer('prix');
            $table->integer('stock');
            $table->integer('note');
            $table->unsignedBigInteger('gamme_id'); 
            $table->foreign('gamme_id')->references('id')->on('gammes')->onDelete('cascade');
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
        Schema::dropIfExists('articles');
    }
};
