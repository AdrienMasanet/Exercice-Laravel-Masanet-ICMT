<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href=" {{ URL::asset('/images/cropped-LI_Lidem_favicon-32x32.png') }} " sizes="32x32">
    <link rel="icon" type="image/png" href=" {{ URL::asset('/images/cropped-LI_Lidem_favicon-192x192.png') }} " sizes="192x192">
    <link rel="apple-touch-icon" type="image/png" href="{{ URL::asset('/images/cropped-LI_Lidem_favicon-180x180.png') }}">
    <meta name="msapplication-TileImage" content="{{ URL::asset('/images/cropped-LI_Lidem_favicon-270x270.png') }} ">

    <title>ICMT | @yield('title')</title>

    <link type="text/css" rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('css')

</head>

<body>

    <x-topbar />

    <div id="content">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    @yield('js')

    <x-footer />

</body>

</html>
