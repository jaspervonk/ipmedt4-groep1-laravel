<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GekozenBoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gekozen_boeken')->insert([
            'boek_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('gekozen_boeken')->insert([
            'boek_id' => 1,
            'user_id' => 2,
        ]);

        DB::table('gekozen_boeken')->insert([
            'boek_id' => 1,
            'user_id' => 3,
        ]);

        DB::table('gekozen_boeken')->insert([
            'boek_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('gekozen_boeken')->insert([
            'boek_id' => 2,
            'user_id' => 2,
        ]);

        DB::table('gekozen_boeken')->insert([
            'boek_id' => 2,
            'user_id' => 3,
        ]);

        DB::table('gekozen_boeken')->insert([
            'boek_id' => 3,
            'user_id' => 1,
        ]);

        DB::table('gekozen_boeken')->insert([
            'boek_id' => 4,
            'user_id' => 1,
        ]);
    }
}
