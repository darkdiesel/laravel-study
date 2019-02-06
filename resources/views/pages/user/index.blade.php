@extends('layouts.main')

@section('title', ' | Users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{ __('Users') }}</h1>

                <div class="users-section">

                    @if(!$users->isEmpty())
                        @foreach ($users as $user)
                            <div class="card">
                                <div class="card-header">
                                    <span class="font-weight-bold">
                                        {{$user->full_name}}
                                    </span>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col" class="text-center">Posts</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>
                                                <a href="{{ route('user.show', [$app->getLocale(), $user->id]) }}">{{ $user->full_name }}</a>
                                            </td>
                                            <td class="text-center">{{count($user->posts)}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info">
                            <p>{{ __('No users found.') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @component('components.test-component')
        <div class="alert alert-primary my-2">
            <h3 class="m-0">Hi there, from test component</h3>
        </div>
    @endcomponent

@endsection
