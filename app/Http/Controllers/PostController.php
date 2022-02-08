<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function posts() {
        $posts = Post::all();
        return view('pages.posts', compact('posts'));
    }

  /*   public function create() {
        return view('pages.post-create');
    } */
}
