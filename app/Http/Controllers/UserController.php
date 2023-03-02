<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($num = null){
        if($num){
            echo $num;
        } else {
            echo "пользователь не зарегистрирован";
        }
    }

    public function showForm(){
        return view('form');
    }

    public function form(){
        return redirect(route("home"));
    }
}
