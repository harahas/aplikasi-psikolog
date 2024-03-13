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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />
    <link rel="stylesheet" href="/css/flatpickr.min.css">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets2/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="/assets2/js/config.js"></script>

    <!-- App css -->
    <link href="/assets2/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="/assets2/css/icons.min.css" rel="stylesheet" type="text/css" />

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
    <style>
        .nav-pills .nav-link {
            color: black;
        }

        .nav-pills .nav-link.active {
            background-color: #00372d;
            text-color: white;
        }

        .nav-pills .nav-item .nav-link {
            border-radius: 20px;
            /* Adjust the value to make it more circular */
        }

    </style>

    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>

    @include('front-end.header')
    @yield('container')
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-6">
        {{-- INPPUT HIDDEN --}}
        <input type="hidden" value="{{ $data_pembayaran->harga }}" id="harga-sesi">
        {{-- ./INPPUT HIDDEN --}}
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="mdi mdi-calendar-clock"></i> Atur Jadwal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" disabled="true" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-credit-card-check"></i> Pembayaran</button>
                    </li>
                </ul>
                <form action="/storeReservasi" method="POST" enctype="multipart/form-data" id="form-update-profil">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade justify-content-center show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <input type="hidden" name="unique_klien" value="{{ $klien->unique }}">
                            <input type="hidden" name="unique_setting_bayar" value="{{ $data_pembayaran->unique }}">
                            <input type="hidden" name="nominal" value="{{ $data_pembayaran->harga }}">
                            @php
                            $tanggal = '';
                            foreach($setting_jadwal as $row){
                            $tanggal .= $row->tanggal .'/';
                            }
                            @endphp
                            <input type="hidden" value="{{ $tanggal }}" id="tanggal-tersedia">
                            <input type="hidden" name="sesi">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <ul class="list-group">
                                        <div class="container mt-5">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="tanggal">Pilih Tanggal:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Waktu:</label>
                                                <div data-toggle="buttons" id="waktu"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi Masalah:</label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="harapan">Harapan Setelah Konseling:</label>
                                                <textarea class="form-control" id="harapan" name="harapan" rows="4" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Harga:</label>
                                                <input type="text" class="form-control" id="harga" name="harga" value="Rp. {{ number_format($data_pembayaran->harga,0, ',','.') }}" readonly>
                                            </div>
                                            <br>
                                            <button type="button" id="btn-next1" class="btn btn-primary">Submit</button>
                                        </div>
                                    </ul> <!-- Tambahkan Bootstrap JS dan jQuery (diperlukan oleh Bootstrap) -->
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="container mt-5" style="padding: 20px">
                                <h2>Checkout</h2>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3>{{ $data_pembayaran->nama_pelayanan }}</h3>
                                    <h3>{{ $reservasi->rupiah($data_pembayaran->harga) }}</h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h3>Jumlah Sesi</h3>
                                    <h3 id="jumlah_sesi">1</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3>Total</h3>
                                    <h3 id="total_bayar">Total</h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h3>Pembayaran Melalui: (BRI) 446601018784531 - Gian Sonia</h3>
                                </div>
                                <br><br><br><br>
                                <h3>Upload Bukti Bayar</h3>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <input type="file" class="form-control" name="bukti_bayar" required>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mt-4">Reservasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- Card menu --}}
                <br>
                <br>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>
                document.write(new Date().getFullYear())

            </script> © Akhlaqul Karimah - 2024
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="/assets2/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/assets2/js/app.min.js"></script>
    <!-- Bootstrap Wizard Form js -->
    <script src="/assets2/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

    <!-- Wizard Form Demo js -->
    <script src="/assets2/js/pages/form-wizard.init.js"></script>
    <script src="/page-script/register.js"></script>
</body>
</div>
</div>
<br>
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
<script src="/page-script/flatpickr.js"></script>

<script>
    $(document).ready(function() {
        $("#jumlahSesi").on('keyup', function() {
            let jumlah = parseInt($(this).val());
            let hargaSesi = parseInt($("#harga-sesi").val());
            if (jumlah > 0) {
                $("#harga").val(jumlah * hargaSesi);
            } else {
                $("#harga").val(hargaSesi);
            }
        })
    })

</script>
<script src="/page-script/atur-jadwal.js"></script>
</body>

</html>
