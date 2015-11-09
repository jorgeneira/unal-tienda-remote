<!DOCTYPE html>
<html>
<head>
    <title>ADS | Auto Design Solutions</title>
    <link rel="stylesheet" href="{{ asset('build/css/all.css') }}">

</head>
<body>

@include('partials.mobileMenu')

@yield('header')

@yield('content')

@yield('footer')

<script type="text/javascript" src="{{ asset('build/js/all.js') }}"></script>

@include('partials.globalSharedScripts')

</body>
</html>