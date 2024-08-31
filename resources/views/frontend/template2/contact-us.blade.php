@include('frontend.layouts.seo-tags')
@extends('frontend.layouts.app')
@section('content')
    <div class="inner_banner">
        <div class="inner_banner_image">
            <div class="container-fluid">
                <img src="{{ asset('asset/contact-us') . '/' . _get_contact_us_page_data('BANNER_IMAGE') }}"
                    alt="{{ _get_contact_us_page_data('BANNER_IMAGE') }}" class="img-fluid"
                    onerror="this.src='{{ asset('frontend/default-images/default-image-1920x560.jpg') }}'" />
            </div>
        </div>
        <div class="inner_banner_content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10">
                        <div class="banner_content_text pt-5">
                            <h1>{{ _get_contact_us_page_data('SEC_1_TEXT') }}</h1>
                            <p>
                                {{ _get_contact_us_page_data('SEC_1_DESCRIPTION') }}
                            </p>
                            <nav aria-label="breadcrumb" class="bred">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Contact Us
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-md-10">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('error-contact'))
                        <div class="alert alert-danger">
                            {{ Session::get('error-contact') }}
                        </div>
                    @endif
                    @if (Session::has('success-contact'))
                        <div class="alert alert-success">
                            {{ Session::get('success-contact') }}
                        </div>
                    @endif
                    <div class="bg-light p-5 rounded h-100">
                        <h2 style="color:{{ $background_color }} !important;" class="pb-4">{{ _get_contact_us_page_data('SEC_2_FORM_TEXT') }}</h2>
                        <form action="{{ route('add.contact.form') }}" method="POST" class="row g-4 needs-validation d-flex justify-content-center">
                            @csrf
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="name" id="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" name="email" id="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                    <div class="invalid-feedback">
                                        Please enter your email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="phone" id="phone" placeholder="Your Phone" required>
                                    <label for="phone">Your Phone</label>
                                    <div class="invalid-feedback">
                                        Please enter your phone number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" name="message" id="message" placeholder="Leave a message here" style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button id="fromSubmit" type="submit" class="btn btn-primary w-100 py-3" style="background:{{ $background_color }} !important;color:{{ $font_color }}">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection