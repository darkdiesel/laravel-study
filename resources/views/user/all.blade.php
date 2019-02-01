@extends('layout.base')

@section('title', ' | Users')

@section('content')
<div class="users-section">
    <h1>Users</h1>
    @if(!$users->isEmpty())
        <ul>
            @foreach ($users as $user)
                <li>This is user {{$user->full_name}}</li>
            @endforeach
        </ul>
    @else
        <p>No users found.</p>
    @endif
</div>

@component('components.test-component')
    <div>
        <h3>Hi there, from test component</h3>
    </div>
@endcomponent

@endsection
