<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BehaaldeMedaillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 1,
            'user_id' => 2,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 2,
            'user_id' => 2,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 2,
            'user_id' => 3,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 3,
            'user_id' => 1,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 3,
            'user_id' => 2,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 4,
            'user_id' => 1,
        ]);

        DB::table('behaalde_medailles')->insert([
            'medaille_id' => 5,
            'user_id' => 1,
        ]);

    }
}
