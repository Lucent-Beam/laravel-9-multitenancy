<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function blog()
    {
        $posts = Post::get();

        return view('blog', ['posts' => $posts])
    }

    public function post(Post $post)
    {
        return view('home', ['post' => $post])
    }
}
