<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    @include('partials.fonts')
    @include('partials.styles')
</head>
<body>
<div class="wrapper">
    @yield('page')
</div>

@include('partials.scripts')
</body>
</html>
