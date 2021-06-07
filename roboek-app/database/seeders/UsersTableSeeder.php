<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jeroen Rijsdijk",
            'email' => "rijsdijk.j@hsleiden.nl",
            'password' => bcrypt("laravel"),
            'saldo' => 10000,
            'aantal_boeken' => 4,
            'aantal_items' => 0,
            'aantal_medailles' => 4,
        ]);

        DB::table('users')->insert([
            'name' => "Jasper Vonk",
            'email' => "s1122268@student.hsleiden.nl",
            'password' => bcrypt("laravel"),
            'saldo' => 420,
            'aantal_boeken' => 2,
            'aantal_items' => 0,
            'aantal_medailles' => 3,
        ]);

        DB::table('users')->insert([
            'name' => "Teresa Dinh",
            'email' => "s1120553@student.hsleiden.nl",
            'password' => bcrypt("laravel"),
            'saldo' => 40,
            'aantal_boeken' => 0,
            'aantal_items' => 0,
            'aantal_medailles' => 1,
        ]);
    }
}
