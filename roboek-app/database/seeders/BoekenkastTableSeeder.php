<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BoekenkastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boekenkast')->insert([
            'user_id' => 1,
            'medaille_id_slot1' => 1,
            'medaille_id_slot2' => 2,
            'medaille_id_slot3' => 3,
            'medaille_id_slot4' => 4,
            'medaille_id_slot5' => 5,
            'item_id_slot1' => 3,
        ]);

        DB::table('boekenkast')->insert([
            'user_id' => 2,
            'medaille_id_slot1' => 1,
            'medaille_id_slot2' => 2,
            'medaille_id_slot3' => 3,
            'item_id_slot1' => 3,
        ]);

        DB::table('boekenkast')->insert([
            'user_id' => 3,
            'medaille_id_slot1' => 2,
        ]);
    }
}