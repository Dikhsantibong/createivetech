<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dynamic Title -->
    <title>@yield('title', config('app.name', 'CreativeTech'))</title>

    <!-- Favicon / Logo Title -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('ashley/img/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('ashley/img/logo/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('ashley/img/logo/logo.png') }}">

    <!-- Theme Color (optional tapi profesional) -->
    <meta name="theme-color" content="#0b0b0b">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ashley/css/style.css') }}">

    <!-- Extra head per halaman -->
    @stack('head')
</head>

<body>
    @yield('content')

    <!-- JS -->
    <script src="{{ asset('ashley/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('ashley/js/plugins/swup.min.js') }}"></script>
    <script src="{{ asset('ashley/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('ashley/js/plugins/fancybox.min.js') }}"></script>
    <script src="{{ asset('ashley/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('ashley/js/plugins/smooth-scroll.js') }}"></script>
    <script src="{{ asset('ashley/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('ashley/js/plugins/ScrollTo.min.js') }}"></script>
    <script src="{{ asset('ashley/js/main.js') }}"></script>

    <!-- Extra script per halaman -->
    @stack('scripts')
</body>
</html>
