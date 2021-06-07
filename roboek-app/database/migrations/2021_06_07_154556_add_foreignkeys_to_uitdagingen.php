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
            $table->foreign('boek_id')->references('id')->on('boeken');
            $table->foreign('soort')->references('naam')->on('soorten_uitdagingen');
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
            $table->dropForeign('uitdagingen_boek_id_foreign');
            $table->dropForeign('uitdagingen_soort_foreign');
        });
    }
}
