<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/boot.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/style_common.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/style1.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
    <script src="{{ asset('/front') }}/js/modernizr.custom.69142.js"></script>
    <script src="{{ asset('/front') }}/js/jquery-1.10.1.min.js"></script>
    <script src="{{ asset('/front') }}/js/bootstrap.min.js" ></script>
</head>
<body>
@include('front.includes.header')

@yield('body')
<!-- ===== services ===== -->
<!-- ===== Team Section ===== -->


<!-- About Section -->

<!-- ===== Team Section ===== -->

<!-- ===== Contact Us ===== -->


@include('front.includes.footer')
</body>
</html>