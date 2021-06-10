<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToGekozenUitdagingen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gekozen_uitdagingen', function (Blueprint $table) {
            $table->foreign('uitdaging_id')->references('id')->on('uitdagingen');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gekozen_uitdagingen', function (Blueprint $table) {
            $table->dropForeign('gekozen_uitdagingen_uitdaging_id_foreign');
            $table->dropForeign('gekozen_uitdagingen_user_id_foreign');
        });
    }
}
