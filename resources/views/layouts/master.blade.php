<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BookShop | @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('extra-meta')

<!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}} images/favicon.ico">
    <link rel="apple-touch-icon" href="{{asset('images/icon.png')}}">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- Cusom css -->
    <link rel="stylesheet" href=" {{asset('css/custom.css')}}">

    <!-- Modernizer js -->
    <script src=" {{asset('js/vendor/modernizr-3.5.0.min.js')}} "></script>
    @yield('css')
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Header -->
@include('partials.header')
<!-- Header -->
    <!-- Start Search Popup -->
@include('partials.search')


@yield('content')

<!-- Footer Area -->
@include('partials.footer')
<!-- //Footer Area -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->


</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/active.js')}}"></script>
@yield('scripts')

</body>
</html>
