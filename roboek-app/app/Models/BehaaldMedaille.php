<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BehaaldMedaille extends Model
{
    use HasFactory;
    protected $table = "behaalde_medailles";

    public function Medaille(){
        return $this->hasOne("\App\Models\Medaille", "id", "medaille_id");
    }
}
