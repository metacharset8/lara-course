<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test($id){
        echo "привет";
        echo " твой номер - {$id}";
    }

    public function showWelPage($user){
        return view('wel', [
             'user' => $user,
        ]);
    }
}
