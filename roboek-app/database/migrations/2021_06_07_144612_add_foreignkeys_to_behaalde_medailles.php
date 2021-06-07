<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToBehaaldeMedailles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('behaalde_medailles', function (Blueprint $table) {
            $table->foreign('medaille_id')->references('id')->on('medailles');
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
        Schema::table('behaalde_medailles', function (Blueprint $table) {
            $table->dropForeign('behaalde_medailles_medaille_id_foreign');
            $table->dropForeign('behaalde_medailles_user_id_foreign');
        });
    }
}
