<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToBoeken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boeken', function (Blueprint $table) {
            $table->foreign('genre_naam')->references('naam')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boeken', function (Blueprint $table) {
            $table->dropForeign('boeken_genre_naam_foreign');
        });
    }
}
