<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;

class BibliotheekController extends Controller
{
    public function index(\App\Models\FavorieteBoeken $boeken){
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

    // public function showFavorieten(\App\Models\FavorieteBoeken $boeken){
    //     $boek_ids = \App\Models\Boek::all()->pluck('id'); 
    //     $favoBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');

    //     $favoBoekenItems = \App\Models\Boek::where('id', '=', for($i = 1;$i<=$favoBoeken[i])->get();

    //     return Response::json(array(
    //         'boeken' => $boek_ids,
    //         'favorieten' => $favoBoeken,
    //         'favorieten_items' => $favoBoekenItems,
    //     ));
    // }

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
        DB::table('favoriete_boeken')->where('boek_id', '=', $id)->where('user_id', '=', 1)->delete();
        //-------------------
        $boekenVanGenre = \App\Models\Boek::where('genre_naam', '=', $request->genre)->get(); 
        $favoBoeken = $boeken::where('user_id', '=', 1)->pluck('boek_id');
        return Response::json(array(
            'boeken' => $boekenVanGenre,
            'favorieten' => $favoBoeken
        ));
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