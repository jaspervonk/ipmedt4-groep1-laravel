<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToGelezenHoofdstukken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gelezen_hoofdstukken', function (Blueprint $table) {
            $table->foreign('hoofdstuk_id')->references('id')->on('hoofdstukken');
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
        Schema::table('gelezen_hoofdstukken', function (Blueprint $table) {
            $table->dropForeign('gelezen_hoofdstukken_hoofdstuk_id_foreign');
            $table->dropForeign('gelezen_hoofdstukken_user_id_foreign');
        });
    }
}
