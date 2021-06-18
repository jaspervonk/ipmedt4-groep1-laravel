<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        return ['items' => \App\Models\Item::all()];
    }
    
    public function soort($soort) {
        return ['items' => \App\Models\Item::all()->where("soort", "=", $soort)];
    }

    public function soorten(){
        return ['items' => \App\Models\Item::all(),
                'kastkleuren' => \App\Models\Item::where("soort", "=", "Kastkleur")->get(),
                'robotkleuren' => \App\Models\Item::where("soort", "=", "Robotkleur")->get(),
                'kastdecoraties' => \App\Models\Item::where("soort", "=", "Kastdecoratie")->get(),
                ];
    }
}
