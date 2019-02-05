@extends('layouts.main')

@section('title', ' | Detail Post')

@section('content')
    <h1>@lang('post.title.single')</h1>
    <table border="1">
        <thead>
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
            <td>{{ $post->author->full_name }}</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
        </tr>
        </tbody>
    </table>
@endsection
