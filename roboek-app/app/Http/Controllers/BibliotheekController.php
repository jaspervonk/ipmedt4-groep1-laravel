<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;

class BibliotheekController extends Controller
{
    public function index(\App\Models\GekozenBoek $boeken){
        $boekenVanGenre = \App\Models\Boek::all(); 
        $favoBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boekenVanGenre,
            'favorieten' => $favoBoeken
        ));
    }

    public function show($id, \App\Models\GekozenBoek $boeken){
        $boek = \App\Models\Boek::where('id', '=', $id)->get(); 
        $gekozenBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boek,
            'gekozen' => $gekozenBoeken
        ));
        return \App\Models\Boek::where('id', '=', $id)->get();
    }

    public function showGenre($genre, \App\Models\FavorieteBoeken $boeken){
        $boekenVanGenre = \App\Models\Boek::where('genre_naam', '=', $genre)->get(); 
        $favoBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boekenVanGenre,
            'favorieten' => $favoBoeken
        ));
    }

    public function chooseGenre(){
        return \App\Models\Genre::all();
    }

    public function addToFavorites($id, Request $request, \App\Models\FavorieteBoeken $boeken){
        $boeken->boek_id = $id;
        $boeken->user_id = 1;
        $boeken->save();
        //-------------------
        $boekenVanGenre = \App\Models\Boek::where('genre_naam', '=', $request->genre)->get(); 
        $favoBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boekenVanGenre,
            'favorieten' => $favoBoeken
        ));
    }

    public function deleteFromFavorites($id, Request $request, \App\Models\FavorieteBoeken $boeken){
        DB::table('favoriete_boeken')->where('id', '=', $id)->delete();
        //-------------------
        $validatedData = $request->validate([
            id => 'nullable',
            genre => 'nullable'
        ]);

        return json_encode($validatedData);
    }

    public function addToBoekenlijst($id, Request $request, \App\Models\GekozenBoek $boeken){
        $boeken->boek_id = $id;
        $boeken->user_id = 1;
        $boeken->save();
        //-------------------
        $boek = \App\Models\Boek::where('id', '=', $id)->get(); 
        $gekozenBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boek,
            'gekozen' => $gekozenBoeken
        ));
        return \App\Models\Boek::where('id', '=', $id)->get();
    }

    public function deleteFromBoekenlijst($id, Request $request, \App\Models\GekozenBoek $boeken){
        DB::table('gekozen_boeken')->where('boek_id', '=', $id)->delete();
        //-------------------
        $boek = \App\Models\Boek::where('id', '=', $id)->get(); 
        $gekozenBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boek,
            'gekozen' => $gekozenBoeken
        ));
        return \App\Models\Boek::where('id', '=', $id)->get();
    }
}