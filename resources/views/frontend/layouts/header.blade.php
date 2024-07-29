<div class="preloader-wrap">
    <div class="loader">
        <div class="trackbar">
            <div class="loadbar"></div>
        </div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div id="button"></div>
<header class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg" id="main_navbar">
            <a class="navbar-brand" href="{{ route('index')  }}">
                <img src="{{ asset('asset/setting') }}/{{ _get_setting_value('SITE_Logo') }}" class="img-fluid"
                    id="logo" alt="logo" />
            </a>
            <div class="menu-btn d-lg-none navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="menu-btn__burger"></div>
            </div>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}" id="t_house">Home</a>
                    </li>
                    @foreach (_get_all_menu() as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index', $item->url) }}"
                                id="t_house">{{ $item->menu_name }}</a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index','contact-us') }}" id="t_house">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="nav_contact">
                {{-- <div class="search">
                    <button type="button"><i class="fi fi-rr-search"></i></button>
                </div> --}}
                <div class="get_quote">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#getquote">Get
                        Quote</button>
                </div>
            </div>
            {{-- <div class="top_nav">
                <ul class="top_ul">
                    <li class="top_li">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fi fi-rr-globe"></i> Language
                            </button>
                            <ul class="dropdown-menu">
                                <li><button id="translateHindi" class="dropdown-item" type="button">
                                        Hindi Language</button></li>
                                <li><button id="translateTamil" class="dropdown-item" type="button">
                                        Tamil Language</button></li>
                                <li><button id="translateEnglish" class="dropdown-item" type="button">
                                        English Language</button></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div> --}}
        </nav>
    </div>
</header>
