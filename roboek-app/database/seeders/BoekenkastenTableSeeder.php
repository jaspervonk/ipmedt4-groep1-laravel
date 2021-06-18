<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BoekenkastenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boekenkasten')->insert([
            'user_id' => 1,
            'medaille_id_slot1' => 6,
            'medaille_id_slot2' => 1,
            'medaille_id_slot3' => 2,
            'medaille_id_slot4' => 3,
            'medaille_id_slot5' => 4,
            'medaille_id_slot6' => 5,
            'item_id_slot1' => 3,
        ]);

        DB::table('boekenkasten')->insert([
            'user_id' => 2,
            'medaille_id_slot1' => 6,
            'medaille_id_slot2' => 1,
            'medaille_id_slot3' => 2,
            'medaille_id_slot4' => 3,
            'item_id_slot1' => 3,
        ]);

        DB::table('boekenkasten')->insert([
            'user_id' => 3,
            'medaille_id_slot1' => 6,
            'medaille_id_slot2' => 2,
        ]);
    }
}
