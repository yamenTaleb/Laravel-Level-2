<!doctype html>
@php
    $direction = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() === 'ar' ? 'assets-admin-rtl' : 'assets-admin';
@endphp
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ __('keywords.dashboard') }} - @yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset($direction) }}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset($direction) }}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset($direction) }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset($direction) }}/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset($direction) }}/css/app-dark.css" id="darkTheme">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="dark @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() === 'ar') rtl @endif">
@yield('content')
<script src="{{ asset($direction) }}/js/jquery.min.js"></script>
<script src="{{ asset($direction) }}/js/popper.min.js"></script>
<script src="{{ asset($direction) }}/js/moment.min.js"></script>
<script src="{{ asset($direction) }}/js/bootstrap.min.js"></script>
<script src="{{ asset($direction) }}/js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="{{ asset($direction) }}/js/tinycolor-min.js"></script>
<script src="{{ asset($direction) }}/js/config.js"></script>
<script src="{{ asset($direction) }}/js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
</script>
</body>
</html>
