@extends('layouts.main')

@section('title', ' | Main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Main page</h1>

                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @auth
                            You are logged in!
                        @else
                            Yuo are not logged in!
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
