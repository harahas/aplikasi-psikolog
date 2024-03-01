<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Akhlaqul Karimah</title>
    <meta name="description" content="Insurin - Insurance Company HTML Template">
    <meta name="keywords" content="	accounting, advising, advisory, business, company, consulting, corporate, finance, financial, investments, law, multi-purpose, services, tax help, visual composer">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="/assets/img/logo/ficon.png" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/video.min.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/rs6.css">
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style2.css">
    <script src="/page-script/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
    <script src="/page-script/sweetalert2.all.min.js"></script>

</head>

<body>
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>

    @include('front-end.header')
    @yield('container')

    <!-- End of Sponsor section
	============================================= -->

    <!-- Start of Footer section
	============================================= -->
    @include('front-end.modal-login')
    <footer id="in-footer" class="in-footer-section" data-background="/assets/img/bg/footerr.png">
        <div class="container">
            <div class="in-footer-widget-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="in-footer-widget">
                            <div class="logo-widget">
                                <div class="brand-logo">
                                </div>
                                <div class="footer-text ">
                                    Menyelaraskan Keluarga Menuju Akhlaqul Karimah: Cinta, Harmoni, dan Kebahagiaan.
                                </div>
                                <div class="footer-social d-flex">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="in-footer-widget">
                            <div class="contact-widget headline">
                                <h3 class="widget-title">Contact info</h3>
                                <div class="contact-info">
                                    <div class="info-item d-flex align-items-center">
                                        <div class="inner-icon d-flex align-items-center justify-content-center">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="inner-text">
                                            Jln. Sukamulya, Panglayungan, Kab. Tasikmalaya, Jawa Barat 46151
                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center">
                                        <div class="inner-icon d-flex align-items-center justify-content-center">
                                            <i class="fal fa-envelope-open-text"></i>
                                        </div>
                                        <div class="inner-text">
                                            akhlaqulkarimah@gmail.com
                                            085-860-568-027
                                        </div>
                                    </div>
                                    <div class="info-item d-flex align-items-center">
                                        <div class="inner-icon d-flex align-items-center justify-content-center">
                                            <i class="fal fa-phone-plus"></i>
                                        </div>
                                        <div class="inner-text">
                                            Sen – Sel: 08.00 – 16.00,
                                            Minggu : Tutup
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="in-footer-widget">
                            <div class="menu-widget headline ul-li-block">
                                <h3 class="widget-title">Our Company</h3>
                                <ul>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">News & Blog</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Customer Support</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Website Accessibility</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-lg-4 col-md-6">
                        <div class="in-footer-widget">
                            <div class="newslatter-widget headline ul-li-block">
                                <h3 class="widget-title">Subscribe newsletter</h3>
                                <form action="#" method="get">
                                    <input type="email" name="email" placeholder="Email">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="in-footer-copyright-area d-flex justify-content-end">
                <div class="in-footer-copyright-text">
                    <div class="inner-text d-flex justify-content-end">
                        Copyright © 2024 Akhlaqul Karimah
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer section
	============================================= -->


    <!-- For Js Library -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/knob.js"></script>
    <script src="/assets/js/jquery.filterizr.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/rbtools.min.js"></script>
    <script src="/assets/js/rs6.min.js"></script>
    <script src="/assets/js/jarallax.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/jquery.marquee.min.js"></script>
    <script src="/assets/js/roundslider.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/page-script/login.js"></script>
</body>

</html>
