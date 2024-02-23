<header id="in-header" class="in-header-section header-style-two">
    <div class="in-header-content-wrapper">

    </div>
    <div class="in-header-main-menu-wrapper d-flex justify-content-between align-items-center">
        <div class="m-brand-logo ml-auto">
            <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
        </div>
        <div class="in-header-main-menu-cta-btn d-flex justify-content-between align-items-center">
            <nav class="in-main-navigation-area clearfix ul-li">
                <ul id="main-nav" class="nav navbar-nav clearfix">
                    <li class="dropdown in-megamenu">
                        <a href="!#">Beranda</a>

                    </li>
                    <li><a target="_blank" href="about.html">Tentang Psikolog</a></li>
                    <li class="dropdown">
                        <a href="!#">Pelayanan</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a target="_blank" href="shop.html">Shop Page </a></li>
                            <li><a target="_blank" href="shop-single.html">Shop Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="!#">Tentang Kami</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a target="_blank" href="service.html">Services</a></li>
                            <li><a target="_blank" href="service-2.html">Service Page 2</a></li>
                            <li class="dropdown">
                                <a href="service-single.html">Services Details</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a target="_blank" href="service-single.html">Life Insurence</a></li>
                                    <li><a target="_blank" href="service-single.html">Health Insurence</a></li>
                                    <li><a target="_blank" href="service-single.html">Car Insurence</a></li>
                                    <li><a target="_blank" href="service-single.html">Home Insurence</a></li>
                                    <li><a target="_blank" href="service-single.html">Credit Insurence</a></li>
                                    <li><a target="_blank" href="service-single.html">Transport Insurence</a>
                                    </li>
                                    <li><a target="_blank" href="service-single.html">Energy Insurence</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="!#">Testimonial</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a target="_blank" href="testimonial.html">Testimonial</a></li>
                                    <li><a target="_blank" href="testimonial-carousel.html">Testimonial
                                            Carousel</a></li>

                                </ul>
                            </li>
                            <li><a target="_blank" href="team.html">Team Page</a></li>
                            <li><a target="_blank" href="team-single.html">Team Details</a></li>
                            <li><a target="_blank" href="faq.html">FAQ Page</a></li>
                            <li><a target="_blank" href="pricing.html">Pricing Page</a></li>
                            <li><a target="_blank" href="contact.html">Contact Page</a></li>
                            <li><a target="_blank" href="insurance-calculator.html">Insurence Calculator</a>
                            </li>
                            <li><a target="_blank" href="404.html">404</a></li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown">
                        <a class="" href="!#">Blog</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a target="_blank" href="blog-list.html">News </a></li>
                            <li><a target="_blank" href="blog-grid.html">News Grid</a></li>
                            <li><a target="_blank" href="blog-list-2.html">News List</a></li>
                            <li><a target="_blank" href="blog-slider.html">News Slider</a></li>
                            <li><a target="_blank" href="blog-single.html">News Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="" href="!#">Portfolio</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a target="_blank" href="portfolio-slide.html">Portfolio Slide </a></li>
                            <li><a target="_blank" href="portfolio-grid.html">Portfolio Grid</a></li>
                            <li><a target="_blank" href="portfolio-masonry.html">Porfolio Masonry</a></li>
                            <li><a target="_blank" href="portfolio-single.html">Portfolio Details</a></li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
            <div class="header-cta-btn ">
                <div class="in-header-search-cta-btn d-flex align-items-center">
                    @if (session('klien'))
                    <h6 class="text-dark  mt-2 me-5">{{ session('klien')->nama }}</h6>
                    @endif
                    <div class="in-header-cta-btn">
                        @if (session('klien'))
                        <button id="logoutKlien">Logout</button>
                        @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-login">Masuk</a>
                        @endif
                    </div>
                </div>
                {{-- <button class="" id="">Masuk</button> --}}
            </div>
        </div>
        <div class="header-cta-info d-flex align-items-center">
            <!-- <div class="inner-icon d-flex justify-content-center align-items-center"> -->
            <!-- <i class="fas fa-phone-alt"></i> -->
        </div>
        <div class="inner-text headline">
            <!-- <span>Need any help?</span>
                    <h4>Call: <a href="#">(210) 123-451</a></h4> -->
        </div>
    </div>
    </div>
    <div class="mobile_menu position-relative">
        <div class="mobile_menu_button open_mobile_menu">
            <i class="fal fa-bars text-dark"></i>
        </div>
        <div class="mobile_menu_wrap">
            <div class="mobile_menu_overlay open_mobile_menu"></div>
            <div class="mobile_menu_content">
                <div class="mobile_menu_close open_mobile_menu">
                    <i class="fal fa-times"></i>
                </div>
                <div class="m-brand-logo">
                    <a href="!#"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="in-m-search">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search..">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <nav class="mobile-main-navigation  clearfix ul-li">
                    <ul id="m-main-nav" class="nav navbar-nav clearfix">
                        <li class="dropdown in-megamenu">
                            <a href="!#">Beranda</a>
                        </li>
                        <li><a target="_blank" href="about.html">Tentang Psikolog</a></li>

                        <li class="dropdown">
                            <a href="!#">Pelayanan</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a target="_blank" href="service.html">Services</a></li>
                                <li><a target="_blank" href="service-2.html">Service Page 2</a></li>
                                <li class="dropdown">
                                    <a href="service-single.html">Services Details</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="service-single.html">Life Insurence</a>
                                        </li>
                                        <li><a target="_blank" href="service-single.html">Health Insurence</a>
                                        </li>
                                        <li><a target="_blank" href="service-single.html">Car Insurence</a></li>
                                        <li><a target="_blank" href="service-single.html">Home Insurence</a>
                                        </li>
                                        <li><a target="_blank" href="service-single.html">Credit Insurence</a>
                                        </li>
                                        <li><a target="_blank" href="service-single.html">Transport
                                                Insurence</a></li>
                                        <li><a target="_blank" href="service-single.html">Energy Insurence</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="!#">Testimonial</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="testimonial.html">Testimonial</a></li>
                                        <li><a target="_blank" href="testimonial-carousel.html">Testimonial
                                                Carousel</a></li>

                                    </ul>
                                </li>
                                <li><a target="_blank" href="team.html">Team Page</a></li>
                                <li><a target="_blank" href="team-single.html">Team Details</a></li>
                                <li><a target="_blank" href="faq.html">FAQ Page</a></li>
                                <li><a target="_blank" href="pricing.html">Pricing Page</a></li>
                                <li><a target="_blank" href="contact.html">Contact Page</a></li>
                                <li><a target="_blank" href="insurance-calculator.html">Insurence Calculator</a>
                                </li>
                                <li><a target="_blank" href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="" href="!#">Tentang Kami</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a target="_blank" href="blog-list.html">News </a></li>
                                <li><a target="_blank" href="blog-grid.html">News Grid</a></li>
                                <li><a target="_blank" href="blog-list-2.html">News List</a></li>
                                <li><a target="_blank" href="blog-slider.html">News Slider</a></li>
                                <li><a target="_blank" href="blog-single.html">News Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="" href="!#">Testimonial</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a target="_blank" href="portfolio-slide.html">Portfolio Slide </a></li>
                                <li><a target="_blank" href="portfolio-grid.html">Portfolio Grid</a></li>
                                <li><a target="_blank" href="portfolio-masonry.html">Porfolio Masonry</a></li>
                                <li><a target="_blank" href="portfolio-single.html">Portfolio Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /Mobile-Menu -->
    </div>
    </div>
</header>
