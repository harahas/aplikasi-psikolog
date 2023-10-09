@extends('front-end.template')
@section('template')

    <!-- Start of Banner section
	============================================= -->
    <section id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 d-flex flex-column justify-content-center " style="margin-top:45vh;">
                    <h3>Lembaga Psikolog</h3>
                    <h1 class="text-dark fw-bold">Akhlaqul Karimah</h1>
                    <h1>Konsultan Keluarga</h1>
                    <h3>Keluarga Berdaya, Indonesia Berjaya</h3>
                    <a href="/daftar_pelayanan" class="btn btn-success text-white mt-5" style="width:30vh;padding:10px 20px">Jadwalkan Konsultasi</a>
                </div>

                <div class="col-sm-6 d-flex flex-column justify-content-center " style="margin-top:30vh;">
                    <img src="/assets/img/about/keluarga.jpg" alt="" width="600vh">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            <div class="row" style="margin-top:30px">
                <div class="col-sm-6 d-flex flex-column justify-content-center " style="margin-top:20vh;">
                    <img src="/assets/img/about/keluarga.jpg" alt="" width="550vh">
                </div>
                <div class="col-sm-6 d-flex flex-column justify-content-center " style="margin-top:20vh;">
                    <h3>Profile Psikolog</h3>
                    <h1 class="text-dark fw-bold">Dewi Widiastuti M.Psi</h1>
                    <a href="/daftar_pelayanan" class="btn btn-primary text-white mt-5" style="width:30vh;padding:10px 20px">Profile Lengkap</a>
                </div>
            </div>
        </div>
    </section>

  @endsection