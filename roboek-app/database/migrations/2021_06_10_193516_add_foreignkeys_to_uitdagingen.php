<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToUitdagingen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uitdagingen', function (Blueprint $table) {
            $table->foreign('hoofdstuk_id')->references('id')->on('hoofdstukken');
            $table->foreign('soort')->references('naam')->on('soorten_uitdagingen');
            $table->foreign('medaille_id')->references('id')->on('medailles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uitdagingen', function (Blueprint $table) {
            $table->dropForeign('uitdagingen_hoofdstuk_id_foreign');
            $table->dropForeign('uitdagingen_soort_foreign');
            $table->dropForeign('uitdagingen_medaille_id_foreign');
        });
    }
}
