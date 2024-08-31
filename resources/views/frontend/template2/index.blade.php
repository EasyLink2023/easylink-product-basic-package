@include('frontend.layouts.seo-tags')
@extends('frontend.layouts.app')
@section('content')
    @if (_get_index_page_value('SEC_1_VISIBLE') == '1')
        <div class="banner_section" page-name="index" id="page">
            <div class="">
                <div id="main_slider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_1') }}"
                                class="d-block w-100"
                                alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_1') }}"
                                onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                class="d-block w-100"
                                alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_3') }}"
                                class="d-block w-100"
                                alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_3') }}"
                                onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="banner_taital">{{ _get_index_page_value('SEC_1_TEXT') }}</h1>
                        <p class="banner_text">{{ _get_index_page_value('SEC_1_DESCRIPTION') }}</p>
                        <div class="read_bt">
                            <a href="{{ _get_index_page_value('SEC_1_BUTTON_LINK') }}"
                                style="color:{{ $font_color }} !important; background-color:{{ $background_color }} !important;">
                                {{ _get_index_page_value('SEC_1_BUTTON_TEXT') }}
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="color:{{ $font_color }} !important; background-color:{{ $background_color }} !important;"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="color:{{ $font_color }} !important; background-color:{{ $background_color }} !important;"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    @endif

    @if (_get_index_page_value('SEC_2_VISIBLE') == '1')
        <div class="" style="margin-top: 6rem;">
            <div class="container pb-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 ">
                        <div >
                            <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                class="img img-fluid"
                                alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class=" mb-4" style="color:{{ $background_color }} !important;">
                            {{ _get_index_page_value('SEC_2_TEXT') }}
                        </h1>
                        <p class="mb-4" >
                            {{ _get_index_page_value('SEC_2_DESCRIPTION') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    


    @if (_get_index_page_value('SEC_3_VISIBLE') == '1')
        <style>
            .feature .feature-item {
                border: 1px solid {{ $background_color }};
                transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
            }

            .feature .feature-item:hover {
                background: {{ $background_color }};
                border-color: {{ $background_color }};
            }

            .feature .feature-item:hover p, 
            .feature .feature-item:hover span {
                color: {{ $font_color }} !important;
                transition: color 0.3s ease;
            }
        </style>
        <div class="feature pb-5" >
            <div class="container pb-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="feature-item p-4">
                            <span class=" p-4 mb-4" data-max="{{ _get_index_page_value('SEC_3_NUMBER_1') }}" 
                                style="font-size: 50px; font-weight: 600; color: {{  $background_color }} ;">
                                {{ _get_index_page_value('SEC_3_NUMBER_1') }}
                            </span>
                            <p class="my-5" >
                                {{ _get_index_page_value('SEC_3_TEXT_1') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="feature-item p-4">
                            <span class=" p-4 mb-4" data-max="{{ _get_index_page_value('SEC_3_NUMBER_2') }}" 
                                style="font-size: 50px; font-weight: 600; color: {{  $background_color }} ;">
                                {{ _get_index_page_value('SEC_3_NUMBER_2') }}
                            </span>
                            <p class="my-5" >
                                {{ _get_index_page_value('SEC_3_TEXT_2') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="feature-item p-4">
                            <span class=" p-4 mb-4" data-max="{{ _get_index_page_value('SEC_3_NUMBER_3') }}" 
                                style="font-size: 50px; font-weight: 600; color: {{  $background_color }} ;">
                                {{ _get_index_page_value('SEC_3_NUMBER_3') }}
                            </span>
                            <p class="my-5" >
                                {{ _get_index_page_value('SEC_3_TEXT_3') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="feature-item p-4">
                            <span class=" p-4 mb-4" data-max="{{ _get_index_page_value('SEC_3_NUMBER_4') }}" 
                                style="font-size: 50px; font-weight: 600; color: {{  $background_color }} ;">
                                {{ _get_index_page_value('SEC_3_NUMBER_4') }}
                            </span>
                            <p class="my-5" >
                                {{ _get_index_page_value('SEC_3_TEXT_4') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    
    @if (_get_index_page_value('SEC_4_VISIBLE') == '1')
        <div class="blog pb-5">
            <div class="container">
                <div class="news_hd">
                    <h4 style="color:{{ $background_color }} !important;"> Blogs</h4>
                </div>
                <div class="row g-4 justify-content-center">
                    @if (isset($blogs) && count($blogs) > 0)
                        @foreach ($blogs as $item)
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <a href="{{ route('blog.detail', $item->slug) }}">
                                    <div class="blog-item rounded p-4" style="background-color:{{  $background_color }};">
                                        <div class="project-img">
                                            <img src="{{ asset('asset/blogs') . '/' . $item->cover_image }}"
                                                class="img-fluid w-100 rounded" alt="{{ $item->cover_image }}"
                                                onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                                            <div class="blog-plus-icon">
                                                <a href="{{ asset('asset/blogs') . '/' . $item->cover_image }}" data-lightbox="blog-{{ $loop->index }}" class="btn rounded-pill"  style="background: {{  $background_color }} ;line: height 14px;">
                                                    <i class="fi-rr-plus" style="vertical-align:middle;color:#fff"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="news_item_content mt-3" style="background:{{ $background_color }} !important;">
                                            <span style="color:{{ $font_color }} !important">
                                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y, h:i A') }}
                                            </span>
                                            <h4 style="color:{{ $font_color }} !important">
                                                {{ Str::limit($item->title, 10, '...') }}
                                            </h4>
                                            <p style="color:{{ $font_color }} !important">
                                                {{ Str::limit($item->description, 50, '...') }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endif

    @if (_get_index_page_value('SERVICE_VISIBLE') == '1')
        <style>
            .slick-prev:before, .slick-next:before{
                color:{{  $background_color  }} ;
            }
        </style>
        <div class="training py-5" >
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h1 class="display-5 mb-4" style="color: {{  $background_color  }} !important;">
                        {{ _get_index_page_value('SERVICE_TEXT') }}
                    </h1>
                    <p class="mb-0" >
                        {{ _get_index_page_value('SERVICE_DESCRIPTION') }}
                    </p>
                </div>
                <div class="training_items">
                    @if (isset($services) && count($services) > 0)
                        @foreach ($services as $item)
                            <div class="training-item">
                                <div class="training-inner">
                                    <img src="{{ asset('asset/service') . '/' . $item->cover_image }}"
                                        alt="{{ $item->cover_image }}" class="img-fluid w-100 rounded"  loading="lazy"
                                        onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                                    <div class="training-title-name">
                                        <a class="h4 text-white mb-0">{{ $item->name }}</a>
                                    </div>
                                </div>
                                <div class="training-content bg-secondary rounded-bottom p-4">
                                    <p class="text-white-50">{{ $item->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endif

    @if (_get_index_page_value('GALLERY_VISIBLE') == '1')
        <style>
            .service .service-item::after {
                background: {{$background_color }};
            }
            
        </style>
        <div class="service py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news_title">
                            <h4 style="color: {{  $background_color  }} !important;">{{ _get_index_page_value('SERVICE_TEXT') }}</h4>
                            <P>{{ _get_index_page_value('GALLERY_DESCRIPTION') }}</P>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row g-4">
                            @if (isset($galleries) && count($galleries) > 0)
                                @foreach ($galleries as $item)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="service-item p-4">
                                            <img src="{{ asset('asset/gallery') . '/' . $item->image_url }}"
                                                alt="{{ $item->image_url }}" class="img-fluid"
                                                onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                                            
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    


    @if (_get_index_page_value('TESTIMONIAL_VISIBLE') == '1')
        <style>
            .client_img::after {
                border: 2px solid {{ $background_color }};
            }
            #testimonial_carousel .carousel-control-prev,
            #testimonial_carousel .carousel-control-next {
                background: {{ $background_color }};
            }
        </style>
        <div class="testimonial_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial_title mb-2">
                            <h6>Testimonials</h6>
                        </div>
                    </div>
                </div>
                <div id="testimonial_carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @isset($testimonials)
                            @foreach ($testimonials as $key => $item)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} testimonial-carousel-item">
                                    <div class="testimonial_wrap">
                                        <div class="testimonial_left">
                                            <div class="client_img">
                                                <img src="{{ asset('asset/testimonial/' . $item->profile_image) }}"
                                                    alt="{{ $item->profile_image }}" class="img-fluid"
                                                    onerror="this.src='{{ asset('frontend/default-images/default-image-140x140.png') }}'" />
                                            </div>
                                        </div>
                                        <div class="testimonial_right">
                                        <span >{{ $item->name }},
                                                    {{ $item->designation }}</span>
                                                <ul class="stars" style="color:{{ $background_color }} !important;">
                                                    @for ($i = 0; $i < $item->rating; $i++)
                                                        <li><i class="fi fi-sr-star"></i></li>
                                                    @endfor
                                                </ul>
                                                <p >
                                                    {{ $item->feedback }}
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                    <a class="carousel-control-prev" href="#testimonial_carousel" role="button" data-bs-slide="prev">
                        <i class="fi-rr-angle-small-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#testimonial_carousel" role="button" data-bs-slide="next">
                        <i class="fi-rr-angle-small-right"></i>
                    </a>
                </div>
            </div>
        </div>
    @endif


    @if (_get_index_page_value('FAQ_VISIBLE') == '1')
        <style>
            .accordion-button:not(.collapsed) {
                color: {{$background_color}};
            }
            .accordion-button:not(.collapsed):before {
                background-color: {{$background_color}};
            }
            .accordion-button:focus {
                border: 3px solid  {{$background_color}} !important;
            }
        </style>
        <div class="FAQ bg-light py-5 mb-4">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12">
                        <div class="faq_title text-center mb-3">
                            <h6 style="color:{{ $background_color }} !important;">{{ _get_index_page_value('FAQ_TEXT') }}
                            </h6>
                            <P style="font-size:30px">{{ _get_index_page_value('FAQ_DESCRIPTION') }}</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            @if (isset($faqs) && count($faqs) > 0)
                                @foreach ($faqs as $key => $item)
                                    <div class="accordion-item border-0 mb-4">
                                        <h2 class="accordion-header" id="heading{{ $key }}">
                                            <button class="accordion-button {{ $key == 0 ? 'rounded-top' : 'collapsed rounded-top' }}" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $key }}"
                                                aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $key }}">
                                                {{ $item->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $key }}"
                                            class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                            aria-labelledby="heading{{ $key }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body my-2">
                                                <p>{{ $item->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="FAQ-img rounded">
                            <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                class="img img-fluid"
                                alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection