<!-- Spinner Start -->
<!-- <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="background:{{ $background_color }} !important">
    <div class="spinner-border text-white" style="width: 3rem; height: 3rem;" role="status"> 
    </div>
</div>  -->
<!-- Spinner End -->
<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="background:{{ $background_color }} !important">
    <div class="loader h-100 d-flex align-items-center justify-content-center">
        <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div> 


<div id="button" style="background: {{$background_color}};color:{{$font_color}}"></div>
 <!-- Topbar Start -->
 <div class="container-fluid topbar px-0 d-none d-lg-block" style="background: {{$background_color}};color:{{$font_color}}">
    <div class="container px-0">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap addr-bar">
                    <p>
                        <span>
                            <i class="fi fi-rr-location-alt"></i>
                        </span>
                        {{ _get_setting_value('ADDRESS') }}
                    </p>
                    <p>

                    </p>
                    <p>
                        <span>
                            <i class="fi fi-rr-phone-call"></i>
                        </span>
                        <a
                            href="tel:{{ _get_setting_value('PHONE_NUMBER') }}">{{ _get_setting_value('PHONE_NUMBER') }}</a>
                    </p>
                    <p>
                        <span>
                            <i class="fi fi-rr-envelope"></i>
                        </span>
                        <a
                            href="mailto:{{ _get_setting_value('EMAIL_ADDRESS') }}">{{ _get_setting_value('EMAIL_ADDRESS') }}</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="top-nav">
                    <ul class="d-flex align-items-center justify-content-end">
                        <li>
                            <a href="{{ _get_setting_value('X_LINK') }}" target="_blank">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ _get_setting_value('FACEBOOK_LINK') }}" target="_blank">
                                <span>
                                    <i class="fi fi-brands-facebook"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ _get_setting_value('INSTAGRAM_LINK') }}" target="_blank">
                                <span>
                                    <i class="fi fi-brands-instagram"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ _get_setting_value('LINKEDIN_LINK') }}" target="_blank">
                                <span>
                                    <i class="fi fi-brands-linkedin"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ _get_setting_value('YOUTUBE_LINK') }}" target="_blank">
                                <span>
                                    <i class="fi fi-brands-youtube"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<header class="sticky-top navigation px-0" style="position:sticky; top: 0">
    <div class="container px-0">
        <nav class="navbar navbar-expand-md navbar-dark bg-white py-3 px-4" id="main_navbar">
            <a class="navbar-brand p-0" href="{{ route('index') }}">
                <img src="{{ asset('asset/setting') }}/{{ _get_setting_value('SITE_LOGO') }}" alt="Logo" class="img-fluid" id="logo" onerror="this.src='{{ asset('frontend/default-images/logo.png.webp') }}'"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="background: {{$background_color}} ; color:{{$font_color}}">
                <span class="fi-rr-menu-burger"></span>
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
            </div>
        </nav>
    </div>
</header>
