<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoekenkastenController extends Controller
{
    public function show($id){
        return ['boekenkast' => \App\Models\Boekenkast::where('user_id', '=', $id)->first(),
                'eigenaar' => \App\Models\Boekenkast::where('user_id', '=', $id)->first()->Eigenaar];
    }
}
