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
            'boek_id' => "1",
            'soort' => "Tekening",
            'hoofdstuk' => 4,
            'vraag' => "Maak een tekening van Botje",
        ]);

        DB::table('uitdagingen')->insert([
            'boek_id' => "1",
            'soort' => "Quiz",
            'vraag' => "Botje zegt in plaats van ‘Bibi’ ‘Bibibi’, en in plaats van ‘papa’, ‘papapa’. Zie jij wat Botje doet? Hoe denk je dat botje mama zou noemen? …",
            'antwoorden' => "mamama",
        ]);

        DB::table('uitdagingen')->insert([
            'boek_id' => "2",
            'soort' => "Woordzoeker",
            'hoofdstuk' => 5,
            'vraag' => "Zoek woorden in de woordzoeker.",
        ]);

        DB::table('uitdagingen')->insert([
            'boek_id' => "4",
            'soort' => "Tekening",
            'hoofdstuk' => 4,
            'vraag' => "Hoe denk je dat het kasteel het eruit ziet? Teken het kasteel.",
        ]);
    }
}
