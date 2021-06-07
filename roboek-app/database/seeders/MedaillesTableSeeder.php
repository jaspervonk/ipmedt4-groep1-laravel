<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MedaillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medailles')->insert([
            'naam' => "Eerste boek!",
            'beschrijving' => "Je hebt je eerste boek gelezen. Mogen er nog veel volgen!",
            'image' => "img/default_medaille.png",
        ]);

        DB::table('medailles')->insert([
            'naam' => "Eerste uitdaging!",
            'beschrijving' => "Je hebt je eerste uitdaging gehaald!",
            'image' => "img/default_medaille.png",
        ]);

        DB::table('medailles')->insert([
            'naam' => "100 Munten!",
            'beschrijving' => "Je hebt een 100 munten gehaald!",
            'image' => "img/default_medaille.png",
        ]);

        DB::table('medailles')->insert([
            'naam' => "1000 Munten!",
            'beschrijving' => "Je hebt een 1000 munten gehaald!",
            'image' => "img/default_medaille.png",
        ]);

    }
}
