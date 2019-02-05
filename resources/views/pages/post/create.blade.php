@extends('layouts.main')

@section('title', ' | News')

@section('content')
    <h1>Post Create</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div>
            <label for="">Title</label><br/>
            <input type="text" name="title" value="{{old('title')}}">
        </div>
        <div>
            <label for="">Description</label><br/>
            <textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
        </div>
        <div>
            <input type="submit" value="Save" name="post-save">
        </div>
    </form>
@endsection
