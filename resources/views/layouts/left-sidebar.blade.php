@extends('layouts.base')

@section('page')
    <header>
        @include('partials.header')
    </header>

    <aside>
        @include('partials.left-sidebar')
    </aside>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
@endsection
