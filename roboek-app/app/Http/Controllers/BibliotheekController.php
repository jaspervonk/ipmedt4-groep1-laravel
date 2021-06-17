<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;

class BibliotheekController extends Controller
{
    public function index(){
        return \App\Models\boeken::all();
    }

    public function show($id, \App\Models\gekozen_boeken $boeken){
        $boek = \App\Models\boeken::where('id', '=', $id)->get(); 
        $gekozenBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boek,
            'gekozen' => $gekozenBoeken
        ));
        return \App\Models\boeken::where('id', '=', $id)->get();
    }

    public function showGenre($genre, \App\Models\favoriete_boeken $boeken){
        $boekenVanGenre = \App\Models\boeken::where('genre_naam', '=', $genre)->get(); 
        $favoBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boekenVanGenre,
            'favorieten' => $favoBoeken
        ));
    }

    public function chooseGenre(){
        return \App\Models\genres::all();
    }

    public function addToBoekenlijst($id, Request $request, \App\Models\gekozen_boeken $boeken){
        $boeken->boek_id = $id;
        $boeken->user_id = 1;
        $boeken->save();
        //-------------------
        $boek = \App\Models\boeken::where('id', '=', $id)->get(); 
        $gekozenBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boek,
            'gekozen' => $gekozenBoeken
        ));
        return \App\Models\boeken::where('id', '=', $id)->get();
    }

    public function addToFavorites($id, Request $request, \App\Models\favoriete_boeken $boeken){
        $boeken->boek_id = $id;
        $boeken->user_id = 1;
        $boeken->save();
        return response()->json([$request->all()]);
    }

    public function deleteFromFavorites($id){
        DB::table('favoriete_boeken')->where('id', '=', $id)->delete();
    }

    public function deleteFromBoekenlijst($id, Request $request, \App\Models\gekozen_boeken $boeken){
        DB::table('gekozen_boeken')->where('boek_id', '=', $id)->delete();
        //-------------------
        $boek = \App\Models\boeken::where('id', '=', $id)->get(); 
        $gekozenBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boek,
            'gekozen' => $gekozenBoeken
        ));
        return \App\Models\boeken::where('id', '=', $id)->get();
    }
}