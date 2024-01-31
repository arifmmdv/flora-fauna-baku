@php
    if (!empty($page->seo_title)) {
        $title = $page->seo_title;
    } else {
        $title = env('APP_NAME').' - '.$page->title;
    }
    if (!empty($page->seo_description)) {
        $description = $page->seo_description;
    } else {
        $description = 'Falcon International is incorporated in Sharjah Airport International Free Zone, Sharjah, U.AE in 2006 year.';
    }
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITLE OF SITE -->
    <meta name="keywords" content="" />
    <meta name="author" content="{{ env('APP_NAME') }}" />
    <meta name="robots" content="" />
    <meta name="description" content="{{$description}}" />
    <title>{{ $title}}</title>

    <!-- Og Tags -->
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ env('APP_URL') }}/og.jpg" />
    <meta property="og:image:secure_url" content="{{ env('APP_URL') }}/og.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="{{ env('APP_NAME') }}" />
    <meta property="og:description" content="{{$description}}" />

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="Shortcut Icon" type="image/png" href="favicon.ico" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font.awesome.min.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

@include('components.header')
@yield('content')
@include('components.footer')

<!-- Scroll to Top Start -->
<a class="scroll-to-top" href="#">
    <i class="lnr lnr-arrow-up"></i>
</a>
<!-- Scroll to Top End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- jQuery Migrate JS -->
<script src="/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Modernizer JS -->
<script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Swiper Slider JS -->
<script src="/assets/js/plugins/swiper-bundle.min.js"></script>
<!-- nice select JS -->
<script src="/assets/js/plugins/nice-select.min.js"></script>
<!-- Ajaxchimpt js -->
<script src="/assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<!-- Jquery Ui js -->
<script src="/assets/js/plugins/jquery-ui.min.js"></script>
<!-- Jquery Countdown js -->
<script src="/assets/js/plugins/jquery.countdown.min.js"></script>
<!-- jquery magnific popup js -->
<script src="/assets/js/plugins/jquery.magnific-popup.min.js"></script>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>

</body>
</html>
