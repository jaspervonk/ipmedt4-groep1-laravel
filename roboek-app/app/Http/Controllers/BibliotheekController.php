<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BibliotheekController extends Controller
{
    public function index(){
        return \App\Models\boeken::all();
    }

    public function show($id){
        return \App\Models\boeken::where('id', '=', $id)->get();
    }

    public function showGenre($genre){
        return \App\Models\boeken::where('genre_naam', '=', $genre)->get();
    }

    public function chooseGenre(){
        return \App\Models\genres::all();
    }

    public function addToFavorites($id, Request $request, \App\Models\gekozen_boeken $boeken){
        $boeken->boek_id = $id;
        $boeken->user_id = 1;
        $boeken->save();
        return response()->json([$request->all()]);
    }

    public function deleteFromFavorites($id){
        DB::table('gekozen_boeken')->where('id', '=', $id)->delete();
    }
}