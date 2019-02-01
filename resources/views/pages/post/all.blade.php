@extends('layouts.main')

@section('title', ' | News')

@section('content')
    <div class="news-section">
        <h1>News</h1>
        <ul>
            @forelse($posts As $post)
                <li>{{$post->title}}</li>
            @empty
                <p>Sorry, but there is no news else.</p>
            @endforelse
        </ul>
    </div>

    <a href="/post/create">Add new post</a>
@endsection
