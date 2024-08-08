@section('title', $blog->meta_title ?? '')
@section('description', $blog->meta_description ?? '')
@section('keywords', $blog->meta_keyword ?? '')
@section('canonical', route('blog.detail', $blog->slug))
@extends('frontend.layouts.app')
@section('content')
    <div class="inner_banner">
        <div class="inner_banner_image">
            <div class="container-fluid">
                <img src="{{ asset('asset/blogs') . '/' . $blog->cover_image }}" class="img-fluid"
                    alt="{{ $blog->cover_image }}"
                    onerror="this.src='{{ asset('frontend/default-images/default-image-1920x560.jpg') }}'" />
            </div>
        </div>
    </div>
    <div class="news_details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{ $blog->title }}
                </div>
                <div class="col-md-12">{!! $blog->content !!}</div>
            </div>
        </div>
    </div>
@endsection
