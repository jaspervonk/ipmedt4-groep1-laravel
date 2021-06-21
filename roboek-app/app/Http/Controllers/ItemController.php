<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function soorten($id){
        return ['items' => \App\Models\Item::all(),
                'kastkleuren' => \App\Models\Item::where("soort", "=", "Kastkleur")->get(),
                'robotkleuren' => \App\Models\Item::where("soort", "=", "Robotkleur")->get(),
                'kastdecoraties' => \App\Models\Item::where("soort", "=", "Kastdecoratie")->get(),
                'behaalde_items' => \App\Models\BehaaldeItem::where("user_id", "=", $id)->get(),
                ];
    }

    public function updateColor($id) {

    }

}
