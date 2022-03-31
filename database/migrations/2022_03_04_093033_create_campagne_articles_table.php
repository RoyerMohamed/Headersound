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
        Schema::create('campagne_articles', function (Blueprint $table) {
            $table->unsignedBigInteger('campagne_id'); 
            $table->foreign('campagne_id')->references('id')->on('campagnes')->onDelete('cascade');
            $table->unsignedBigInteger('article_id'); 
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');         
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
        Schema::dropIfExists('campagne_articles');
    }
};
