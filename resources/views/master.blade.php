<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vender/bootstrap/css/bootstrap.min.css') }}">
    @yield('head')
    <title>@yield('title','master')</title>
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('vender/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>