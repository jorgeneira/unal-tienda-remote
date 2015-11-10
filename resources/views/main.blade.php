<!DOCTYPE html>
<html>
<head>
    <title>ADS | Auto Design Solutions</title>
    <link rel="stylesheet" href="{{ asset('build/css/all.css') }}">
    <script type="text/javascript" src="{{ asset('build/js/all.js') }}"></script>

</head>
<body class="@yield('bodyClass')">

@include('partials.mobileMenu')

@yield('header')

@yield('content')

@include('partials.footer')


@include('partials.globalSharedScripts')

</body>
</html>