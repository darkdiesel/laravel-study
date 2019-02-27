@extends('layouts.base')

@section('page')
    <header>
        @include('partials.header')
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-light">
        @include('partials.footer')
    </footer>
@endsection
