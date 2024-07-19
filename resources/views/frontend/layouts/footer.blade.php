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
<!-- Modal -->
<div class="modal fade" id="open_video" tabindex="-1" aria-labelledby="open_videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="ratio ratio-16x9">
                    <iframe id="modal_video" src="" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast align-items-center  border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="3000">
        <div class="d-flex">
            <div class="toast-body" id="formResponce">
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
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
                            <a href="<?php echo BASE_URL_FRONT; ?>">
                                <img src="<?= BASE_URL ?>/<?= _get_setting_value('SITE_LOGO') ?>" alt="logo" class="img-fluid" />
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
                                            <?php _get_setting_value('ADDRESS') ?>
                                        </li>

                                        <li>
                                            <span>
                                                <i class="fi fi-rr-phone-call"></i>
                                            </span>
                                            <a href="tel:<?php _get_setting_value('PHONE_NUMBER') ?>"><?php _get_setting_value('PHONE_NUMBER') ?></a>
                                        </li>

                                    </ul>
                                    <ul class="footer_address_content_box_email translate">
                                        <li>
                                            <span>
                                                <i class="fi fi-rr-envelope"></i>
                                            </span>
                                            <a href="<?php _get_setting_value('EMAIL_ADDRESS') ?>"><?php _get_setting_value('EMAIL_ADDRESS') ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li>
                                    <a href="<?php _get_setting_value('SOCIAL_MEDIA_TWITTER') ?>" target="_blank">
                                        <span>
                                            <img src="<?php echo BASE_URL_FRONT; ?>/assets/image/twitter-alt-circle.svg" alt="logo" class="img-fluid" />
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php _get_setting_value('SOCIAL_MEDIA_FACEBOOK') ?>" target="_blank">
                                        <span>
                                            <i class="fi fi-brands-facebook"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php _get_setting_value('SOCIAL_MEDIA_INSTAGRAM') ?>" target="_blank">
                                        <span>
                                            <i class="fi fi-brands-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php _get_setting_value('SOCIAL_MEDIA_LINKDEIN') ?>" target="_blank">
                                        <span>
                                            <i class="fi fi-brands-linkedin"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php _get_setting_value('SOCIAL_MEDIA_YOUTUBE') ?>" target="_blank">
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
                            <?php
                            $categories = getAllitemsFromCategory('1');
                            foreach ($categories as $cat) :
                            ?>
                                <li class="translate">
                                    <a href="<?php echo BASE_URL_FRONT; ?>/product-category/<?= $cat['id'] ?>">
                                        <?= $cat['cat_name'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_links">
                    <div class="footer_links_content">
                        <span class="translate">Services</span>
                        <ul class="menu translate">
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/gold-service">Gold
                                    Service</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/order-online">Order Online</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/#">Service Outlets</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/spare-parts-support">Spare Parts Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_links">
                    <div class="footer_links_content">
                        <span class="translate">About Us</span>
                        <ul class="menu translate">
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/company-profile">
                                    Company Profile
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/history">
                                    History
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/contact-us">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/brand">
                                    Brand
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/social-responsibility">
                                    Social Responsibility
                                </a>
                            </li>
                        </ul>
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
                                <a href="<?php echo BASE_URL_FRONT; ?>/#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL_FRONT; ?>/#">Site Map</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>