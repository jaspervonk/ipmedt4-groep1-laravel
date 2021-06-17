<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PuzzelController extends Controller
{
    public function show($id){
        return \App\Models\puzzels::where("id", "=", $id)->get()->first();
    }
}
