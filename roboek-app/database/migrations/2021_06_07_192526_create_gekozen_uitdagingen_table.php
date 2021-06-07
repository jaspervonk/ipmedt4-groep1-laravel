<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGekozenUitdagingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gekozen_uitdagingen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('uitdaging_id');
            $table->string('geraden_antwoorden')->nullable();
            $table->boolean('behaald');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gekozen_uitdagingen');
    }
}
