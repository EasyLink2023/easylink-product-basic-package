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
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="banner_content_text">
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
    <div class="order_online">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="order_online_title">
                        <h2>{{ _get_contact_us_page_data('SEC_2_FORM_TEXT') }}</h2>
                    </div>
                    <div class="order_online_form">
                        <div class="getquote_form_box">
                            <form class="row justify-content-center g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                    <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="Name"
                                        placeholder="Name" required>
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="Email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" id="Email"
                                        placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Please enter your email.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="Phone" class="form-label">Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone" id="Phone"
                                        placeholder="Phone" required>
                                    <div class="invalid-feedback">
                                        Please enter your phone no.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="Message" class="form-label">Message</label>
                                    <textarea class="form-control" id="Message" rows="2" placeholder="Your Message"></textarea>
                                </div>
                                <input type="text" id="Product-Category" value="NA" hidden>
                                <input type="text" id="Product-Model" value="NA" hidden>
                                <button id="fromSubmit" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
