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
    <br>
    <br>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Menu</h5>
                <br>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profil</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Jadwal Konseling</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Riwayat Transaksi</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ubah Kata Sandi</button>
                    </div>
                    <hr>
                    <div class="card col-md-10">
                        <div class="col-md-12">
                            <div class="card-header">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-sm-4 label"><strong>Nama Lengkap:</strong></div>
                                                <div class="col-sm-8 value" id="namaLengkap" name="namaLengkap">Hamni Rahma Hasibuan</div>

                                                <div class="col-sm-4 label"><strong>No HP:</strong></div>
                                                <div class="col-sm-8 value" id="noHP" name="noHP">085860568027</div>

                                                <div class="col-sm-4 label"><strong>Tanggal Lahir:</strong></div>
                                                <div class="col-sm-8 value" id="tglLahir" name="tglLahir">28 Januari 2000</div>

                                                <div class="col-sm-4 label"><strong>Jenis Kelamin:</strong></div>
                                                <div class="col-sm-8 value" id="jenisKelamin" name="jenisKelamin">Perempuan</div>

                                                <div class="col-sm-4 label"><strong>Pendidikan Terakhir:</strong></div>
                                                <div class="col-sm-8 value" id="pendidikanTerakhir" name="pendidikanTerakhir">S1 Teknik Informatika</div>

                                                <div class="col-sm-4 label"><strong>Pekerjaan:</strong></div>
                                                <div class="col-sm-8 value" id="pekerjaan" name="pekerjaan">Software Engineer</div>

                                                <div class="col-sm-4 label"><strong>Status:</strong></div>
                                                <div class="col-sm-8 value" id="status" name="status">Belum Menikah</div>

                                                <div class="col-sm-4 label"><strong>Agama:</strong></div>
                                                <div class="col-sm-8 value" id="agama" name="agama">Islam</div>
                                            </div>
                                        </form>


                                        <div class="mt-3">
                                            <button class="btn btn-primary">Ubah Profil</button>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <!-- Konten Jadwal Konseling -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <!-- Konten Riwayat Transaksi -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</div>
{{-- Card menu --}}
<br>
<br>


<!-- End of Sponsor section
	============================================= -->

<!-- Start of Footer section
	============================================= -->
@include('front-end.modal-login')
<footer id="in-footer" class="in-footer-section" data-background="/assets/img/bg/footer-bg.jpg">
    <div class="container">
        <div class="in-footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="in-footer-widget">
                        <div class="logo-widget">
                            <div class="brand-logo">
                                <a href="#"><img src="/assets/img/logo/logo-2.png" alt=""></a>
                            </div>
                            <div class="footer-text">
                                The charms of pleasure of the empect moment, so blinded by desire, thats they cannot
                                fores that ound to.
                            </div>
                            <div class="footer-social d-flex">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="in-footer-widget">
                        <div class="contact-widget headline">
                            <h3 class="widget-title">Contact info</h3>
                            <div class="contact-info">
                                <div class="info-item d-flex align-items-center">
                                    <div class="inner-icon d-flex align-items-center justify-content-center">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="inner-text">
                                        30 Commercial Road
                                        Fratton, Australia
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center">
                                    <div class="inner-icon d-flex align-items-center justify-content-center">
                                        <i class="fal fa-envelope-open-text"></i>
                                    </div>
                                    <div class="inner-text">
                                        insurin@company.com
                                        1-888-452-1505
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center">
                                    <div class="inner-icon d-flex align-items-center justify-content-center">
                                        <i class="fal fa-phone-plus"></i>
                                    </div>
                                    <div class="inner-text">
                                        Mon – Sat: 8 am – 5 pm,
                                        Sunday: CLOSED
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
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
                </div>
                <div class="col-lg-3 col-md-6">
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
                    Copyright © 2022themexriver
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
