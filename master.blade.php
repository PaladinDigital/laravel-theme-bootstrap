<?php
/*
 * Theme Name: Bootstrap
 * Template: Master
 * Author: Paladin Digital
 */
$theme = 'themes::paladindigital.laravel-bootstrap';

// Allow nav type to be overridden from controllers.
if (!isset($nav)) {
    $nav = $theme . '._navbar';
}

?><!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@yield('head')
@include($theme . '._meta')
@yield('styles')
</head>
<body>
@include($nav)
<div class="container-fluid">
    @yield('content')
    <aside>
        @yield('sidebar')
        @stack('widgets')
    </aside>
</div>
@include($theme . '._footer')
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>