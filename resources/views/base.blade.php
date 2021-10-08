<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mr Robot | @yield('title')</title>

    <link type="text/css" rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('css')

</head>

<body>

    <x-topbar />

    <div class="container mx-auto">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    @yield('js')

    <x-footer />

</body>

</html>
