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
            'threshhold_boeken' => 1,
        ]);

        DB::table('medailles')->insert([
            'naam' => "Eerste uitdaging!",
            'beschrijving' => "Je hebt je eerste uitdaging gehaald!",
            'image' => "img/default_medaille.png",
            'threshhold_uitdagingen' => 1,
        ]);

        DB::table('medailles')->insert([
            'naam' => "100 Munten!",
            'beschrijving' => "Je hebt ooit 100 munten gehad!",
            'image' => "img/default_medaille.png",
            'threshhold_saldo' => 100,
        ]);

        DB::table('medailles')->insert([
            'naam' => "1000 Munten!",
            'beschrijving' => "Je hebt ooit 1000 munten gehad!",
            'image' => "img/default_medaille.png",
            'threshhold_saldo' => 1000,
        ]);

        DB::table('medailles')->insert([
            'naam' => "Ahoooe!!!",
            'beschrijving' => "Je hebt Dolfje Weerwolfje afgerond!",
            'image' => "img/default_medaille.png",
        ]);

    }
}
