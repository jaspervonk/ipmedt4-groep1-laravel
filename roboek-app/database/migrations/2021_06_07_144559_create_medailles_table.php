<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedaillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medailles', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('beschrijving');
            $table->string('image');
            $table->integer('threshhold_saldo')->default(0);
            $table->integer('threshhold_boeken')->default(0);
            $table->integer('threshhold_items')->default(0);
            $table->integer('threshhold_uitdagingen')->default(0);
            $table->integer('threshhold_medailles')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medailles');
    }
}
