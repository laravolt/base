<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <title>BIGMAC for a BIGDAY</title>

    @include('elements.favicon')

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ theme_asset('vendor/sui/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ theme_asset('css/app.css') }}">
    @yield('style-head')

    <script src="{{ theme_asset('vendor/jquery.min.js') }}"></script>
    <script src="{{ theme_asset('vendor/sui/semantic.min.js') }}"></script>
    <script src="{{ theme_asset('js/app.js') }}"></script>

    @yield('script-head')
</head>
<body>
@yield('body')
@yield('script-end')
</body>
</html>
