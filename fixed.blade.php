<?php
/*
 * Theme Name: Bootstrap
 * Template: Fixed
 * Author: Paladin Digital
 */
$theme = 'themes::paladindigital.laravel-bootstrap';

?><!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    @yield('head')
    @yield('meta')
    @yield('styles')
</head>
<body>
@include($theme . '._nav')
<div class="container">
    @yield('content')
    <aside>
        @yield('sidebar')
        @yield('widgets')
    </aside>
</div>
@include($theme . '._footer')
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>