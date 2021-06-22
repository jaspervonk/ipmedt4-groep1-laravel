<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BehaaldItem extends Model
{
    use HasFactory;
    protected $table = "behaalde_items";

    public function Item(){
        return $this->hasOne("\App\Models\Item", "id", "item_id");
    }
}
