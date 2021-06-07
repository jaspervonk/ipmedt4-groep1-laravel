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
            'naam' => "Detective",
            'beschrijving' => "Boeken waar een mysterie wordt opgelost.",
            'image' => "img/default_detective.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Dieren",
            'beschrijving' => "Boeken met dieren.",
            'image' => "img/default_dieren.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Griezelverhaal",
            'beschrijving' => "Enge verhalen over spoken en andere wezens.",
            'image' => "img/default_griezelverhaal.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Historisch verhaal",
            'beschrijving' => "Boeken over het verleden.",
            'image' => "img/default_historisch_verhaal.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Humor",
            'beschrijving' => "Boeken die je aan het lachen maken.",
            'image' => "img/default_humor.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Oorlog en Verzet",
            'beschrijving' => "Boeken over de oorlog.",
            'image' => "img/default_oorlog_en_verzet.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Psychologisch Verhaal",
            'beschrijving' => "Boeken waarin mensen elkaar willen begrijpen.",
            'image' => "img/default_psychologisch_verhaal.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "School",
            'beschrijving' => "Boeken over school.",
            'image' => "img/default_school.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Sociaal/Politiek Verhaal",
            'beschrijving' => "Boeken die gaan over hoe mensen met elkaar omgaan.",
            'image' => "img/default_sociaal_politiek_verhaal.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Spanning",
            'beschrijving' => "Boeken die spannend zijn.",
            'image' => "img/default_spanning.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Sport",
            'beschrijving' => "Boeken over sport.",
            'image' => "img/default_sport.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Sprookjes/Fantasie",
            'beschrijving' => "Boeken met betoverende verhalen.",
            'image' => "img/default_sprookjes_fantasie.jpg",
        ]);

        DB::table('genres')->insert([
            'naam' => "Vriendschap en Verliefd",
            'beschrijving' => "Boeken over vriendschappen en verliefd zijn.",
            'image' => "img/default_vriendschap_en_verliefd.jpg",
        ]);
    }
}
