<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbTestController extends Controller
{
    public function query (){
        $users = DB::table('users')->pluck('name');
        dump($users->count());
    }
}
