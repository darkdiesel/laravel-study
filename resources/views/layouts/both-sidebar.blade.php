<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    @include('partials.styles')
</head>
<body>
<div class="wrapper">
    <header>
        @include('partials.header')
    </header>

    <aside>
        @include('partials.left-sidebar')
    </aside>

    <main>
        @yield('content')
    </main>

    <aside>
        @include('partials.right-sidebar')
    </aside>

    <footer>
        @include('partials.footer')
    </footer>
</div>

@include('partials.scripts')
</body>
</html>
