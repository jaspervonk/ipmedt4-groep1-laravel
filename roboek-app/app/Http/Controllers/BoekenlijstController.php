<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BoekenlijstController extends Controller
{
    public function gekozenBoeken($id){

        //haal alle gekozen boeken van een user
        $gekozenBoeken = \App\Models\GekozenBoek::where("user_id", "=", $id)->get();

        $gekozenBoekenResultaten = array();

        //pak de informatie van het boek via boek_id fk
        foreach ($gekozenBoeken as $gekozenBoek) {
            $gekozenBoekenResultaten[] = \App\Models\Boek::where("id", "=", $gekozenBoek->boek_id)->first();
        }
        
        return ['boeken' => $gekozenBoekenResultaten];
    }
}