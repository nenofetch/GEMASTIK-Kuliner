<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | SIKUKU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('frontend/assets') }}/images/favicon.png" rel="shortcut icon">
    <!-- CSS -->
    <link href="{{ asset('frontend/assets') }}/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/plugins/sal/sal.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/css/theme.css" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="{{ asset('frontend/assets') }}/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets') }}/plugins/font-awesome/css/all.css" rel="stylesheet">
</head>

<body data-preloader="1">
    <!-- Header -->
    @yield('content')
    @include('frontend.layouts.footer')
    <!-- ***** JAVASCRIPTS ***** -->
    <script src="{{ asset('frontend/assets') }}/plugins/jquery.min.js"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
    <script src="{{ asset('frontend/assets') }}/plugins/plugins.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/functions.js"></script>
</body>

</html>
