<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    @include('layout.styles')
    @yield('styles')
</head>
<body>
    <div class="wrapper">
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </div>

    @include('layout.scripts')
    @yield('scripts');
</body>
</html>
