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

        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
    </div>

    @include('partials.scripts')
</body>
</html>
