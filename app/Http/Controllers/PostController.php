<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        // $id = Post::max('id');
        // dd($id);
        Post::create(['title'=> 'test', 'description' => 'some text']);
    }

    public function deleteLast(){
        Post::orderBy('created_at', 'desc')->first()->delete();
    }
}
