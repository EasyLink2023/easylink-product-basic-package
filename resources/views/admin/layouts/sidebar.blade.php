@php
    $rt = Route::currentRouteName();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        {{-- <img src="{{ asset('asset/setting') }}/{{ _get_setting_value('SITE_LOGO') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">{{ _get_setting_value('SITE_NAME') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ $rt == 'admin.dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.quotes.index') }}"
                        class="nav-link {{ $rt == 'admin.quotes.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-quote-left"></i>
                        <p>
                            All Quotes Request
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contact-form.index') }}"
                        class="nav-link {{ $rt == 'admin.contact-form.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            All Contact Us Page Form
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.setting.index' || $rt == 'admin.setting.create' || $rt == 'admin.setting.edit' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.setting.create') }}"
                                class="nav-link {{ $rt == 'admin.setting.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Setting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.setting.index') }}"
                                class="nav-link {{ $rt == 'admin.setting.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.menu.index' || $rt == 'admin.menu.create' || $rt == 'admin.menu.edit' || $rt == 'admin.page.edit' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.menu.create') }}"
                                class="nav-link {{ $rt == 'admin.menu.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.menu.index') }}"
                                class="nav-link {{ $rt == 'admin.menu.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Menu</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.index.page.index' || $rt == 'admin.index.page.create' || $rt == 'admin.index.page.edit' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Index Page
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.index.page.create') }}"
                                class="nav-link {{ $rt == 'admin.index.page.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Index Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.index.page.index') }}"
                                class="nav-link {{ $rt == 'admin.index.page.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Index Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.service.index' || $rt == 'admin.service.create' || $rt == 'admin.service.edit' || $rt == 'admin.blog.service' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-hands-helping"></i>
                        <p>
                            Service
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.service.create') }}"
                                class="nav-link {{ $rt == 'admin.service.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Service</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.index') }}"
                                class="nav-link {{ $rt == 'admin.service.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Service</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.contact.page.index' || $rt == 'admin.contact.page.create' || $rt == 'admin.contact.page.edit' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-phone-alt"></i>
                        <p>
                            Contact Us Page
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.page.create') }}"
                                class="nav-link {{ $rt == 'admin.contact.page.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Contact Us Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.page.index') }}"
                                class="nav-link {{ $rt == 'admin.contact.page.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Contact Us Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.blog.index' || $rt == 'admin.blog.create' || $rt == 'admin.blog.edit' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.blog.create') }}"
                                class="nav-link {{ $rt == 'admin.blog.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blog.index') }}"
                                class="nav-link {{ $rt == 'admin.blog.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.testimonial.index' || $rt == 'admin.testimonial.create' || $rt == 'admin.testimonial.edit' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Testimonial
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.testimonial.create') }}"
                                class="nav-link {{ $rt == 'admin.testimonial.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Testimonial</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.testimonial.index') }}"
                                class="nav-link {{ $rt == 'admin.testimonial.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Testimonial</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.seo.index' || $rt == 'admin.seo.edit' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            SEO
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- <li class="nav-item">
                            <a href="{{ route('admin.seo.edit') }}"
                                class="nav-link {{ $rt == 'admin.seo.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add SEO</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.seo.index') }}"
                                class="nav-link {{ $rt == 'admin.seo.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All SEO</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ $rt == 'admin.gallery.index' || $rt == 'admin.gallery.create' ? 'menu-is-opening menu-open active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Gallery
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.gallery.create') }}"
                                class="nav-link {{ $rt == 'admin.gallery.create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.gallery.index') }}"
                                class="nav-link {{ $rt == 'admin.gallery.index' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
