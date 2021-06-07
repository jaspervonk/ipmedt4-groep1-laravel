<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GekozenUitdagingenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gekozen_uitdagingen')->insert([
            'uitdaging_id' => "1",
            'user_id' => "1",
            'behaald' => TRUE,
        ]);

        DB::table('gekozen_uitdagingen')->insert([
            'uitdaging_id' => "2",
            'user_id' => "1",
            'behaald' => TRUE,
        ]);

        DB::table('gekozen_uitdagingen')->insert([
            'uitdaging_id' => "3",
            'user_id' => "1",
            'behaald' => TRUE,
        ]);

        DB::table('gekozen_uitdagingen')->insert([
            'uitdaging_id' => "4",
            'user_id' => "1",
            'behaald' => TRUE,
        ]);

        DB::table('gekozen_uitdagingen')->insert([
            'uitdaging_id' => "1",
            'user_id' => "2",
            'behaald' => TRUE,
        ]);

        DB::table('gekozen_uitdagingen')->insert([
            'uitdaging_id' => "2",
            'user_id' => "2",
            'behaald' => FALSE,
        ]);

        DB::table('gekozen_uitdagingen')->insert([
            'uitdaging_id' => "3",
            'user_id' => "2",
            'behaald' => FALSE,
        ]);

    }
}
