<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boekenkast extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $table = "boekenkasten";

    public function Eigenaar(){
        return $this->hasOne("\App\Models\User", "id", "user_id");
    }
}
