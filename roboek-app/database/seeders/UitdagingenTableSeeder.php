<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UitdagingenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uitdagingen')->insert([
            'hoofdstuk_id' => 2,
            'soort' => "Woordzoeker",
            'vraag' => "0000000000000leon0000weerwolf0d00000u000o0000bril0l00000a000f0rood0m00j000000a00etimmiea000000000n00",
            'antwoorden' => "weerwolf maan dolfje timmie noura leo rood bril" ,
            'beloning' => 100,
        ]);
    }
}
