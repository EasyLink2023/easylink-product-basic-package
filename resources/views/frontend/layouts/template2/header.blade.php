<!-- Spinner Start -->
<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="background:{{ $background_color }} !important">
    <div class="spinner-border text-white" style="width: 3rem; height: 3rem;" role="status">
       
    </div>
</div>
<!-- Spinner End -->
<div id="button" style="background: {{$background_color}};color:{{$font_color}}"></div>
<header class="navigation sticky-top px-0">
    <!-- <div class="position-absolute" style="left: 0; top: 0; width: 100%; height: 100%;"></div> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-lg-5" id="main_navbar">
        <a class="navbar-brand p-0" href="{{ route('index') }}">
            <img src="{{ asset('asset/setting') }}/{{ _get_setting_value('SITE_LOGO') }}" alt="Logo" class="img-fluid" id="logo" onerror="this.src='{{ asset('frontend/default-images/logo.png.webp') }}'"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto py-0 nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                </li>
                @foreach (_get_all_menu() as $item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index', $item->url) }}">{{ $item->menu_name }}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index','blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index','contact-us') }}">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                <button type="button" class="btn rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0" data-bs-toggle="modal" data-bs-target="#getquote" style="background:{{ $background_color }} !important;color:{{ $font_color }}">Get Quote</button>
            </div>
        </div>
    </nav>
</header>
