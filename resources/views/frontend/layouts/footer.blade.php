<!-- Modal -->
<div class="modal fade" id="getquote" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="getquoteLabel" aria-hidden="true">
    <div class="modal-dialog">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getquoteLabel">Get Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="getquote_form_box">
                    <form action="{{ route('add.quote') }}" method="POST" class="needs-validation2"
                        id="getQuoateForm">
                        @csrf
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="Name2" placeholder="Name"
                                required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="Email2" placeholder="Email"
                            required>
                            <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="phone" id="Phone2" placeholder="Phone"
                            required>
                            <div class="invalid-feedback">
                                Please enter your phone no.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="Message2" rows="2" placeholder="Your Message"></textarea>
                        </div>
                        <button id="fromSubmit2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class=" container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-3 mb-xl-0">
                <div class="footer_address">
                    <div class="footer_address_content">
                        <div class="footer_address_logo">
                            <a href="">
                                <img src="{{ asset('asset/setting') }}/{{ _get_setting_value('SITE_LOGO') }}"
                                    alt="logo" class="img-fluid" />
                            </a>
                        </div>
                        <div class="footer_address">
                            <div class="footer_address_content">
                                <div class="footer_address_content_box">
                                    <ul class="footer_address_content_box_phone translate">
                                        <li>
                                            <span>
                                                <i class="fi fi-rr-location-alt"></i>
                                            </span>
                                            {{ _get_setting_value('ADDRESS') }}
                                        </li>

                                        <li>
                                            <span>
                                                <i class="fi fi-rr-phone-call"></i>
                                            </span>
                                            <a
                                                href="tel:{{ _get_setting_value('PHONE_NUMBER') }}">{{ _get_setting_value('PHONE_NUMBER') }}</a>
                                        </li>

                                    </ul>
                                    <ul class="footer_address_content_box_email translate">
                                        <li>
                                            <span>
                                                <i class="fi fi-rr-envelope"></i>
                                            </span>
                                            <a
                                                href="mailto:{{ _get_setting_value('EMAIL_ADDRESS') }}">{{ _get_setting_value('EMAIL_ADDRESS') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li>
                                    <a href="{{ _get_setting_value('X_LINK') }}" target="_blank">
                                        <span>
                                            <img src="{{ asset('frontend/image/twitter-alt-circle.svg') }}"
                                                alt="logo twitter" class="img-fluid" />
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
            <div class="col-lg-4 col-md-6 mb-4 mb-md-3 mb-lg-0">
                <div class="footer_links">
                    <div class="footer_links_content">
                        <span class="translate" style="color:red !important">Company</span>
                        <ul class="menu">
                            <li>
                                <a href="{{ route('index', 'blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('index', 'contact-us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-3 mb-lg-0">
                <div class="footer_links">
                    <div class="footer_links_content">
                        <span class="translate" style="color:red !important">Quick Links</span>
                        <ul class="menu">
                            @foreach (_get_all_menu() as $item)
                                <li>
                                    <a href="{{ route('index', $item->url) }}">{{ $item->menu_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer_copyright">
                    <div class="footer_copyright_content translate">
                        <p>
                            Copyright © <?php echo date('Y'); ?>. {{ _get_setting_value('FOOTER_TEXT') }}
                            <a href="https://easylinkindia.com/" target="_blank">
                                Easy Link
                            </a>
                        </p>
                    </div>
                    {{-- <div class="footer_copyright_link translate">
                        <ul>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="">Site Map</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
