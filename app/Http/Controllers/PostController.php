<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        Post::create(array_merge($request->all(), ['user_id' => 1]));

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $locale
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, Post $post)
    {
        return view('pages.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $locale
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, $id)
    {
        $post = Post::find($id);

        return view('pages.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $locale
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $locale, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $locale
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $id)
    {
        //
    }
}
