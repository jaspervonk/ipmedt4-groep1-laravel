<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoekenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boeken', function (Blueprint $table) {
            $table->id();
            $table->string('genre_naam');
            $table->bigInteger('isbn');
            $table->string('titel');
            $table->string('auteur');
            $table->longText('beschrijving');
            $table->string('image');
            $table->string('videolink')->nullable();
            $table->string('hoofdpersoon')->nullable();
            $table->longText('hoofdpersoon_beschrijving')->nullable();
            $table->string('hoofdpersoon_image')->nullable();
            $table->string('audio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boeken');
    }
}
