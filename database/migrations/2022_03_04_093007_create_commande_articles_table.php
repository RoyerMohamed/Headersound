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
        Schema::create('commande_articles', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('commande_id'); 
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');
            $table->unsignedBigInteger('article_id'); 
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->integer("quantite"); 
            $table->integer("reduction"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_articles');
    }
};
