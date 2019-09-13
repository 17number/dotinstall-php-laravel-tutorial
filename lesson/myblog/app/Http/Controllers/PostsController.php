<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index() {
        $posts = Post::latest()->get();
        dd($posts->toArray()); // dump and die
        return view("posts.index");
    }
}
