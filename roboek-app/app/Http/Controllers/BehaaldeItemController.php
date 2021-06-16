<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BehaaldeItemController extends Controller
{
    public function index($user_id) {
        return ['behaalde_items' => \App\Models\BehaaldeItem::all()->where("user_id", "=", $user_id),
        ]
    }
}
