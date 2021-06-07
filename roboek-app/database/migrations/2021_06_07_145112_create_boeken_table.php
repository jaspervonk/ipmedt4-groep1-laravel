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
            $table->string('titel');
            $table->string('auteur');
            $table->string('beschrijving');
            $table->string('image');
            $table->integer('aantal_hoofdstukken');
            $table->integer('aantal_bladzijdes');
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