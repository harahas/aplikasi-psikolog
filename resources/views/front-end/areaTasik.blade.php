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
    <div class="container">
        <div class="in-team-carousel-content">
            {{-- <div class="in-team-carousel-slider"> --}}
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/dedeA.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dedeaminah71@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/085224509922"><i class="fab fa-whatsapp"></i></a>
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
                            <img src="assets/img/team/gina.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ginamaryadi7@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/0838260836992"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Gina Indriyani Maryadi</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/diana.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=diananadya3.@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/081312516689"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Diana Lestari</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/elin.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=elinherilinaelin84@gamil.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/082267181743"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Elin Herlina</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/hertin.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hertintri@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/085353081229"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Hertin Tri Sulistian</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/lastri.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=lastriagustini36@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/082218848671"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Lastri Nurdinah</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/dhienar.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dhinarrafaeldi48@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/082123818314"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">M Dhienar Riealdi</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/rulli.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rullimeiliawati@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/083826083699"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Rulli Meiliawati Rohmat</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/wida.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Widaningsih 321@gmail.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/082216763272"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Widaningsih</a></h3>
                        <span>Staff Area Tasikmalaya</span>
                    </div>
                </div>
            </div>
            <div class="in-slider-item">
                <div class="in-team-feed-item position-relative">
                    <div class="inner-img-social position-relative">
                        <div class="inner-img position-relative">
                            <img src="assets/img/team/yana.jpg" alt="">
                        </div>
                        <div class="inner-social position-absolute">
                            <div class="social-icon position-relative">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=myana4885@gamil.com"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/082214808592"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="social-btn d-flex align-items-center justify-content-center position-absolute">
                                <i class="fal fa-share-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="inner-text headline">
                        <h3><a href="#">Yana Mulyana</a></h3>
                        <span>Staff Area Tasikmalaya</span>
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
