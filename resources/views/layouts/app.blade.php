<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventory Elektromedis')</title>
    <link rel="shortcut icon" href="{{ asset('template/assets/compiled/svg/favicon.svg') }}" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="{{ asset('template/assets/static/images/logo/favicon.svg') }}" type="image/x-icon"> -->
    <link rel="stylesheet" href="{{ asset('template/assets/compiled/css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('template/scss/app.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('template/assets/compiled/css/app-dark.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('template/scss/themes/dark/app-dark.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('template/assets/compiled/css/iconly.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('template/scss/iconly.css') }}"> -->
</head>

<body>
    <script src="{{ asset('template/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            @include('partials.header')
            <div class="page-heading">
                <h3>@yield('page-title', 'Dashboard')</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>
            @include('partials.footer')
        </div>
    </div>
    @include('partials.scripts')
</body>

</html>
