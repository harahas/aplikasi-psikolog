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
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">

                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" text-color="white"><i class="
                            mdi mdi-account-heart"></i> Isi Data Diri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="mdi mdi-calendar-clock"></i> Atur Jadwal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-credit-card-check"></i> Pembayaran</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form action="javascript:;" id="form-update-profil">
                            <input type="hidden" name="unique" value="{{ $klien->unique }}">
                            @csrf
                            <div class="row sm-2" style="overflow-x: scroll">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>Nama Lengkap:</strong></div>
                                        <div class="col-sm-12 value" id="namaLengkap">
                                            <input type="text" class="form-control" name="nama" value="{{  $klien->nama }}">
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>No HP:</strong></div>
                                        <input type="text" name="no_hp" class="form-control" value="{{ $klien->no_hp }}">
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>Tanggal Lahir:</strong></div>
                                        <input type="text" name="tgl_lahir" class="form-control" value="{{ $klien->tgl_lahir }}">
                                    </li>
                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>Jenis Kelamin:</strong></div>
                                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                            <option value="laki_laki" {{ $klien->jenis_kelamin == 'laki_laki' ? 'selected':'' }}>Laki-laki</option>
                                            <option value="perempuan" {{ $klien->jenis_kelamin == 'perempuan' ? 'selected':'' }}>Perempuan</option>
                                        </select>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>Pendidikan Terakhir:</strong></div>
                                        <select class="form-select" aria-label="Default select example" name="pendidikan_terakhir">
                                            <option disabled value="">Pendidikan Terakhir</option>
                                            <option value="sd" {{ $klien->pendidikan_terakhir == 'sd' ? 'selected':'' }}>SD</option>
                                            <option value="smp" {{ $klien->pendidikan_terakhir == 'smp' ? 'selected':'' }}>SMP</option>
                                            <option value="sma" {{ $klien->pendidikan_terakhir == 'sma' ? 'selected':'' }}>SMA</option>
                                            <option value="D1" {{ $klien->pendidikan_terakhir == 'D1' ? 'selected':'' }}>D1</option>
                                            <option value="D2" {{ $klien->pendidikan_terakhir == 'D2' ? 'selected':'' }}>D2</option>
                                            <option value="S1" {{ $klien->pendidikan_terakhir == 'S1' ? 'selected':'' }}>S1/D4</option>
                                            <option value="S2" {{ $klien->pendidikan_terakhir == 'S2' ? 'selected':'' }}>S2</option>
                                            <option value="S3" {{ $klien->pendidikan_terakhir == 'S3' ? 'selected':'' }}>S3</option>
                                        </select>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>Pekerjaan:</strong></div>
                                        <select class="form-select" aria-label="Default select example" name="pekerjaan">
                                            <option disabled value="">Pilih Pekerjaan</option>
                                            <option value="belum_bekerja" {{ $klien->pekerjaan == 'belum_bekerja' ? 'selected' : '' }}>Belum Bekerja</option>
                                            <option value="pelajar" {{ $klien->pekerjaan == 'pelajar' ? 'selected' : '' }}>Pelajar</option>
                                            <option value="mahasiswa" {{ $klien->pekerjaan == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                                            <option value="irt" {{ $klien->pekerjaan == 'irt' ? 'selected' : '' }}>Ibu Rumah Tangga</option>
                                            <option value="wiraswasta" {{ $klien->pekerjaan == 'wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                                            <option value="penyedia" {{ $klien->pekerjaan == 'penyedia' ? 'selected' : '' }}>Penyedia Jasa (Guru/Dokter/Lawyer/Peneliti/Lainnya)</option>
                                            <option value="freelance" {{ $klien->pekerjaan == 'freelance' ? 'selected' : '' }}>Freelance</option>
                                            <option value="karyawan" {{ $klien->pekerjaan == 'karyawan' ? 'selected' : '' }}>Karyawan Swasta</option>
                                            <option value="pns" {{ $klien->pekerjaan == 'pns' ? 'selected' : '' }}>Pegawai Negeri Sipil</option>
                                            <option value="bumn" {{ $klien->pekerjaan == 'bumn' ? 'selected' : '' }}>BUMN</option>
                                        </select>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>Status:</strong></div>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option disabled value="">Status</option>
                                            <option value="belum_menikah" {{ $klien->status == 'belum_menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                            <option value="menikah" {{ $klien->status == 'menikah' ? 'selected' : '' }}>Menikah</option>
                                            <option value="cerai_mati" {{ $klien->status == 'cerai_mati' ? 'selected' : '' }}>Cerai Mati</option>
                                            <option value="cerai_hidup" {{ $klien->status == 'cerai_hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                        </select>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="col-sm-4 label"><strong>Agama:</strong></div>
                                        <select class="form-select" aria-label="Default select example" name="agama">
                                            <option disabled value="">Pilih Agama</option>
                                            <option value="islam" {{ $klien->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                            <option value="kristen" {{ $klien->agama == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                            <option value="katolik" {{ $klien->agama == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                            <option value="hindu" {{ $klien->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                            <option value="budha" {{ $klien->agama == 'budha' ? 'selected' : '' }}>Budha</option>
                                            <option value="khonghucu" {{ $klien->agama == 'khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                                        </select>
                                    </li>

                                </ul>
                            </div>
                            <div class="mt-3">
                                <button type="button" id="" class="btn btn-primary">Selanjutnya</button>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade justify-content-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <ul class="list-group">
                                    <div class="container mt-5">
                                        <form id="konselingForm">
                                            <div class="form-group">
                                                <label for="metodeKonseling">Metode Konseling:</label>
                                                <select class="form-control" id="metodeKonseling" name="metodeKonseling" onchange="toggleAlamat()">
                                                    <option value="online">Online</option>
                                                    <option value="offline">Offline</option>
                                                </select>
                                            </div>

                                            <div class="form-group" id="alamatContainer" style="display: none;">
                                                <label for="alamat">Alamat:</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="Jalan A" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="jumlahSesi">Jumlah Sesi:</label>
                                                <input type="number" class="form-control" id="jumlahSesi" name="jumlahSesi" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="tanggal">Tanggal:</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Waktu:</label>
                                                <div data-toggle="buttons">
                                                    <label class="btn ">
                                                        <input type="radio" name="waktu" id="waktu1"> 08.00 - 09.00
                                                    </label>
                                                    <label class="">
                                                        <input type="radio" name="waktu" id="waktu2"> 09.00 - 10.00
                                                    </label>
                                                    <!-- Tambahkan tombol waktu lainnya sesuai kebutuhan -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="noHP">No HP:</label>
                                                <input type="tel" class="form-control" id="noHP" name="noHP" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="deskripsiMasalah">Deskripsi Masalah:</label>
                                                <textarea class="form-control" id="deskripsiMasalah" name="deskripsiMasalah" rows="4" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="harapanSetelahKonseling">Harapan Setelah Konseling:</label>
                                                <textarea class="form-control" id="harapanSetelahKonseling" name="harapanSetelahKonseling" rows="4" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="harga">Harga:</label>
                                                <input type="text" class="form-control" id="harga" name="harga" readonly>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
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
                        <div class="container mt-5">
                            <form id="detailPembayaranForm">
                                <div class="form-group">
                                    <label for="kategoriLayanan">Kategori Layanan:</label>
                                    <input type="text" class="form-control" id="kategoriLayanan" name="kategoriLayanan" value="Konseling Individu" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="jumlahSesi">Jumlah Sesi:</label>
                                    <input type="number" class="form-control" id="jumlahSesi" name="jumlahSesi" value="1" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">Tanggal:</label>
                                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="2024-03-01" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="waktu">Waktu:</label>
                                    <input type="text" class="form-control" id="waktu" name="waktu" value="08.00 - 09.00" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="metodeKonseling">Metode Konseling:</label>
                                    <input type="text" class="form-control" id="metodeKonseling" name="metodeKonseling" value="Offline" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="pembayaran">Pembayaran:</label>
                                    <input type="text" class="form-control" id="pembayaran" name="pembayaran" value="Rp 300.000" readonly>
                                </div>

                                <div class="form-group">
                                    <br>
                                    <button type="button" class="btn btn-primary">Kembali</button>
                                    <button type="button" class="btn btn-success">Bayar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


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
</body>

</html>