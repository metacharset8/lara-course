<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NamesController extends Controller
{
    public function index(){
        // $names = Name::find([1, 2]);
        $names = Name::find(1);
        dd($names->last_name);
    }
}
