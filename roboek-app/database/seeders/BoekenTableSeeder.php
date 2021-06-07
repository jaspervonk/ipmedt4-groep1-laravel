<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boeken')->insert([
            'genre_naam' => "Detective",
            'isbn' => 9789000339280,
            'titel' => "Botje",
            'auteur' => "Janneke Schotveld",
            'beschrijving' => "Het lijkt een saaie vakantie te worden voor Bibi. Maar dan wordt er een robot bezorgd: Botje. Bibi moet voor Botje zorgen, want Botje is in gevaar. Voorlezen vanaf ca. 7 jaar, zelf lezen vanaf ca. 8 jaar.",
            'image' => "img/default_9789000339280.jpg",
            'aantal_bladzijdes' => 144,
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/default_9789066921863.jpg",
            'aantal_bladzijdes' => 160,
        ]);
        
        DB::table('boeken')->insert([
            'genre_naam' => "Dieren",
            'isbn' => 9789044749236,
            'titel' => "Een vriendin voor Elisa",
            'auteur' => "Sarah Bosse",
            'beschrijving' => "De moeder van Elisa is overleden. Een verdrietige tijd, Nu logeert Elisa bij haar oom en tante op een waddeneieland. Ze sluit virendschap met een pony, maar op een dag is de pony verdwenen.",
            'image' => "img/default_9789044749236.jpg",
            'aantal_bladzijdes' => 95,
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Historisch Verhaal",
            'isbn' => 9789025860653,
            'titel' => "Gevangen op het kasteel",
            'auteur' => "Martine Letterie",
            'beschrijving' => "Marie logeert met haar vader op een buitenhuis. Op een ochtend is iedereen in rep en roer, er is een dure gouden munt gestolen. De vader van Marie wordt verdacht. Kan Marie zijn onschuld bewijzen?",
            'image' => "img/default_9789044749236.jpg",
            'aantal_bladzijdes' => 95,
        ]);
    }
}
