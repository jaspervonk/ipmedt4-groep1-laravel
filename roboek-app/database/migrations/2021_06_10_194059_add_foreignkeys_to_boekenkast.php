<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToBoekenkast extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boekenkast', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('medaille_id_slot1')->references('id')->on('medailles');
            $table->foreign('medaille_id_slot2')->references('id')->on('medailles');
            $table->foreign('medaille_id_slot3')->references('id')->on('medailles');
            $table->foreign('medaille_id_slot4')->references('id')->on('medailles');
            $table->foreign('medaille_id_slot5')->references('id')->on('medailles');
            $table->foreign('medaille_id_slot6')->references('id')->on('medailles');
            $table->foreign('medaille_id_slot7')->references('id')->on('medailles');
            $table->foreign('medaille_id_slot8')->references('id')->on('medailles');
            $table->foreign('item_id_slot1')->references('id')->on('items');
            $table->foreign('item_id_slot2')->references('id')->on('items');
            $table->foreign('item_id_slot3')->references('id')->on('items');
            $table->foreign('item_id_slot4')->references('id')->on('items');
            $table->foreign('item_id_slot5')->references('id')->on('items');
            $table->foreign('item_id_slot6')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boekenkast', function (Blueprint $table) {
            $table->dropForeign('boekenkast_user_id_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot1_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot2_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot3_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot4_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot5_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot6_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot7_foreign');
            $table->dropForeign('boekenkast_medaille_id_slot8_foreign');
            $table->dropForeign('boekenkast_item_id_slot1_foreign');
            $table->dropForeign('boekenkast_item_id_slot2_foreign');
            $table->dropForeign('boekenkast_item_id_slot3_foreign');
            $table->dropForeign('boekenkast_item_id_slot4_foreign');
            $table->dropForeign('boekenkast_item_id_slot5_foreign');
            $table->dropForeign('boekenkast_item_id_slot6_foreign');
            
        });
    }
}
