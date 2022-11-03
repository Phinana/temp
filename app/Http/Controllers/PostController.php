<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function show() {
        $posts = Post::Newest()->get();
        return view('home', ['posts' => $posts]);
    }

    public function store(PostRequest $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('home_show');
    }

    public function show_post($id) {
        $post = Post::where('id', $id)->with('comments')->first();
        return view('home_post', ['post' => $post]);
    }
}
