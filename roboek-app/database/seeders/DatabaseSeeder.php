<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            MedaillesTableSeeder::class,
            BehaaldeMedaillesTableSeeder::class,
            GenresTableSeeder::class,
            BoekenTableSeeder::class,
            HoofdstukkenTableSeeder::class,
            GelezenHoofdstukkenTableSeeder::class,
            SoortenUitdagingenTableSeeder::class,
            UitdagingenTableSeeder::class,
            GekozenUitdagingenTableSeeder::class,
            SoortenItemsTableSeeder::class,
            ItemsTableSeeder::class,
            BehaaldeItemsTableSeeder::class,
            BoekenkastTableSeeder::class,
        ]);
    }
}
