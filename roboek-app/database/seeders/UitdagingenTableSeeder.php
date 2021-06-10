<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UitdagingenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uitdagingen')->insert([
            'hoofdstuk_id' => 1,
            'soort' => "Woordzoeker",
            'vraag' => "Zoek de woorden in de woordzoeker",
            'beloning' => 100,
        ]);

        DB::table('uitdagingen')->insert([
            'hoofdstuk_id' => 3,
            'soort' => "Vraag",
            'vraag' => "Wat heeft dolfje weerwolfje gedaan om mevrouw Krijtjes boos is?",
            'antwoorden' => "Hij heeft één van haar kippen opgegeten.",
            'medaille_id' => 5,
        ]);
    }
}
