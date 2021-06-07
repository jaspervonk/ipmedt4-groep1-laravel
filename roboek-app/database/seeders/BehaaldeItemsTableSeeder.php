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
        DB::table('behaalde_items')->insert([
            'item_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 1,
            'user_id' => 2,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 3,
            'user_id' => 1,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 3,
            'user_id' => 2,
        ]);

        DB::table('behaalde_items')->insert([
            'item_id' => 4,
            'user_id' => 1,
        ]);


    }
}
