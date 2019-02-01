<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all() {
        $posts = Post::all();

        return view('pages.post.all', compact('posts'));
    }
}
