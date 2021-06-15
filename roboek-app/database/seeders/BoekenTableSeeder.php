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
            'genre_naam' => "Avontuur",
            'isbn' => 9789000339280,
            'titel' => "Botje",
            'auteur' => "Janneke Schotveld",
            'beschrijving' => "Het lijkt een saaie vakantie te worden voor Bibi. Maar dan wordt er een robot bezorgd: Botje. Bibi moet voor Botje zorgen, want Botje is in gevaar. Voorlezen vanaf ca. 7 jaar, zelf lezen vanaf ca. 8 jaar.",
            'image' => "img/default_9789000339280.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/default_9789066921863.jpg",
        ]);
        
        DB::table('boeken')->insert([
            'genre_naam' => "Dieren en natuur",
            'isbn' => 9789044749236,
            'titel' => "Een vriendin voor Elisa",
            'auteur' => "Sarah Bosse",
            'beschrijving' => "De moeder van Elisa is overleden. Een verdrietige tijd, Nu logeert Elisa bij haar oom en tante op een waddeneieland. Ze sluit virendschap met een pony, maar op een dag is de pony verdwenen.",
            'image' => "img/default_9789044749236.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789025860806,
            'titel' => "Gevangen op het kasteel",
            'auteur' => "Martine Letterie",
            'beschrijving' => "Marie logeert met haar vader op een buitenhuis. Op een ochtend is iedereen in rep en roer, er is een dure gouden munt gestolen. De vader van Marie wordt verdacht. Kan Marie zijn onschuld bewijzen?",
            'image' => "img/default_9789025860806.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789026148026,
            'titel' => "Leven van een loser 15 - Kopje-onder",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789026148026.png",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789043922760,
            'titel' => "De zoete zusjes gaan op vakantie",
            'auteur' => "Hanneke de Zoete",
            'beschrijving' => "De Zoete Zusjes hebben vakantie! Maar waar gaan Saar en Janna dit jaar hun spannende avonturen beleven?",
            'image' => "img/9789043922760.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025774684,
            'titel' => "Groot Biegel sprookjesboek",
            'auteur' => "Paul Biegel",
            'beschrijving' => "
                Paul Biegel noemde zichzelf ‘een ouderwetse sprookjesschrijver’. 
                En een rasechte verteller, dat was hij.  
                Lees bijvoorbeeld een verhaal over een witte zwaan die naar de sterren vliegt, 
                en eentje over een jongetje dat op wonderbaarlijke wijze zijn lievelingsbeer terugvindt. 
                Het ‘Groot Biegel sprookjesboek’ is met zijn heerlijke sprookjes een waar genot om voor te lezen. Of om zelf te lezen natuurlijk!",
            'image' => "img/9789025774684.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap en Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789026130977,
            'titel' => "Het oneindige verhaal",
            'auteur' => "Michael Ende",
            'beschrijving' => "TODO",
            'image' => "img/9789026130977.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789021681603,
            'titel' => "Oma luchtbuks",
            'auteur' => "Barbara Scholten",
            'beschrijving' => "TODO",
            'image' => "img/9789021681603.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789025881535,
            'titel' => "Schreeuw om middernacht",
            'auteur' => "Benjamin Read",
            'beschrijving' => "TODO",
            'image' => "img/9789025881535.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025871338,
            'titel' => "Geheimen van het wilde woud",
            'auteur' => "Tonke Dragt",
            'beschrijving' => "TODO",
            'image' => "img/9789025871338.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789492901675,
            'titel' => "Het heksenhandboek",
            'auteur' => "Nikki van de Car",
            'beschrijving' => "TODO",
            'image' => "img/9789492901675.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025877262,
            'titel' => "De ijstuin",
            'auteur' => "Guy Jones",
            'beschrijving' => "TODO",
            'image' => "img/9789025877262.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789025871406,
            'titel' => "De griezelbus 1",
            'auteur' => "Paul van Loon",
            'beschrijving' => "TODO",
            'image' => "img/9789025871406.jpg",
        ]);
    }
}
