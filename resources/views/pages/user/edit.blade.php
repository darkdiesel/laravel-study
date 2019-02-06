@extends('layouts.main')

@section('title', ' | News')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{ __('Edit User') }} {{ $user->id }}</h1>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('user.update', [app()->getLocale(), $user->id]) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="post-name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" name="name" id="post-name" value="{{old('name')}}" placeholder="{{ __('Enter name ...') }}">
                    </div>
                    <div class="form-group">
                        <label for="post-first-name">{{ __('First Name') }}</label>
                        <input type="text" class="form-control" name="first-name" id="post-first-name" value="{{old('first-name')}}" placeholder="{{ __('Enter first name ...') }}">
                    </div>
                    <div class="form-group">
                        <label for="post-last-name">{{ __('Last Name') }}</label>
                        <input type="text" class="form-control" name="last-name" id="post-name" value="{{old('last-name')}}" placeholder="{{ __('Enter last name ...') }}">
                    </div>

                    <input class="btn btn-primary" type="submit" value="{{ __('Update') }}" name="user-update">

                </form>
            </div>
        </div>
    </div>
@endsection
