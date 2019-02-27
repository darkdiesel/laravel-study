@extends('layouts.main')

@section('title', ' | News')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{ __('Create Post') }}</h1>
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
                    <div class="form-group">
                        <label for="post-title">{{ __('Title') }}</label>
                        <input type="text" class="form-control" name="title" id="post-title" value="{{old('title')}}" placeholder="{{ __('Enter title ...') }}">
                    </div>
                    <div class="form-group">
                        <label for="post-description">{{ __('Description') }}</label>
                        <textarea class="form-control" id="post-description" name="description" id="" cols="30" rows="10" placeholder="{{ __('Enter description ...') }}">{{old('description')}}</textarea>
                    </div>

                    <input class="btn btn-primary" type="submit" value="{{ __('Create') }}" name="post-save">

                </form>
            </div>
        </div>
    </div>
@endsection
