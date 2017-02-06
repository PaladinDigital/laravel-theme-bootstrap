<!DOCTYPE html>
<html>
<head>
@yield('head')
@yield('meta')
@yield('styles')
</head>
<body>
@include('themes::paladindigital.laravel-bootstrap._nav')
@yield('content')
<aside>
@yield('sidebar')
@yield('widgets')
</aside>
@include('themes::paladindigital.laravel-bootstrap._footer')
@yield('scripts')
</body>
</html>