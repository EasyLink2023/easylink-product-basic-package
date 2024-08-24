@include('frontend.layouts.seo-tags')
@extends('frontend.layouts.app')
@section('content')
    <div class="inner_banner">
        <div class="inner_banner_image">
            <div class="container-fluid">
                <img src="{{ asset('asset/setting') . '/' . _get_setting_value('BLOG_PAGE_SECTION_1_BACKGROUND_IMAGE') }}"
                    alt="{{ _get_setting_value('BLOG_PAGE_SECTION_1_BACKGROUND_IMAGE') }}" class="img-fluid"
                    onerror="this.src='{{ asset('frontend/default-images/default-image-1920x560.jpg') }}'" />
            </div>
        </div>
        <div class="inner_banner_content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="banner_content_text">
                            <h1>{{ _get_setting_value('BLOG_SEC_1_TEXT') }}</h1>
                            <p>
                                {{ _get_setting_value('BLOG_SEC_1_DESCRIPTION') }}
                            </p>
                            <nav aria-label="breadcrumb" class="bred">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Blogs
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="row">
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
                    @if ($blogs->hasPages())
                        <div class="pagination-wrapper d-flex justify-content-center mt-5">
                            {{ $blogs->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
