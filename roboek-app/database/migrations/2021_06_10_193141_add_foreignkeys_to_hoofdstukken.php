<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToHoofdstukken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoofdstukken', function (Blueprint $table) {
            $table->foreign('boek_id')->references('id')->on('boeken');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoofdstukken', function (Blueprint $table) {
            $table->dropForeign('hoofdstukken_boek_id_foreign');
        });
    }
}
