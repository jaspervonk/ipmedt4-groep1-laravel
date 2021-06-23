<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BehaaldeItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Item 3 (Lege Plek)

        DB::table('behaalde_items')->insert([
            'item_id' => 3,
            'user_id' => 1,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 3,
            'user_id' => 2,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 3,
            'user_id' => 3,
        ]);

        // Item 4 (Welkom bij Roboek)

        DB::table('behaalde_items')->insert([
            'item_id' => 4,
            'user_id' => 1,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 4,
            'user_id' => 2,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 4,
            'user_id' => 3,
        ]);






    }
}
