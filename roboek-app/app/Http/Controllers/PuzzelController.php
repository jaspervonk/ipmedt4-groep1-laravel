<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PuzzelController extends Controller
{
    //Geeft de correcte puzzel terug
    public function show($id){
        return \App\Models\Puzzel::where("id", "=", $id)->get()->first();
    }

    //Geeft de muntjes aan de correcte gebruiker
    public function geefMuntjes($id, $muntjes, \App\Models\User $user){
        $gebruiker = $user::where("id", "=", $id)->get("saldo")->first();
        $balans = $gebruiker->saldo;
        $nieuwSaldo = $balans + $muntjes;
        DB::update('UPDATE users SET saldo = ? WHERE id = ?', [$nieuwSaldo, $id]);
    }

    //Geeft de medaille terug aan welke opdracht die hangt
    public function showMedaille($id){
        return \App\Models\Medaille::where("id", "=", $id)->get()->first();
    }

    //Geeft de correcte gebruiker de correcte medaille
    public function geefMedaille($id, $medaille, \App\Models\BehaaldMedaille $behaald){
        $behaald->user_id = $id;
        $behaald->medaille_id = $medaille;
        $behaald->save();
    }
}
