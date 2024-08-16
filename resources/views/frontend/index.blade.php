@include('frontend.layouts.seo-tags')
@extends('frontend.layouts.app')
@section('content')
    @if (_get_index_page_value('SEC_1_VISIBLE') == '1')
        <div class="banner" page-name="index" id="page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="banner_content">
                            <h1 style="color:{{ $background_color }} !important;">{{ _get_index_page_value('SEC_1_TEXT') }}
                            </h1>
                            <p class="translate">
                                {{ _get_index_page_value('SEC_1_DESCRIPTION') }}
                            </p>
                            <a href="{{ _get_index_page_value('SEC_1_BUTTON_LINK') }}"
                                style="color:{{ $font_color }} !important;  background-color:{{ $background_color }}; !important">{{ _get_index_page_value('SEC_1_BUTTON_TEXT') }}</a>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="banner_slider">
                            <div class="slider_item" style="background:{{ $background_color }} !important;">
                                <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_1') }}"
                                    alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_1') }}"
                                    class="img-fluid"
                                    onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                            </div>
                            <div class="slider_item" style="background:{{ $background_color }} !important;">
                                <img src="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                    alt="{{ asset('asset/index-page') . '/' . _get_index_page_value('SEC_1_IMAGE_2') }}"
                                    class="img-fluid"
                                    onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                            </div>
                            <div class="slider_item" style="background:{{ $background_color }} !important;">
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
                            <h2 class="texttyp" style="color:{{ $background_color }} !important;"></h2>
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
        <div class="key_point" style="background:{{ $background_color }} !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_1') }}"
                                style="color:{{ $background_color }} !important;"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_1') }}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_2') }}"
                                style="color:{{ $background_color }} !important;"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_2') }}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_3') }}"
                                style="color:{{ $background_color }} !important;"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_3') }}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_point_box">
                            <span data-max="{{ _get_index_page_value('SEC_3_NUMBER_4') }}"
                                style="color:{{ $background_color }} !important;"></span>
                            <p>{{ _get_index_page_value('SEC_3_TEXT_4') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (_get_index_page_value('SEC_4_VISIBLE') == '1')
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news_title">
                            <h5 style="color:{{ $background_color }} !important;">Blogs</h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            @if (isset($blogs) && count($blogs) > 0)
                                @foreach ($blogs as $item)
                                    <div class="col-md-4 mb-4">
                                        <a href="{{ route('blog.detail', $item->slug) }}">
                                            <div class="news_items">
                                                <div class="news_item_image">
                                                    <img src="{{ asset('asset/blogs') . '/' . $item->cover_image }}"
                                                        class="img-fluid" alt="{{ $item->cover_image }}"
                                                        onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                                                </div>
                                                <div class="news_item_content"
                                                    style="background:{{ $background_color }} !important;">
                                                    <span
                                                        style="color:{{ $font_color }} !important">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y, h:i A') }}</span>
                                                    <h4 style="color:{{ $font_color }} !important">
                                                        {{ Str::limit($item->title, 10, '...') }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (_get_index_page_value('SERVICE_VISIBLE') == '1')
        <div class="solutions" style="background:{{ $background_color }} !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="solutions_title">
                            <h4 style="color:{{ $font_color }} !important">{{ _get_index_page_value('SERVICE_TEXT') }}
                            </h4>
                            <p style="color:{{ $font_color }} !important">
                                {{ _get_index_page_value('SERVICE_DESCRIPTION') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="solutions_items">
                            @if (isset($services) && count($services) > 0)
                                @foreach ($services as $item)
                                    <div class="solutions_item">
                                        <a href="javascript:void(0)">
                                            <div class="solutions_item_box">
                                                <div class="solutions_item_image">
                                                    <img src="{{ asset('asset/service') . '/' . $item->cover_image }}"
                                                        alt="{{ $item->cover_image }}" class="img-fluid"
                                                        onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                                                </div>
                                                <div class="solutions_item_content">
                                                    <span><strong>{{ $item->name }}</strong></span>
                                                    <span>{{ $item->description }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (_get_index_page_value('GALLERY_VISIBLE') == '1')
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news_title">
                            <h4>{{ _get_index_page_value('SERVICE_TEXT') }}</h4>
                            <P>{{ _get_index_page_value('GALLERY_DESCRIPTION') }}</P>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            @if (isset($galleries) && count($galleries) > 0)
                                @foreach ($galleries as $item)
                                    <div class="col-md-4 mb-4">
                                        <div class="news_items">
                                            <div class="news_item_image">
                                                <img src="{{ asset('asset/gallery') . '/' . $item->image_url }}"
                                                    alt="{{ $item->image_url }}" class="img-fluid"
                                                    onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'" />
                                            </div>
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
        <div class="testimonial" style="background:{{ $background_color }} !important;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="testimonial_title">
                            <h6>TESTIMONIALS</h6>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="testimonial_slider_box">
                            @isset($testimonials)
                                @foreach ($testimonials as $item)
                                    <div class="testimonial_slider_item">
                                        <div class="testimonial_slider_item_image_box">
                                            <div class="testimonial_slider_item_image">
                                                <img src="{{ asset('asset/testimonial') . '/' . $item->profile_image }}"
                                                    alt="{{ $item->profile_image }}" class="img-fluid"
                                                    onerror="this.src='{{ asset('frontend/default-images/default-image-140x140.png') }}'" />
                                            </div>
                                            {{-- <button type="button" class="video-btn" data-bs-toggle="modal"
                                                data-src="https://www.xcmg.com/en-ap/upload/media/2020/11/02/16a525fb4a8c4752bfb593a197abc902.mp4"
                                                data-bs-target="#videoModal">
                                                <i class="fi fi-rr-play"></i>
                                            </button> --}}
                                        </div>
                                        <div class="testimonial_slider_item_content">
                                            <span style="color:{{ $font_color }} !important">{{ $item->name }},
                                                {{ $item->designation }}</span>
                                            <ul class="stars" style="color:{{ $background_color }} !important;">
                                                @for ($i = 0; $i < $item->rating; $i++)
                                                    <li><i class="fi fi-sr-star"></i></li>
                                                @endfor
                                            </ul>
                                            <p style="color:{{ $font_color }} !important;">
                                                {{ $item->feedback }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
