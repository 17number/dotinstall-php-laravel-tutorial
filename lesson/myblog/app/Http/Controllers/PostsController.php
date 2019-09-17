<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    //
    public function index() {
        $posts = Post::latest()->get();
        return view("posts.index", ["posts" => $posts]);
    }

    public function show(Post $post) {
        return view("posts.show", ["post" => $post]);
    }

    public function create() {
        return view("posts.create");
    }

    public function store(PostRequest $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect("/");
    }

    public function edit(Post $post) {
        return view("posts.edit", ["post" => $post]);
    }

    public function update(PostRequest $request, Post $post) {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect("/");
        // return redirect("/posts/$post->id");  // 個別投稿ページにリダイレクトするならこっち
    }
}
