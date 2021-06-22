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

    //haal informatie boek op van aangeklikt boek
    public function boekDetail($id){
        $boekInfo = \App\Models\Boek::where("id", "=", $id)->get()->first();

        return $boekInfo;
        
    }

    //haal alle hoofdstukken op van aangeklikt boek van een user
    public function alleHoofdstukken($id, \App\Models\Puzzel $Uitdaging){
        $hoofdstukken = \App\Models\Hoofdstuk::all()->where("boek_id", "=", $id);

        // Haal alle hoofdstukken op van het meegegeven boek
        $hoofdstukken = \App\Models\Hoofdstuk::where("boek_id", "=", $id)->get();

        // Maak een array uitdagingen
        $uitdagingen = array();
        // Loop door alle gevonden hoofdstukken
        foreach($hoofdstukken as $hoofdstuk){
            // Haal van het hoofdstuk de uitdaging op
            $uitdaging = $Uitdaging::where('hoofdstuk_id', '=', $hoofdstuk->id)->first();
            // Als er een uitdaging is gevonden; voeg hem toe aan de uitdagingen array
            if(!is_null($uitdaging)){
                $uitdagingen[] = $uitdaging;
            }
        }

        return ['hoofdstukken' => $hoofdstukken,
                'uitdagingen' => $uitdagingen];
    }

    //haal alle gelezen hoofdstukken op van aangeklikt boek van een user
    public function gelezenHoofdstukken($boek, $id){
        $alleGelezen = \App\Models\GelezenHoofdstuk::where("user_id", "=", $id)->where("boek_id", "=", $boek)->get();

        return ['gelezenHoofdstukken' => $alleGelezen];
    }

    //schrijven naar de database hoofdstuk afgevinkt
    public function hoofdstukAfvinken($boek, $hoofdstuk, $id, \App\Models\GelezenHoofdstuk $gelezenHoofdstuk){
        $gelezenHoofdstuk->boek_id = $boek;
        $gelezenHoofdstuk->hoofdstuk_id = $hoofdstuk;
        $gelezenHoofdstuk->user_id = $id;

        $gelezenHoofdstuk->save();
    }

    //schrijven naar de database hoofdstuk verwijderen
    public function hoofdstukVerwijder($boek, $hoofdstuk, $id, \App\Models\GelezenHoofdstuk $gelezenHoofdstuk){
        $gelezenHoofdstuk::where("boek_id", "=", $boek)->where("hoofdstuk_id", "=", $hoofdstuk)->where("user_id", "=", $id)->delete();
    }

    public function verwijderBoek($boek, $id, \App\Models\GekozenBoek $GekozenBoek){
        $GekozenBoek::where("boek_id", "=", $boek)->where("user_id", "=", $id)->delete();
    }
}