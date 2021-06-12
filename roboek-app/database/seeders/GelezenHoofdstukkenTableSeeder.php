<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GelezenHoofdstukkenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gelezen_hoofdstukken')->insert([
            'hoofdstuk_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('gelezen_hoofdstukken')->insert([
            'hoofdstuk_id' => 1,
            'user_id' => 2,
        ]);

        DB::table('gelezen_hoofdstukken')->insert([
            'hoofdstuk_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('gelezen_hoofdstukken')->insert([
            'hoofdstuk_id' => 2,
            'user_id' => 2,
        ]);

        DB::table('gelezen_hoofdstukken')->insert([
            'hoofdstuk_id' => 3,
            'user_id' => 1,
        ]);
    }
}
