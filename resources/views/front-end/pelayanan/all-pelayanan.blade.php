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

<style>
    /* Tambahkan gaya CSS jika diperlukan */

    .checkmark {
        color: #559157;
        /* Warna hijau, bisa disesuaikan */
        font-size: 24px;
    }

</style>
<body>
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>

    @include('front-end.header')
    @yield('container')
    <!-- search filed -->
    <div class="search-body">
        <div class="search-form">
            <form action="#" class="search-form-area">
                <input class="search-input" type="search" placeholder="Search Here">
                <button type="submit" class="search-btn1">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="outer-close text-center search-btn">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
    <!-- End of header section
	============================================= -->

    <!-- Start of breadcrumb section
	============================================= -->

    <!-- End of breadcrumb section
	============================================= -->

    <!-- Start of Service section
	============================================= -->
    {{-- <section id="in-service-page-service-1" class="in-service-page-service-section-1">
            <div class="container">
                <div class="in-service-content-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="in-service-item-3 position-relative">
                                <div class="inner-text headline pera-content">
                                    <h3><a href="#">Home Insurance</a></h3>
                                    <p>Leverage agile frameworks provide
                                        synopsis for high level overviews
                                        Iterative approaches.</p>
                                </div>
                                <div class="inner-icon-btn d-flex align-items-center justify-content-between">
                                    <div class="inner-icon">
                                        <i class="flaticon-home-insurance"></i>
                                    </div>
                                    <div class="inner-btn">
                                        <a class="d-flex align-items-center justify-content-center" href="#"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="in-service-item-3 position-relative">
                                <div class="inner-text headline pera-content">
                                    <h3><a href="#">Cradit Insurance</a></h3>
                                    <p>Leverage agile frameworks provide
                                        synopsis for high level overviews
                                        Iterative approaches.</p>
                                </div>
                                <div class="inner-icon-btn d-flex align-items-center justify-content-between">
                                    <div class="inner-icon">
                                        <i class="flaticon-insurance-1"></i>
                                    </div>
                                    <div class="inner-btn">
                                        <a class="d-flex align-items-center justify-content-center" href="#"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="in-service-item-3 position-relative">
                                <div class="inner-text headline pera-content">
                                    <h3><a href="#">Car Insurance</a></h3>
                                    <p>Leverage agile frameworks provide
                                        synopsis for high level overviews
                                        Iterative approaches.</p>
                                </div>
                                <div class="inner-icon-btn d-flex align-items-center justify-content-between">
                                    <div class="inner-icon">
                                        <i class="flaticon-insurance-2"></i>
                                    </div>
                                    <div class="inner-btn">
                                        <a class="d-flex align-items-center justify-content-center" href="#"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="in-service-item-3 position-relative">
                                <div class="inner-text headline pera-content">
                                    <h3><a href="#">Travel Insurance</a></h3>
                                    <p>Leverage agile frameworks provide
                                        synopsis for high level overviews
                                        Iterative approaches.</p>
                                </div>
                                <div class="inner-icon-btn d-flex align-items-center justify-content-between">
                                    <div class="inner-icon">
                                        <i class="flaticon-life-insurance"></i>
                                    </div>
                                    <div class="inner-btn">
                                        <a class="d-flex align-items-center justify-content-center" href="#"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="in-service-item-3 position-relative">
                                <div class="inner-text headline pera-content">
                                    <h3><a href="#">Life Insurance</a></h3>
                                    <p>Leverage agile frameworks provide
                                        synopsis for high level overviews
                                        Iterative approaches.</p>
                                </div>
                                <div class="inner-icon-btn d-flex align-items-center justify-content-between">
                                    <div class="inner-icon">
                                        <i class="flaticon-life-insurance-1"></i>
                                    </div>
                                    <div class="inner-btn">
                                        <a class="d-flex align-items-center justify-content-center" href="#"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="in-service-item-3 position-relative">
                                <div class="inner-text headline pera-content">
                                    <h3><a href="#">Health Insurance</a></h3>
                                    <p>Leverage agile frameworks provide
                                        synopsis for high level overviews
                                        Iterative approaches.</p>
                                </div>
                                <div class="inner-icon-btn d-flex align-items-center justify-content-between">
                                    <div class="inner-icon">
                                        <i class="flaticon-healthcare"></i>
                                    </div>
                                    <div class="inner-btn">
                                        <a class="d-flex align-items-center justify-content-center" href="#"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- End of Service section
	============================================= -->

    <!-- Start of Cta Contact section
	============================================= -->
    {{-- <section id="in-cta-contact" class="in-cta-contact-section position-relative" data-background="assets/img/bg/ct-c.jpg">
        <div class="container">
            <div class="in-cta-contact-content-3 position-relative">
                <div class="in-get-quote-form-area">
                    <div class="in-get-quote-btn">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="home" aria-selected="true">Personal</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="profile" aria-selected="false">Business</button>
                            </li>
                        </ul>
                    </div>
                    <div class="in-contact-tab-area">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane animated fadeInUp show active" id="personal" role="tabpanel" aria-labelledby="home-tab">
                                <div class="in-contact-form-title-area">
                                    <div class="form-title headline pera-content">
                                        <h3>Personal Insurence</h3>
                                        <p>Get zip code to compare Home insurance</p>
                                    </div>
                                    <div class="in-contact-form">
                                        <form action="#" method="get">
                                            <input type="text" name="name" placeholder="Name">
                                            <input type="email" name="email" placeholder="Email">
                                            <div class="in-insurance-type in-select position-relative">
                                                <select>
                                                    <option value="#">Property Type</option>
                                                    <option value="#">Life Insurance</option>
                                                    <option value="#">Health Insurance</option>
                                                    <option value="#">Home Insurance</option>
                                                    <option value="#">Car Insurance</option>
                                                </select>
                                            </div>
                                            <button type="submit">Get a Quote Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInUp" id="business" role="tabpanel" aria-labelledby="home-tab">
                                <div class="in-contact-form-title-area">
                                    <div class="form-title headline pera-content">
                                        <h3>Business Insurence</h3>
                                        <p>Get zip code to compare Home insurance</p>
                                    </div>
                                    <div class="in-contact-form">
                                        <form action="#" method="get">
                                            <input type="text" name="name" placeholder="Name">
                                            <input type="email" name="email" placeholder="Email">
                                            <div class="in-insurance-type in-select position-relative">
                                                <select>
                                                    <option value="#">Property Type</option>
                                                    <option value="#">Credit Insurance</option>
                                                    <option value="#">Transport Insurance</option>
                                                    <option value="#">Energy Insurance</option>
                                                    <option value="#">Employee Insurance</option>
                                                </select>
                                            </div>
                                            <button type="submit">Get a Quote Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-video-play-btn position-absolute">
                    <a class="video_box d-flex align-items-center justify-content-center" href="#"><i class="fas fa-play"></i>
                        <span class="video_btn_border border_wrap-1"></span>
                        <span class="video_btn_border border_wrap-2"></span>
                        <span class="video_btn_border border_wrap-3"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="in-cta-info-2 position-absolute wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1000ms" data-background="assets/img/bg/cta-bg3.jpg">
            <div class="in-cta-info-item d-flex">
                <div class="inner-icon">
                    <img src="assets/img/about/call.png" alt="">
                </div>
                <div class="inner-text headline">
                    <h3>Facing any problem to get a quote!</h3>
                    <span>Call: 1.888.255.4364</span>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End of Cta Contact section
	============================================= -->

    <!-- Start of Price section
	============================================= -->
    <section id="in-price" class="in-price-section">
        <div class="container">
            <div class="in-section-title-2 in-title-wrap text-center headline pera-content">
                <div class="sub-title text-uppercase">
                    Layanan Konseling
                </div>
                <br>
                <h2>Pilih jenis konseling yang cocok untukmu </h2>
                <p>"Seringkali, langkah pertama menuju pemulihan adalah mengungkapkan rahasia yang telah lama terpendam. Seorang konselor adalah saksi setia dalam perjalanan tersebut." - Alice Miller
                </p>
            </div>
            <div class="in-price-content">
                <div class="row justify-content-center">
                    @foreach ($setting as $settings)

                    <div class="col-lg-4 col-md-6">
                        <div class="in-price-inner-items text-center">
                            <div class="pricing-title-price-area headline">
                                <h2>{{ $settings->nama_pelayanan }}</h2>
                                <span>Mulai dari</span>
                                @php
                                $huruf = str_split($settings->harga);
                                $angka = '';
                                if (count($huruf)>5) {
                                for ($i = 0; $i < 6; $i++) { array_pop($huruf); } } foreach($huruf as $row){ $angka .=$row; } @endphp @if($settings->harga > 999999)
                                    <h3><sup>Rp</sup>{{$angka }}Jt
                                    </h3><span>/sesi</span>
                                    <span>{{ $settings->keterangan }}
                                    </span>
                                    <br>
                                    @else <h3><sup>Rp</sup>{{ number_format($settings->harga, 0, '.', '.') }}</h3><span>/sesi</span>
                                    <span>{{ $settings->keterangan }}
                                    </span>
                                    <br>
                                    @endif
                            </div>
                            <div class="pricing-list-btn position-relative">
                                <div class="pricing-list ul-li-block">
                                    <ul>
                                        <li><i class="fas fa-check checkmark"></i> Terapi yang Beragam</li>
                                        <li><i class="fas fa-check checkmark"></i> Konseling tatap muka atau via Chat/Call/Video Call</li>
                                        <li><i class="fas fa-check checkmark"></i> Fokus Pada Solusi</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <div class="in-btn-1">
                                        <a href="/jadwal">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End of Price section
	============================================= -->


    <!-- Start of Sponsor section
	============================================= -->
    <!-- End of Sponsor section
	============================================= -->


    <!-- Start of Footer section
	============================================= -->
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
    <script src="/page-script/menu-saya.js"></script>
</body>
</html>
