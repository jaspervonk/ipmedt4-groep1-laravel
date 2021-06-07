<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUitdagingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uitdagingen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boek_id');
            $table->string('soort');
            $table->integer('hoofdstuk')->nullable();
            $table->string('vraag')->nullable();
            $table->string('antwoorden')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uitdagingen');
    }
}
