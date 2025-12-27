<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/bootstrap-grid.css') }}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/font-awesome.min.css') }}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/swiper.min.css') }}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{ asset('ashley/css/plugins/fancybox.min.css') }}">
    <!-- ashley scss -->
    <link rel="stylesheet" href="{{ asset('ashley/css/style.css') }}">

    <!-- Tempatkan link/style/script global di sini jika perlu -->
</head>
<body>
    @yield('content')

    <script src="{{ asset('ashley/js/plugins/jquery.min.js') }}"></script>
    <!-- swup js -->
    <script src="{{ asset('ashley/js/plugins/swup.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('ashley/js/plugins/swiper.min.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ asset('ashley/js/plugins/fancybox.min.js') }}"></script>
    <!-- gsap js -->
    <script src="{{ asset('ashley/js/plugins/gsap.min.js') }}"></script>
    <!-- scroll smoother -->
    <script src="{{ asset('ashley/js/plugins/smooth-scroll.js') }}"></script>
    <!-- scroll trigger js -->
    <script src="{{ asset('ashley/js/plugins/ScrollTrigger.min.js') }}"></script>
    <!-- scroll to js -->
    <script src="{{ asset('ashley/js/plugins/ScrollTo.min.js') }}"></script>
    <!-- ashley js -->
    <script src="{{ asset('ashley/js/main.js') }}"></script>
</body>
</html>
