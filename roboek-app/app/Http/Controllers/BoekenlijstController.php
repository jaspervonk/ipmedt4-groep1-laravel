<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BoekenlijstController extends Controller
{
    public function show(){
        $mijnBoeken = \App\Models\gekozen_boeken::all("boek_id");
        return \App\Models\boeken::all()->where("id", "=", $mijnBoeken);
    }
}