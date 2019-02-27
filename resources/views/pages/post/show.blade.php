@extends('layouts.main')

@section('title', ' | Detail Post')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>@lang('post.title.single')</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">

                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td><a href={{ route('user.show', [$app->getLocale(), $post->id]) }}">{{ $post->author->full_name }}</a></td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
