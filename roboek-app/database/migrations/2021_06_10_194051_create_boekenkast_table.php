<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoekenkastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boekenkast', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('robot_kleur')->default();
            $table->string('kast_kleur')->default();
            $table->foreignId('medaille_id_slot1')->nullable();
            $table->foreignId('medaille_id_slot2')->nullable();
            $table->foreignId('medaille_id_slot3')->nullable();
            $table->foreignId('medaille_id_slot4')->nullable();
            $table->foreignId('medaille_id_slot5')->nullable();
            $table->foreignId('medaille_id_slot6')->nullable();
            $table->foreignId('medaille_id_slot7')->nullable();
            $table->foreignId('medaille_id_slot8')->nullable();
            $table->foreignId('item_id_slot1')->nullable();
            $table->foreignId('item_id_slot2')->nullable();
            $table->foreignId('item_id_slot3')->nullable();
            $table->foreignId('item_id_slot4')->nullable();
            $table->foreignId('item_id_slot5')->nullable();
            $table->foreignId('item_id_slot6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boekenkast');
    }
}
