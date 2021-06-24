<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'naam' => "Avontuur",
            'beschrijving' => "Boeken over op reis gaan en nieuwe plekken ontdekken.",
            'image' => "img/default_avontuur.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Dieren&Natuur",
            'beschrijving' => "Boeken over dieren en natuur.",
            'image' => "img/default_dieren.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Griezelverhaal",
            'beschrijving' => "Enge verhalen over spoken en andere wezens.",
            'image' => "img/default_griezelverhaal.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Humor",
            'beschrijving' => "Boeken die je aan het lachen maken.",
            'image' => "img/default_humor.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Spanning",
            'beschrijving' => "Boeken die spannend zijn.",
            'image' => "img/default_spanning.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Fantasie",
            'beschrijving' => "Boeken met betoverende verhalen.",
            'image' => "img/default_sprookjes_fantasie.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Sprookjes",
            'beschrijving' => "Boeken met een wereld vol wonderen!",
            'image' => "img/default_sprookjes_sprookjes.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Vriendschap&Verliefd",
            'beschrijving' => "Boeken over vriendschappen en verliefd zijn.",
            'image' => "img/default_vriendschap_en_verliefd.jpg",
        ]);
    }
}
