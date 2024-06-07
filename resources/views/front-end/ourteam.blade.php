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
                            <img src="assets/img/team/ibudewi.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dewiwidiastuti.tsm@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/628112112679"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">R. Dewi Widiastuti, M.Psi</a></h3>
                        <span>Konsultan</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/awang.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=w.igun1278@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6281348956001"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Awang Gunawan, S.Psi</a></h3>
                        <span>Konsultan</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/dedeA.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dedeaminah71@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6285224509922"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Dede Aminah</a></h3>
                        <span>Branch Manager Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/dedeS.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dedeahmadsaepuloh@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6281910227969"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Dede A. Saepulloh</a></h3>
                        <span>Branch Manager Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/ima.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=imanurma523@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6282216015472"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Ima Siti Nurma'sumah</a></h3>
                        <span>Branch Manager Area Ciamis</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/lia.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=lianurlia011278@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6281312570830"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Lia Nurlia</a></h3>
                        <span>Branch Manager Area Banjar</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/renny.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=umirenny70@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6285314939443"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Renny Juliani Sutrisna</a></h3>
                        <span>Branch Manager Area Pangandaran</span>
                    </div>
                </div>
            </div>
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
                            <img src="assets/img/team/vina.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=vinacendekia@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6282128801622"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Vina Cendekia</a></h3>
                        <span>Branch Manager Kota Bandung</span>
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
