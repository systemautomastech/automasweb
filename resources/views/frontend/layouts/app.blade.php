<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home | Automas Technologies</title>
    <meta name="description" content="n/a">
    <meta name="keywords" content="n/a">

    <!-- Favicons -->
    <link href="https://automas.com.bd/assets/img/automas-favicon.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/external-css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/external-css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/external-css/glightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('public/external-css/swiper-bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('public/external-css/aos.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('public/main-css/landing.css') }}" rel="stylesheet">
    <link href="{{ asset('public/main-css/landingStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/site-theme.css') }}" rel="stylesheet">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- custom styles -->
</head>

<body class="index-page">


    <div id="loading-overlay">
        <div class="spinner"></div>
    </div>
    @include('frontend.partials.header')

    <main id="main" class="main" style="display:none;">
        @yield('content')
    </main>
    @include('frontend.partials.floating')

    @include('frontend.partials.footer')
    <script src="{{ asset('public/external-js/bootstrap-bundle.min.js') }}"></script>
    <script src="{{ asset('public/external-js/emailform-validate.js') }}"></script>
    <script src="{{ asset('public/external-js/glightbox.js') }}"></script>
    <script src="{{ asset('public/external-js/purecounter-vanilla.js') }}"></script>
    <script src="{{ asset('public/external-js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/external-js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/external-js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('public/external-js/aos.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('public/main-js/landing.js') }}"></script>
    <script src="{{ asset('public/main-js/landingScript.js') }}"></script>
</body>

</html>