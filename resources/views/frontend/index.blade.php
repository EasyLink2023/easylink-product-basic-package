@extends('frontend.layouts.app')
@section('content')
    @if (_get_index_page_value('SEC_1_VISIBLE') == '1')
        <div class="banner" page-name="index" id="page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="banner_content">
                            <h1>{{ _get_index_page_value('SEC_1_TEXT') }}</h1>
                            <p class="translate">
                                {{ _get_index_page_value('SEC_1_DESCRIPTION') }}
                            </p>
                            <a
                                href="{{ _get_index_page_value('SEC_1_BUTTON_LINK') }}">{{ _get_index_page_value('SEC_1_BUTTON_TEXT') }}</a>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="banner_slider">
                            <div class="slider_item">
                                <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_1') }}"
                                    alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_1') }}"
                                    class="img-fluid"
                                    onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                            </div>
                            <div class="slider_item">
                                <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                    alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                    class="img-fluid"
                                    onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                            </div>
                            <div class="slider_item">
                                <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_3') }}"
                                    alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_3') }}"
                                    class="img-fluid"
                                    onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (_get_index_page_value('SEC_2_VISIBLE') == '1')
        <div class="banner_bottom_content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="banner_bottom_content_box">
                            <input type="hidden" value="{{ _get_index_page_value('SEC_2_TEXT') }}" id="sec_two_text">
                            <h2 class="texttyp"></h2>
                            <p>
                                {{ _get_index_page_value('SEC_2_DESCRIPTION') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (_get_index_page_value('SEC_3_VISIBLE') == '1')
        <div class="key_point">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_1') }}"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_1') }}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_2') }}"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_2') }}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_3') }}"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_3') }}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_4') }}"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_4') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="products_title">
                        <h3>Products</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solutions">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="solutions_title">
                        <h4>XCMG Solutions</h4>
                        <p>
                            Complete set of solutions Global trusted engineering equipment
                            solution service provider!
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news_title">
                        <h5>News & Events</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="testimonial_title">
                        <h6>TESTIMONIALS</h6>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="testimonial_slider_box">
                        <div class="testimonial_slider_item">
                            <div class="testimonial_slider_item_image_box">
                                <div class="testimonial_slider_item_image">
                                    <img src="{{ asset('frontend/image/c1.jpg') }}" class="img-fluid" alt="" />
                                </div>
                                <button type="button" class="video-btn" data-bs-toggle="modal"
                                    data-src="https://www.xcmg.com/en-ap/upload/media/2020/11/02/16a525fb4a8c4752bfb593a197abc902.mp4"
                                    data-bs-target="#videoModal">
                                    <i class="fi fi-rr-play"></i>
                                </button>
                            </div>
                            <div class="testimonial_slider_item_content">
                                <span>David,operator of USA's NEFF</span>
                                <ul class="stars">
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                </ul>
                                <p>
                                    I've been using XCMG equipment for years and I'm
                                    reallyimpressed by their reliability and ability to handle
                                    anything you can throw at them， especially their
                                    excavators; they're great machines.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial_slider_item">
                            <div class="testimonial_slider_item_image_box">
                                <div class="testimonial_slider_item_image">
                                    <img src="{{ asset('frontend/image/c2.jpg') }}" class="img-fluid" alt="" />
                                </div>
                                <button type="button" class="video-btn" data-bs-toggle="modal"
                                    data-src="https://www.xcmg.com/en-ap/upload/media/2020/11/02/16a525fb4a8c4752bfb593a197abc902.mp4"
                                    data-bs-target="#videoModal">
                                    <i class="fi fi-rr-play"></i>
                                </button>
                            </div>
                            <div class="testimonial_slider_item_content">
                                <span>Olga Nosal,operator at Poland's STEB</span>
                                <ul class="stars">
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                </ul>
                                <p>
                                    XCMG provides timely and reliable services and its equipment
                                    is of high stability. As an operator, I enjoy operating XCMG
                                    machinery.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial_slider_item">
                            <div class="testimonial_slider_item_image_box">
                                <div class="testimonial_slider_item_image">
                                    <img src="{{ asset('frontend/image/c3.jpg') }}" class="img-fluid" alt="" />
                                </div>
                                <button type="button" class="video-btn" data-bs-toggle="modal"
                                    data-src="https://www.xcmg.com/en-ap/upload/media/2020/11/02/16a525fb4a8c4752bfb593a197abc902.mp4"
                                    data-bs-target="#videoModal">
                                    <i class="fi fi-rr-play"></i>
                                </button>
                            </div>
                            <div class="testimonial_slider_item_content">
                                <span>Nada, Russian dealer</span>
                                <ul class="stars">
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                    <li><i class="fi fi-sr-star"></i></li>
                                </ul>
                                <p>
                                    It's always a pleasure to work with XCMG as they provide
                                    outstanding service， timely delivery and reliable products.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
