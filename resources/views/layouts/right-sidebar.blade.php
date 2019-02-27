@extends('layouts.base')

@section('page')
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <aside>
        @include('partials.right-sidebar')
    </aside>

    <footer>
        @include('partials.footer')
    </footer>
@endsection
