<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoekenkastenController extends Controller
{
    public function show($id){
        // Haal alle Medailles op uit de boekenkast stop ze in een array om mee te geven
        $boekenkastMedailles = array();
        for($i = 1; $i <= 8; $i++){
            $medaille_id = \App\Models\Boekenkast::where('user_id', '=', $id)->value('medaille_id_slot' . $i);
            // Als er een Medaille in een Slot staat; voeg deze toe
            if(!is_null($medaille_id)){
                $boekenkastMedailles[] = \App\Models\Medaille::find($medaille_id);
            }
            else{
                // Als er geen medaille in het slot moet komen; voeg default empty slot medaille toe
                $boekenkastMedailles[] = \App\Models\Medaille::find(7);
            }
        }

        // Haal alle Items op uit de boekenkast en stop ze in een array om mee te geven
        $boekenkastItems = array();
        for($i = 1; $i <= 6; $i++){
            $item_id = \App\Models\Boekenkast::where('user_id', '=', $id)->value('item_id_slot' . $i);
            // Als er een item in een slot staat; voeg deze toe
            if(!is_null($item_id)){
                $boekenkastItems[] = \App\Models\Item::find($item_id);
            }
            else{
                // Als er geen Item in het slot moet komen; voeg default empty slot Item toe
                $boekenkastItems[] = \App\Models\Item::find(5);
            }
        }

        // Haal alle Medailles op die behaald zijn door de gebruiker en stop ze in een array om mee te geven
        $behaaldeMedailles = array();
        // Haal alle 'behaalde medailles' op
        $behaaldeMedaillesId = \App\Models\BehaaldMedaille::where('user_id', '=', $id)->get();
        // Voor elk 'behaald medaille'; pak daarvan de 'medaille' en voeg deze toe aan de array
        foreach($behaaldeMedaillesId as $behaaldeMedailleId){
            $behaaldeMedailles[] = $behaaldeMedailleId->Medaille;
        }

        // Haal alle Items op die behaald zijn door de gebruiker en stop ze in een array om mee te geven
        $behaaldeItems = array();
        // Haal alle 'behaalde items' op
        $behaaldeItemsId = \App\Models\BehaaldItem::where('user_id', '=', $id)->get();
        // Voor elk 'behaald item'; pak daarvan de 'item' en voeg deze toe aan de array
        foreach($behaaldeItemsId as $behaaldeItemId){
            if($behaaldeItemId->Item->soort === "Kastdecoratie"){
                $behaaldeItems[] = $behaaldeItemId->Item;
            }
            
        }

        return ['boekenkast' => \App\Models\Boekenkast::where('user_id', '=', $id)->first(),
                'eigenaar' => \App\Models\Boekenkast::where('user_id', '=', $id)->first()->Eigenaar,
                'boekenkast_medailles' => $boekenkastMedailles,
                'boekenkast_items' => $boekenkastItems,
                'behaalde_medailles' => $behaaldeMedailles,
                'behaalde_items' => $behaaldeItems];
    }
}
