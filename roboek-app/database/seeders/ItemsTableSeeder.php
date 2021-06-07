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
            'naam' => "Kastkleur oranje",
            'beschrijving' => "De kleur van je kast wordt oranje.",
            'prijs' => 200,
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Kastkleur blauw",
            'beschrijving' => "De kleur van je kast wordt blauw.",
            'prijs' => 200,
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Troffee",
            'beschrijving' => "Dit is een troffee voor op je kast!",
            'prijs' => 400,
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Robotkleur",
            'naam' => "Robotkleur paars",
            'beschrijving' => "Hiermee wordt de kleur van Roboek paars!",
            'prijs' => 300,
            'image' => "img/default_item_color.png",
        ]);
    }
}
