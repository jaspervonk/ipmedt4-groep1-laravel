<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Oranje",
            'beschrijving' => "De kleur van je kast wordt oranje.",
            'prijs' => 200,
            'kleur_primary'=> "#DE984F",
            'kleur_secondary'=> "#7F491B",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Blauw",
            'beschrijving' => "De kleur van je kast wordt blauw.",
            'prijs' => 200,
            'kleur_primary'=> "#5897D1",
            'kleur_secondary'=> "#244787",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Plek leeg maken",
            'beschrijving' => "Opgeruimd staat netjes!",
            'prijs' => 250,
            'image' => "img/lege_plek.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Welkom bij Roboek!",
            'beschrijving' => "Je bent nieuw bij Roboek!",
            'prijs' => 400,
            'image' => "img/item_roboek.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Placeholder",
            'naam' => "Leeg kastdecoratie",
            'beschrijving' => "Je kan deze plek nog vullen!",
            'prijs' => 0,
            'kleur_primary'=> "#B61FDC",
            'image' => "img/default_empty_slot.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Bruin",
            'beschrijving' => "De kleur van je kast wordt bruin.",
            'prijs' => 200,
            'kleur_primary'=> "#826549",
            'kleur_secondary'=> "#524130",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Roze",
            'beschrijving' => "De kleur van je kast wordt roze.",
            'prijs' => 200,
            'kleur_primary'=> "#da90cf",
            'kleur_secondary'=> "#68245f",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Harry Potter's bril",
            'beschrijving' => "Ik vraag me af wat je allemaal kan zien als je hem opzet...",
            'prijs' => 300,
            'image' => "img/item_harry_potter_bril.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Robotkleur",
            'naam' => "Paars",
            'beschrijving' => "Hiermee wordt de kleur van Roboek paars!",
            'prijs' => 300,
            'kleur_primary'=> "#B61FDC",
            'image' => "img/robot_icon_preview.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Robotkleur",
            'naam' => "Blauw",
            'beschrijving' => "Hiermee wordt de kleur van Roboek blauw!",
            'prijs' => 300,
            'kleur_primary'=> "#3687b5",
            'image' => "img/robot_icon_preview.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Goude Troffee",
            'beschrijving' => "Voor de echte winnaars... met geld.",
            'prijs' => 1500,
            'image' => "img/item_troffee.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Rubik's Kubus",
            'beschrijving' => "Gemaakt door Ernő Rubik. Wist je dat de kubus wel 43 TRILJOEN mogelijkheden had?",
            'prijs' => 500,
            'image' => "img/item_rubiks_kubus.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Lavalamp",
            'beschrijving' => "Iets om uren naar te staren.",
            'prijs' => 500,
            'image' => "img/item_lavalamp.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Lama Lamp",
            'beschrijving' => "Ik vraag me af of hij echt is...",
            'prijs' => 250,
            'image' => "img/item_lama_lamp.png",
        ]);
    }
}
