<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function all()
    {
        $posts = Post::all();

        return view('pages.post.all', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('pages.post.create');

    }

    public function save(PostRequest $request){
        //dd($request->all());

//        $this->validate($request, [
//            'title' => 'required'
//        ]);
//        dd(array_merge($request->all(), ['user_id' => 1]));

        Post::create(array_merge($request->all(), ['user_id' => 1]));

        return redirect(route('news'));
    }
}
