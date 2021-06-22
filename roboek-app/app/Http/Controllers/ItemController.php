<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function soorten($id){
        return ['items' => \App\Models\Item::all(),
                'boekenkast' => \App\Models\Boekenkast::where("user_id", "=", $id)->first(),
                'kastkleuren' => \App\Models\Item::where("soort", "=", "Kastkleur")->get(),
                'robotkleuren' => \App\Models\Item::where("soort", "=", "Robotkleur")->get(),
                'kastdecoraties' => \App\Models\Item::where("soort", "=", "Kastdecoratie")->get(),
                'behaalde_items' => \App\Models\BehaaldeItem::where("user_id", "=", $id)->get(),
                'user' => \App\Models\User::find($id)];
    }

    public function koopItem($id, Request $request, \App\Models\Item $Item, \App\Models\User $User, \App\Models\BehaaldeItem $BehaaldeItem, \App\Models\Boekenkast $Boekenkast){
        $BehaaldeItem->item_id = $request->item_id;
        $BehaaldeItem->user_id = $id;
        $BehaaldeItem->save();


        $user = $User::where("id" , "=" , $id)->first();
        $userSaldo = $user->saldo;
        $newSaldo = $userSaldo - $request->item_prijs;
        $user->saldo = $newSaldo;

        $user->save();

        $item = $Item::where('id', '=', $request->item_id)->first();
        // Als het een kastkleur is
        if($item->soort === "Kastkleur"){
            // Vul de kast_kleur_primary en kast_kleur_secondary in de boekenkast van de gebruiker
            $Boekenkast::where('user_id', '=', $id)->update([
                'kast_kleur_primary' => $item->kleur_primary,
                'kast_kleur_secondary' => $item->kleur_secondary,
            ]);
        }

        // Als het een robotkleur is
        if($item->soort === "Robotkleur"){
            // Vul de robot_kleur in de boekenkast van de gebruiker
            $Boekenkast::where('user_id', '=', $id)->update([
                'robot_kleur' => $item->kleur_primary
            ]);
        }
        return[$BehaaldeItem::where("user_id", "=", $id)->get()];
    }
}
