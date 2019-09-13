<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index() {
        // return App\Posts::all();
        return view("posts.index");
    }
}
