<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
