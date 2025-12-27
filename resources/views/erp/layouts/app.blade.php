<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ERP Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard-template/duralux-php/assets/images/favicon.ico') }}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/css/bootstrap.min.css') }}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/daterangepicker.min.css') }}" />
	
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/jquery.time-to.min.css') }}">	
	
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/tagify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/tagify-data.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/quill.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/tui-calendar.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/tui-theme.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/tui-time-picker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/tui-date-picker.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/emojionearea.min.css') }}">	

    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/jquery.time-to.min.css') }}">
	
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/vendors/css/dataTables.bs5.min.css') }}">	
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-template/duralux-php/assets/css/theme.min.css') }}" />
</head>
<body>

    {{-- CONTENT --}}
    @yield('content')

    <!-- JAVASCRIPT -->
    <!-- jQuery -->
    <script src="{{ asset('dashboard-template/duralux-php/assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ asset('dashboard-template/duralux-php/assets/vendors/js/daterangepicker.min.js') }}"></script>	
    <script src="{{ asset('dashboard-template/duralux-php/assets/vendors/js/apexcharts.min.js') }}"></script>	
    <script src="{{ asset('dashboard-template/duralux-php/assets/vendors/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/duralux-php/assets/vendors/js/jquery.time-to.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('dashboard-template/duralux-php/assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/duralux-php/assets/js/dashboard-init.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/duralux-php/assets/js/analytics-init.min.js') }}"></script>	
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('dashboard-template/duralux-php/assets/js/theme-customizer-init.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
