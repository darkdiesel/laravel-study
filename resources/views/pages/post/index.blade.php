@extends('layouts.main')

@section('title', ' | News')

@section('content')
    <h1>Posts All</h1>
    <div class="news-section">
        <h1>News</h1>
        <ul>
            @forelse($posts As $post)
                <li><a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></li>
            @empty
                <p>Sorry, but there is no news else.</p>
            @endforelse
        </ul>
    </div>

    <a href="{{ route('post.create') }}">Add new post</a>
@endsection