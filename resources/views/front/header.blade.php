<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('frontend/search/search.css') }}">
    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('frontend/quform/css/base.css') }}">
    <!-- theme core css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">

</head>
<body>




    <!-- MAIN WRAPPER ================================================== -->

    <div class="main-wrapper">
        @include('front.nav.header')

        @yield('content')

        @include('front.nav.footer')
    </div>

    <!-- BUY TEMPLATE
SCROLL TO TOP
================================================== -->
<a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

<!-- all js include start -->

<!-- jQuery -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>

<!-- popper js -->
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>

<!-- bootstrap -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

<!-- jquery -->
<script src="{{ asset('frontend/js/core.min.js') }}"></script>

<!-- search -->
<script src="{{ asset('frontend/search/search.js') }}"></script>

<!-- custom scripts -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

<!-- form plugins js -->
<script src="{{ asset('frontend/quform/js/plugins.js') }}"></script>

<!-- form scripts js -->
<script src="{{ asset('frontend/quform/js/scripts.js') }}"></script>
<!-- all js include end -->

</body>
</html>
