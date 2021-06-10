<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HoofdstukkenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoofdstukken')->insert([
            'boek_id' => 2,
            'hoofdstuk_nummer' => 1,
            'titel' => "Fantásie in gevaar",
        ]);

        DB::table('hoofdstukken')->insert([
            'boek_id' => 2,
            'hoofdstuk_nummer' => 2,
            'titel' => "Het broep op Atréjoe",
        ]);

        DB::table('hoofdstukken')->insert([
            'boek_id' => 2,
            'hoofdstuk_nummer' => 3,
            'titel' => "De oeroude Morla",
        ]);
    }
}
