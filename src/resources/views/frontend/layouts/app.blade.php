
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONTS  -->
    <!-- <link rel="stylesheet" href="../fonts/nunito.css"> -->
    <!-- <link rel="stylesheet" href="../fonts/roboto.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">

    <!-- REQUIRED CSS: BOOTSTRAP, METISMENU, PERFECT-SCROLLBAR  -->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/dist/css/vendor.min.css">

    <!-- PLUGINS FOR CURRENT PAGE -->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/plugins/swiper/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/plugins/noty/noty.min.css">

    <!-- Mimity CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/dist/css/style.min.css">
    <title>@yield('title')</title>
</head>
<body>

@include('frontend.includes.header')
<!-- Main Content -->
@yield('content')
<!-- /Main Content -->
@include('frontend.includes.footer')


<!-- REQUIRED JS  -->
<script src="{{ asset('frontend/') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('frontend/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/') }}/plugins/feather-icons/feather.min.js"></script>
<script src="{{ asset('frontend/') }}/plugins/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('frontend/') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- PLUGINS FOR CURRENT PAGE -->
<script src="{{ asset('frontend/') }}/plugins/swiper/swiper.min.js"></script>
<script src="{{ asset('frontend/') }}/plugins/noty/noty.min.js"></script>
<script src="{{ asset('frontend/') }}/plugins/jquery-countdown/jquery.countdown.min.js"></script>

<!-- Mimity JS  -->
<script src="{{ asset('frontend/') }}/dist/js/script.min.js"></script>

</body>
</html>
