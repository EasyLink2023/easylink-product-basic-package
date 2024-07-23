<!-- Modal -->
<div class="modal fade" id="getquote" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="getquoteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getquoteLabel">Get Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="getquote_form_box">
                    <form class="needs-validation2" novalidate>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="Name2" placeholder="Name" required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="Email2" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="phone" id="Phone2" placeholder="Phone" required>
                            <div class="invalid-feedback">
                                Please enter your phone no.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Product-Category" class="form-label">Product Category <span class="text-danger">*</span></label>
                            <select class="form-select" name="product_category" id="Product-Category2" required>
                                <option hidden value="">Product-Category</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select Product Category.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Product-Model" class="form-label">Product Model <span class="text-danger">*</span></label>
                            <select class="form-select" name="product_modal" id="Product-Model2" required>
                                <option hidden value="">Select Product Category</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select Product Model.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Message" class="form-label">Message</label>
                            <textarea class="form-control" id="Message2" rows="2" placeholder="Your Message"></textarea>
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
            <div class="col-lg-3 col-md-6 mb-4 mb-md-3 mb-xl-0">
                <div class="footer_address">
                    <div class="footer_address_content">
                        <div class="footer_address_logo">
                            <a href="">
                                <img src="{{ asset('asset/setting') }}/{{ _get_setting_value('SITE_Logo') }}" alt="logo" class="img-fluid" />
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
                                             Address Here
                                        </li>

                                        <li>
                                            <span>
                                                <i class="fi fi-rr-phone-call"></i>
                                            </span>
                                            <a href="tel">+985632145</a>
                                        </li>

                                    </ul>
                                    <ul class="footer_address_content_box_email translate">
                                        <li>
                                            <span>
                                                <i class="fi fi-rr-envelope"></i>
                                            </span>
                                            <a href="">Email</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li>
                                    <a href="" target="_blank">
                                        <span>
                                            <img src="{{ asset('frontend/image/twitter-alt-circle.svg') }}" alt="logo twitter" class="img-fluid" />
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <span>
                                            <i class="fi fi-brands-facebook"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <span>
                                            <i class="fi fi-brands-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <span>
                                            <i class="fi fi-brands-linkedin"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
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
            <div class="col-lg-3 col-md-6 mb-4 mb-md-3 mb-lg-0">
                <div class="footer_links">
                    <div class="footer_links_content">
                        <span class="translate">Products</span>
                        <ul class="menu">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_links">
                    <div class="footer_links_content">
                        <span class="translate">Services</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_links">
                    <div class="footer_links_content">
                        <span class="translate">About Us</span>
                     
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer_copyright">
                    <div class="footer_copyright_content translate">
                        <p>
                            Copyright © <?php echo date("Y"); ?>. All Rights Reserved XCMG India | Design and
                            Developed by
                            <a href="https://easylinkindia.com/" target="_blank">
                                Easy Link
                            </a>
                        </p>
                    </div>
                    <div class="footer_copyright_link translate">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>