<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoekenkastenController extends Controller
{
    public function show($id){
        // Haal alle Medailles op uit de boekenkast stop ze in een array om mee te geven
        $medailles = array();
        for($i = 1; $i <= 8; $i++){
            $medaille_id = \App\Models\Boekenkast::where('user_id', '=', $id)->value('medaille_id_slot' . $i);
            // Als er een Medaille in een Slot staat; voeg deze toe
            if(!is_null($medaille_id)){
                $medailles[] = \App\Models\Medaille::find($medaille_id);
            }
        }

        // Haal alle Items op uit de boekenkast en stop ze in een array om mee te geven
        $items = array();
        for($i = 1; $i <= 6; $i++){
            $item_id = \App\Models\Boekenkast::where('user_id', '=', $id)->value('item_id_slot' . $i);
            // Als er een item in een slot staat; voeg deze toe
            if(!is_null($item_id)){
                $items[] = \App\Models\Item::find($item_id);
            }
        }

        return ['boekenkast' => \App\Models\Boekenkast::where('user_id', '=', $id)->first(),
                'eigenaar' => \App\Models\Boekenkast::where('user_id', '=', $id)->first()->Eigenaar,
                'medailles' => $medailles,
                'items' => $items];
    }
}
