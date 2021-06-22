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
            'kleur_primary'=> "#E39E4C",
            'kleur_secondary'=> "#C76229",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Kastkleur blauw",
            'beschrijving' => "De kleur van je kast wordt blauw.",
            'prijs' => 200,
            'kleur_primary'=> "#1F81DC",
            'kleur_secondary'=> "#374B92",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Kastkleur bruin",
            'beschrijving' => "De kleur van je kast wordt bruin.",
            'prijs' => 200,
            'kleur_primary'=> "#826549",
            'kleur_secondary'=> "#524130",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastkleur",
            'naam' => "Kastkleur roze",
            'beschrijving' => "De kleur van je kast wordt roze.",
            'prijs' => 200,
            'kleur_primary'=> "#ff59e6",
            'kleur_secondary'=> "#a32791",
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Troffee",
            'beschrijving' => "Dit is een troffee voor op je kast!",
            'prijs' => 400,
            'image' => "img/item_troffee.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Kastdecoratie",
            'naam' => "Bril",
            'beschrijving' => "Dit is de magische bril van Harry Potter!",
            'prijs' => 400,
            'image' => "img/default_item_color.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Robotkleur",
            'naam' => "Robotkleur paars",
            'beschrijving' => "Hiermee wordt de kleur van Roboek paars!",
            'prijs' => 300,
            'kleur_primary'=> "#B61FDC",
            'image' => "img/robot_icon_preview.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Placeholder",
            'naam' => "Leeg kastdecoratie",
            'beschrijving' => "Je kan hier een item plaatsen!",
            'prijs' => 0,
            'kleur_primary'=> "#B61FDC",
            'image' => "img/default_empty_slot.png",
        ]);

        DB::table('items')->insert([
            'soort' => "Robotkleur",
            'naam' => "Robotkleur blauw",
            'beschrijving' => "Hiermee wordt de kleur van Roboek blauw!",
            'prijs' => 300,
            'kleur_primary'=> "#3687b5",
            'image' => "img/robot_icon_preview.png",
        ]);

    }
}
