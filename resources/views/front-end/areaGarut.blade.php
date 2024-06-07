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
                            <img src="assets/img/team/azky.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=azkyfaisal@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6285210223061"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Azky Faisal Luthfi</a></h3>
                        <span>Asisten BM Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/malik.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=shihabudinmalik12@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6285314934111"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Muhammad Shihabudin Malik</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/rian.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ryanmirojul@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6281223642072"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Rian Mirojullutpiah</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/leo.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=s.mashyuri@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6282295540185"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Mashyuri Saputra Leo</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/ilham.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ilhamprasetyo08031999@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6281394828319"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Muhammad Ilham Prasetyo</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/neneng.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Kamelian035@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6285224450579"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Neneng Kamelia</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/ketty.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=keket.zakaria@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6282111151231"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Ketty Firly</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/kelsa.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=kelsamutiarar987@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6289619257119"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Kelsa Mutiara</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/april.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=aprillanafida7@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/628814077181"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Aprilla Nafida Lutfiany</a></h3>
                        <span>Staff Area Garut</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/nesta.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nestaastia99.foto@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/6283879445015"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Nesta Astia Sari</a></h3>
                        <span>Staff Area Garut</span>
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
