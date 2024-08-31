<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="{{ _get_setting_value('SITE_NAME') }}">
    <link rel="canonical" href="@yield('canonical', url(''), '')">
    <title>@yield('title', _get_setting_value('SITE_NAME'), '')</title>
    <meta name="description" content="@yield('description', _get_setting_value('SITE_NAME'), '')">
    <meta name="keywords" content="@yield('keywords', _get_setting_value('SITE_NAME'), '')">
    <link rel="shortcut icon" href="{{ asset('asset/setting') }}/{{ _get_setting_value('SITE_LOGO') }}"
        type="image/x-icon">
    <link rel="icon" href="{{ asset('asset/setting') }}/{{ _get_setting_value('FAVICON') }}" type="image/gif">
    
    @if (_get_default_template() == 2)
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        
        <!-- Minimize FontAwesome and Lightbox CSS load -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/92+9c6Q7ksy7r2l/smg+H7K4+gj8mFzqfTzA2A" crossorigin="anonymous" /> -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/+q33W4wDG0mkt0Lyb7zD4+5pvephUvhzqs/jgKpt8Gh4lZG/GPy6h9wN" crossorigin="anonymous" /> -->
        <link rel="stylesheet" href="{{ asset('frontend/plugins/lightbox/css/lightbox.min.css') }}" />

    @else
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;800&display=swap"
         rel="stylesheet" />
    @endif
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/select_bootstrap/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/font/uicons-regular-rounded/css/uicons-regular-rounded.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/font/uicons-solid-rounded/css/uicons-solid-rounded.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/font/uicons-brands/css/uicons-brands.css') }}" />
    @if (_get_default_template() == 2)
        <link rel="stylesheet" href="{{ asset('frontend/css/template2/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/template2/responsive.css') }}" />
    @else
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    @endif
</head>

<body>
    @if (_get_default_template() == 2)
        @include('frontend.layouts.template2.header')
        @yield('content')
        @include('frontend.layouts.template2.footer')
    @else
        @include('frontend.layouts.header')
        @yield('content')
        @include('frontend.layouts.footer')
    @endif
    <script src="{{ asset('frontend/plugins/jquery/js/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/moment/js/moment.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/select_bootstrap/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/typed/js/typed.min.js') }}"></script>
    @if (_get_default_template() == 2)
        <script src="{{ asset('frontend/plugins/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('frontend/js/template2/main.js') }}" ></script>
    @else
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (Session::has('modal'))
                var myModal = new bootstrap.Modal(document.getElementById('getquote'), {
                    backdrop: 'static',
                    keyboard: false
                });
                myModal.show();
            @endif
        });
    </script>
</body>

</html>
