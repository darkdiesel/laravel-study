@extends('layouts.main')

@section('title', ' | News')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>News</h1>

                <div class="news-section">
                    @forelse($posts As $post)
                        <div class="card my-3">
                            <div class="card-header">
                                <span class="font-weight-bold">{{$post->title}}</span>
                            </div>
                            <div class="card-body">
                                {{$post->description}}
                            </div>
                            <div class="card-footer">
                                <a class="float-left" href={{ route('user.show', [$app->getLocale(), $post->id]) }}">{{ $post->author->full_name }}</a>
                                <a class="btn btn-primary float-right" href="{{ route('post.show', [app()->getLocale(), $post->id]) }}">{{ __('Read') }}</a>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info">
                            <p>Sorry, but there is no news else.</p>
                        </div>
                    @endforelse
                </div>
                @auth
                    <div class="clearfix py-5">
                        <a class="btn btn-danger float-right" href="{{ route('post.create', [app()->getLocale()]) }}">Add new post</a>
                    </div>
                @else
                    <div class="alert alert-info">
                        {{__('Authorised to create new post')}}
                    </div>
                @endauth
            </div>
        </div>
    </div>





@endsection
