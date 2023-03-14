<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NamesController extends Controller
{
    public function index()
    {
        // $names = Name::find([1, 2]);
        // $names = Name::find(1);
        // dd($names->last_name);

        $names = Name::namesOnLetter('П')->get();
        dd($names);
    }

    public function show($id)
    {
        $name = Name::findOrFail($id);
        dd($name);
    }

    public function create()
    {
        Name::create(['first_name' => 'Антон', 'last_name' => 'Павлов']);
    }

    public function delete($id)
    {
        Name::destroy($id);
    }
}
