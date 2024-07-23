<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ _get_setting_value('SITE_NAME') }}</title>
    <link rel="icon" href="{{ asset('asset/setting') }}/{{ _get_setting_value('FAVICON') }}" type="image/gif">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/select_bootstrap/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/font/uicons-regular-rounded/css/uicons-regular-rounded.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/font/uicons-solid-rounded/css/uicons-solid-rounded.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/font/uicons-brands/css/uicons-brands.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    <script src="{{ asset('frontend/plugins/jquery/js/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/moment/js/moment.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/select_bootstrap/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/typed/js/typed.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
