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
@include($theme . '.cdn._bs3head')
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
@include($theme . '.cdn._bs3foot')
@stack('scripts')
</body>
</html>