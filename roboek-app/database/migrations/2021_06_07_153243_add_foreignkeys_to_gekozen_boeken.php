<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToGekozenBoeken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gekozen_boeken', function (Blueprint $table) {
            $table->foreign('boek_id')->references('id')->on('boeken');
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
        Schema::table('gekozen_boeken', function (Blueprint $table) {
            $table->dropForeign('gekozen_boeken_boek_id_foreign');
            $table->dropForeign('gekozen_boeken_user_id_foreign');
        });
    }
}