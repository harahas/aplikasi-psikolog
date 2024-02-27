<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
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
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="row">
                                <div class="col-12">
                                    <br>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="header-title mb-0">Register User</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="basicwizard">

                                                <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                                    <li class="nav-item">
                                                        <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" id="tab1">
                                                            <i class="ri-account-circle-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Buat Akunmu</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link disabled rounded-0 py-2" id="tab2">
                                                            <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Lengkapi Profilmu</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link disabled rounded-0 py-2" id="tab3">
                                                            <i class="ri- ri-check-double-fill fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Selesai</span>
                                                        </a>
                                                    </li>

                                                </ul>

                                                <div class="tab-content b-0 mb-0">
                                                    <div class="tab-pane" id="basictab1">
                                                        <div class="row">
                                                            <div class="col-12">
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->

                                                        <form action="javascript:">

                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama</label>
                                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">

                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="mb-3">
                                                                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                                                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Nomor Handphone">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="mb-3">
                                                                    <label for="password" class="form-label">Password</label>
                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="password_confirmation" class="form-label">Masukan Ulang Password</label>
                                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                                                                </div>
                                                                <div class="row d-flex">
                                                                    <div class="col-sm-12">
                                                                        <button type="button" class="btn btn-primary float-end" id="next-1">Selanjutnya</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="tab-pane" id="basictab2">
                                                        <div class="row">
                                                            <div class="col-12">

                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                        <form action="javascript:;">
                                                            <div class="mb-3">
                                                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan tanggal lahir Anda">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                                                                    <option selected disabled value="">Pilih Jenis Kelamin</option>
                                                                    <option value="laki_laki">Laki-laki</option>
                                                                    <option value="perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                                                <select class="form-select" aria-label="Default select example" name="pendidikan_terakhir">
                                                                    <option selected disabled value="">Pendidikan Tekakhir</option>
                                                                    <option value="sd">SD</option>
                                                                    <option value="smp">SMP</option>
                                                                    <option value="sma">SMA</option>
                                                                    <option value="D1">D3</option>
                                                                    <option value="D1">D3</option>
                                                                    <option value="S1">S1/D4</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>

                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                                                <select class="form-select" aria-label="Default select example" name="pekerjaan">
                                                                    <option selected disabled value="">Pilih Pekerjaan</option>
                                                                    <option value="belum_bekerja">Belum Bekerja</option>
                                                                    <option value="pelajar">Pelajar</option>
                                                                    <option value="mahasiswa">Mahasiswa</option>
                                                                    <option value="irt">Ibu Rumah Tangga</option>
                                                                    <option value="wiraswasta">Wiraswasta</option>
                                                                    <option value="penyedia">Penyedia Jasa(Guru/Dokter/Lawyer/Peneliti/Lainnya)</option>
                                                                    <option value="freelance">Freelance</option>
                                                                    <option value="karyawan">Karyawan Swasta</option>
                                                                    <option value="pns">Pegawai Negeri Sipil</option>
                                                                    <option value="bumn">BUMN</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="status" class="form-label">Status</label>
                                                                <select class="form-select" aria-label="Default select example" name="status">
                                                                    <option selected disabled value="">Status</option>
                                                                    <option value="belum_menikah">Belum Menikah</option>
                                                                    <option value="menikah">Menikah</option>
                                                                    <option value="cerai_mati">Cerai Mati</option>
                                                                    <option value="cerai_hidup">Cerai Hidup</option>
                                                                </select>
                                                            </div>
                                                            <div class="row d-flex">
                                                                <div class="col-sm-12">
                                                                    <button type="button" class="btn btn-primary float-end" id="next-2">Selanjutnya</button>
                                                                </div>
                                                            </div>


                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="basictab3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="text-center">
                                                                    <h2 class="mt-0"><i class="ri-check-double-line"></i></h2>
                                                                    <h3 class="mt-0">Thank you !</h3>
                                                                    <br>
                                                                    <p class="w-75 mb-2 mx-auto fw-normal">Selamat kamu akan bergabung dengan kami! Anda telah membuka pintu menuju perubahan yang positif. Ayo mulai eksplorasi layanan psikolog kami. </p>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->

                                                        <ul class="pager wizard mb-0 list-inline mt-1">
                                                            <form action="/register" method="POST">
                                                                {{-- <input type="text" name="nama" id="input1">
                                                                <input type="text" name="no_hp" id="input2">
                                                                <input type="text" name="password" id="input3">
                                                                <input type="text" name="password_confirmation" id="input4">
                                                                <input type="text" name="tgl_lahir" id="input5">
                                                                <input type="text" name="jenis_kelamin" id="input6">
                                                                <input type="text" name="jenis_kelamin" id="input7">
                                                                <input type="text" name="pendidikan_terakhir" id="input8"> --}}
                                                                {{-- <input type="text" name="data" id="data-simpan"> --}}
                                                                <div id="data-input"></div>
                                                                <div id="data-input2"></div>
                                                                @csrf
                                                                <li class="previous list-inline-item">
                                                                    <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-0"></i>
                                                                        Back to Account</button>
                                                                </li>
                                                                <li class="next list-inline-item float-end">
                                                                    <button type="submit" class="btn btn-info" id="btnsimpan">Submit</button>
                                                                </li>
                                                            </form>
                                                        </ul>
                                                    </div>
                                                </div> <!-- tab-content -->
                                            </div> <!-- end #basicwizard-->
                                            <!-- end col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <!-- end row -->
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

</html>
