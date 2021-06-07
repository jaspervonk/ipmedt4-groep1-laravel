<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SoortenItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soorten_items')->insert([
            'naam' => "Kastkleur",
        ]);

        DB::table('soorten_items')->insert([
            'naam' => "Kastdecoratie",
        ]);

        DB::table('soorten_items')->insert([
            'naam' => "Robotkleur",
        ]);
    }
}
