<!DOCTYPE html>
<html>
<head>
    <title>ADS | Auto Design Solutions</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>

</head>
<body class="@yield('bodyClass')">

@include('partials.mobileMenu')

@yield('header')

@yield('content')

@include('partials.footer')


@include('partials.globalSharedScripts')

@yield('bottomScripts')

</body>
</html>