@extends('frontend.layouts.app')
@section('content')
<div class="banner" page-name="index" id="page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="banner_content">
                    <h1>EASY LINK CONSTRUCTION MACHINERY GROUP GLOBAL</h1>
                    <p class="translate">
                        XCMG is dedicated to its core value of “Taking Great
                        Responsibilities, Acting With Great Morals, and Making Great
                        Achievements” and its corporate spirit of being “Rigorous,
                        Practical, Progressive, and Creative” in order to keep moving
                        towards its ultimate
                    </p>
                    <a href="">Talk To Us</a>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
            </div>
        </div>
    </div>
</div>
<div class="banner_bottom_content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="banner_bottom_content_box">
                    <h2 class="texttyp"></h2>
                    <p>
                        XCMG is dedicated to its core value of “Taking Great
                        Responsibilities, Acting With Great Morals, and Making Great
                        Achievements” and its corporate spirit of being “Rigorous,
                        Practical, Progressive, and Creative” in order to keep moving
                        towards its ultimate
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="key_point">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="key_point_box">
                    <span data-max="1943"></span>
                    <p>XCMG was founded in 1943</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="key_point_box">
                    <span data-max="65"></span>
                    <p>Ranked 65th in the list of China's Top 500 Companies</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="key_point_box">
                    <span data-max="44"></span>
                    <p>44th in the list of China's Top 100</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="key_point_box">
                    <span data-max="2"></span>
                    <p>2nd in the list of China's Top 100 Machinery Manufacturers.</p>
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <button type="button" class="video-btn" data-bs-toggle="modal" data-src="https://www.xcmg.com/en-ap/upload/media/2020/11/02/16a525fb4a8c4752bfb593a197abc902.mp4" data-bs-target="#videoModal">
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
                            <button type="button" class="video-btn" data-bs-toggle="modal" data-src="https://www.xcmg.com/en-ap/upload/media/2020/11/02/16a525fb4a8c4752bfb593a197abc902.mp4" data-bs-target="#videoModal">
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
                            <button type="button" class="video-btn" data-bs-toggle="modal" data-src="https://www.xcmg.com/en-ap/upload/media/2020/11/02/16a525fb4a8c4752bfb593a197abc902.mp4" data-bs-target="#videoModal">
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