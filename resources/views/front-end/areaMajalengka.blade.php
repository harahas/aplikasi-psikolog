@extends('front-end.main')
@section('container')
@if(session()->has('success'))
<input type="hidden" id="alert" value="{{ session('success') }}">
<script>
    Swal.fire("Good Job!", $("#alert").val(), "success");

</script>
@endif
<!-- Start of Team Carousel  section
	============================================= -->
<section id="in-team-carousel" class="in-team-carousel-section">
    <style>
        .in-team-feed-item .inner-img-social .inner-social:before {

            /* background: linear-gradient(130deg, rgb(1, 94, 234) 0%, rgb(0, 192, 250) 100%); */
            background: #062C17;
        }

    </style>
    <div class="container">
        <div class="in-team-carousel-content">
            {{-- <div class="in-team-carousel-slider"> --}}
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/adis.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=bismatronik@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6289619046947"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Adis Rizal L</a></h3>
                        <span>Branch Manager Area Majalengka</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/nandang.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nandangdeikosatria@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6282317941442"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Nandang Suryaman</a></h3>
                        <span>Staff Area Majalengka</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- End of Team Carousel section
	============================================= -->
@endsection
