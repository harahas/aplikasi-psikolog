@extends('front-end.main')

@section('container')
@if(session()->has('success'))
<input type="hidden" id="alert" value="{{ session('success') }}">
<script>
    Swal.fire("Good Job!", $("#alert").val(), "success");

</script>
@endif

<section id="in-price" class="in-price-section">
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-12">
                <div class="in-section-title-2 in-title-wrap text-center headline pera-content">
                    <div class="sub-title text-uppercase">
                        Akhlaqul Karimah
                    </div>
                    <h2>Dokumentasi Area Tasikmalaya</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="in-service-4">
    <div class="container">
        {{-- <div class="in-service-slider-area"> --}}
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Tim Tasikmalaya Berphoto Bersama Guru</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/doktasik11.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Kegiatan Psikotes</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/doktasik12.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Kegiatan Penjelasan Hasil Psikotest</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/doktasik3.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Kegiatan Test Psikotest</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/doktasik13.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Kegiatan Penjelasan Hasil</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/doktasik14.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Kegiatan Psikotest</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/doktasik15.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

<section id="in-price" class="in-price-section">
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-12">
                <div class="in-section-title-2 in-title-wrap text-center headline pera-content">
                    <div class="sub-title text-uppercase">
                        Akhlaqul Karimah
                    </div>
                    <h2>Dokumentasi Area Banjar</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="in-service-4">
    <div class="container">
        {{-- <div class="in-service-slider-area"> --}}
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Test Psikotest Anak</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/dokbanjar1.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Penyuluhan Kepada Orang Tua Murid</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/dokbanjar2.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Test Psikotest Anak</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/dokbanjar3.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    </div>
</section>

<section id="in-price" class="in-price-section">
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-12">
                <div class="in-section-title-2 in-title-wrap text-center headline pera-content">
                    <div class="sub-title text-uppercase">
                        Akhlaqul Karimah
                    </div>
                    <h2>Dokumentasi Area Majalengka</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="in-service-4">
    <div class="container">
        {{-- <div class="in-service-slider-area"> --}}
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Photo Bersama Pihak Sekolah</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/dokmajalengka1.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Penyuluhan Dengan Orang Tua Siswa</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/dokmajalengka2.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="in-service-item-4 position-relative">
                    <div class="inner-title headline">
                        <h3><a href="#">Test Psikotest Anak</a></h3>
                    </div>
                    <div class="inner-img">
                        <img src="assets/img/portfolio/dokmajalengka3.jpg" alt="">
                    </div>
                    <div class="inner-icon position-absolute d-flex justify-content-center align-items-center">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    </div>
</section>
@endsection
