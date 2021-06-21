<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoekenkastenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boekenkasten', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('robot_kleur')->default("#90c2c4");
            $table->string('kast_kleur_primary')->default("#38290f");
            $table->string('kast_kleur_secondary')->default("#110d05");
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
        Schema::dropIfExists('boekenkasten');
    }
}
