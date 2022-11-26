<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <title>Fridee</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<!-- Header _________________________________________________ -->
@include('components.home.sidebar')
@auth
    @include('components.home.edit-user-modal')
@endauth
@include('components.welcome.header')
<!-- Content _________________________________________________ -->
@yield('content')
<!-- Footer _________________________________________________ -->
@include('components.welcome.footer')
</body>
</html>
