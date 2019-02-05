@extends('layouts.main')

@section('title', ' | News')

@section('content')
    <h1>Posts All</h1>
    <div class="news-section">
        <h1>News</h1>
        <ul>
            @forelse($posts As $post)
                <li><a href="{{ route('post.show', [app()->getLocale(), $post->id]) }}">{{$post->title}}</a></li>
            @empty
                <p>Sorry, but there is no news else.</p>
            @endforelse
        </ul>
    </div>

    <a class="btn btn-primary" href="{{ route('post.create', [app()->getLocale()]) }}">Add new post</a>
@endsection
