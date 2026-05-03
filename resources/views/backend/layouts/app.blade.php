<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home | Automas Technologies</title>
    <meta name="description" content="n/a">
    <meta name="keywords" content="n/a">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="https://automas.com.bd/assets/img/automas-favicon.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/site-theme.css') }}" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 250px;
            --header-height: 72px;
            --shell-bg: #f4f7fb;
        }

        body.backend-body {
            background: var(--shell-bg);
            color: #1f2937;
        }

        .backend-shell {
            min-height: 100vh;
            background: var(--shell-bg);
        }

        .backend-main {
            min-height: 100vh;
            margin-left: var(--sidebar-width);
            display: flex;
            flex-direction: column;
        }

        .backend-content {
            flex: 1;
            padding: 24px;
        }

        .app-header {
            min-height: var(--header-height);
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .main-footer {
            background: #fff;
            border-top: 1px solid rgba(15, 23, 42, 0.08);
            padding: 14px 24px;
        }

        @media (max-width: 767.98px) {
            .backend-main {
                margin-left: 0;
            }

            .backend-content {
                padding: 16px;
            }
        }
    </style>

    <script src="{{ asset('public/external-js/jquery-min.js') }}"></script>
    @yield('styles')
</head>

<body class="backend-body">
    @if(auth()->check())
    <div class="backend-shell">
        @include('backend.partials.sidebar')

        <div class="backend-main">
            @include('backend.partials.header')

            <main id="main" class="backend-content">
                @yield('content')
            </main>

            @include('backend.partials.footer')
        </div>
    </div>
    @else
    <main class="backend-content">
        @yield('content')
    </main>
    @endif

    <script src="{{ asset('public/external-js/bootstrap-bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>