<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoofdstukkenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoofdstukken', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boek_id');
            $table->integer('hoofdstuk_nummer');
            $table->string('titel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoofdstukken');
    }
}
