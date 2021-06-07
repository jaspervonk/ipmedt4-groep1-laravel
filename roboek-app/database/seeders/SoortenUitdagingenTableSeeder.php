<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SoortenUitdagingenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soorten_uitdagingen')->insert([
            'naam' => "Woordzoeker",
        ]);

        DB::table('soorten_uitdagingen')->insert([
            'naam' => "Tekening",
        ]);

        DB::table('soorten_uitdagingen')->insert([
            'naam' => "Quiz",
        ]);
        
    }
}
