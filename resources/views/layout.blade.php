<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @yield('carousel')
    @yield('sideMenu')
    @yield('booking')
    @yield('remise')
    @yield('description')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
