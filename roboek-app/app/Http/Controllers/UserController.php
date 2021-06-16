<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index() {
        return view('form');
    }

    
    public function store (Request $request, \App\Models\User $users) {
        //$users = $request->validate([
        //    'naam' => 'voornaam',
        //    'password' => 'leukenaam'
        //]);
    

        $users->name = $request->voornaam;
        $users->password = $request->leukenaam;

        $users->save();


        // return $request->voornaam;
    }

    
}
