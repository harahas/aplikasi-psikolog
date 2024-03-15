@extends('front-end.main')
@section('container')
@if(session()->has('success'))
<input type="hidden" id="alert" value="{{ session('success') }}">
<script>
    Swal.fire("Good Job!", $("#alert").val(), "success");

</script>
@endif
<section id="in-slider-2" class="in-slider-section-2">
    <rs-module-wrap id="rev_slider_14_1_wrapper" data-alias="insurance_home_2" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_14_1" style="" data-version="6.5.16">
            <rs-slides>
                <rs-slide style="position: absolute;" data-key="rs-29" data-title="Slide" data-thumb="assets/img/slider/slider1.png" data-in="o:0;" data-out="a:false;">
                    <img src="assets/img/slider/slider1.png" alt="" title="slider2.1" width="1920" height="813" class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
-->
                    <rs-layer id="slider-14-slide-29-layer-0" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,9px,5px;yo:415px,324px,246px,134px;" data-text="w:normal;s:14,12,14,14;l:25,21,20,20;fw:500;" data-padding="r:7,6,5,3;l:7,6,5,3;" data-border="bor:4px,4px,4px,4px;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:5;background:linear-gradient(90deg, #045F4E 0%,rgb(46, 46, 46) 100%);font-family:'DM Sans';text-transform:uppercase;">
                        Konsultasi Keluarga
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-29-layer-1" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,9px,5px;y:m;yo:46px,40px,30px,1px;" data-text="w:normal;s:60,52,39,24;l:70,61,46,28;fw:700;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:450;sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:6;font-family:'DM Sans';">Cinta Terkuat,<br />
                        Terjalin Dalam Keluarga
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-29-layer-2" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,8px,4px;y:m;yo:166px,145px,110px,60px;" data-text="w:normal;s:20,17,14,14;l:30,26,20,18;fw:500;" data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;" data-frame_1="x:-1px,0px,0px,0px;y:-1px,0px,0px,0px;e:power3.out;st:600;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:7;font-family:'DM Sans';">Keluarga Bahagia Dimulai dari Perbincangan
                        Bijak:<br />
                        Temukan Keseimbangan dan Pemahaman bersama Psikolog Profesional
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-29-layer-3" class="rev-btn" data-type="button" data-bsh="c:#461d7d;v:5px,4px,3px,1px;b:20px,17px,12px,7px;" data-rsp_ch="on" data-xy="xo:15px,13px,9px,4px;y:m;yo:257px,224px,170px,114px;" data-text="w:normal;s:16,14,14,14;l:60,52,40,40;fw:500;" data-dim="minh:0px,none,none,none;" data-padding="r:35,31,24,15;l:35,31,24,15;" data-border="bor:5px,5px,5px,5px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:700;sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:linear-gradient(50deg, #fffff 10%,rgb(20, 20, 20) 100%);bor:5px,5px,5px,5px;e:power1.inOut;bri:120%;" style="z-index:8;background:linear-gradient(90deg, #045F4E 0%,rgb(46, 46, 46) 100% 100%);font-family:'DM Sans';" data-url="/service">
                        <a href="/service">Get Started Now</a>
                        <br />
                    </rs-layer>

                    <!--

                        -->
                    <rs-layer id="slider-14-slide-29-layer-4" data-type="image" data-rsp_ch="on" data-xy="xo:417px,364px,276px,170px;yo:128px,112px,85px,52px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:109px,95px,72px,44px;h:109px,95px,72px,44px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1300;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:9;"><img src="assets/img/slider/sh2.3.png" alt="" class="tp-rs-img" width="109" height="109" data-no-retina>
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-29-layer-5" data-type="image" data-rsp_ch="on" data-xy="xo:900px,787px,597px,368px;yo:675px,590px,448px,276px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:191px,167px,126px,77px;h:123px,107px,81px,49px;" data-frame_0="y:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:800;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:10;"><img src="assets/img/slider/sh2.2.png" alt="" class="tp-rs-img" width="191" height="123" data-no-retina>
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-29-layer-6" data-type="image" data-rsp_ch="on" data-xy="xo:66px,57px,43px,26px;yo:767px,671px,509px,314px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:68px,59px,44px,27px;h:137px,119px,90px,55px;" data-basealign="slide" data-frame_0="y:100%;" data-frame_0_mask="u:t;" data-frame_1="st:1100;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:11;"><img src="assets/img/slider/sh2.1.png" alt="" class="tp-rs-img" width="68" height="137" data-no-retina>
                    </rs-layer>
                    <!--
                        -->
                </rs-slide>
                <rs-slide style="position: absolute;" data-key="rs-30" data-title="Slide" data-thumb="assets/img/slider/slider3.png" data-in="o:0;" data-out="a:false;">
                    <img src="assets/img/slider/slider3.png" alt="" title="slider2.1" width="1920" height="813" class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
-->
                    <rs-layer id="slider-14-slide-30-layer-0" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,9px,5px;yo:415px,324px,246px,134px;" data-text="w:normal;s:14,12,14,14;l:25,21,20,20;fw:500;" data-padding="r:7,6,5,3;l:7,6,5,3;" data-border="bor:4px,4px,4px,4px;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:5;background:linear-gradient(90deg, #045F4E 0%,rgb(46, 46, 46) 100%);font-family:'DM Sans';text-transform:uppercase;">
                        Konsultasi Pasangan
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-30-layer-1" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,9px,5px;y:m;yo:46px,40px,30px,1px;" data-text="w:normal;s:60,52,39,24;l:70,61,46,28;fw:700;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:450;sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:6;font-family:'DM Sans';">Mari Melangkah
                        Bersama,<br />
                        Menghadirkan Ketenangan:
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-30-layer-2" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,8px,4px;y:m;yo:166px,145px,110px,60px;" data-text="w:normal;s:20,17,14,14;l:30,26,20,18;fw:500;" data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;" data-frame_1="x:-1px,0px,0px,0px;y:-1px,0px,0px,0px;e:power3.out;st:600;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:7;font-family:'DM Sans';">Ciptakan Hubungan yang kuat dengan Konsultasi
                        Pasangan bersama Kami.<br />
                        Konsultasi Pasangan, Jembatan Menuju Hubungan yang Harmonis.
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-30-layer-3" class="rev-btn" data-type="button" data-bsh="c:#461d7d;v:5px,4px,3px,1px;b:20px,17px,12px,7px;" data-rsp_ch="on" data-xy="xo:15px,13px,9px,4px;y:m;yo:257px,224px,170px,114px;" data-text="w:normal;s:16,14,14,14;l:60,52,40,40;fw:500;" data-dim="minh:0px,none,none,none;" data-padding="r:35,31,24,15;l:35,31,24,15;" data-border="bor:5px,5px,5px,5px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:700;sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:linear-gradient(50deg, #fffff 10%,rgb(20, 20, 20) 100%);bor:5px,5px,5px,5px;e:power1.inOut;bri:120%;" style="z-index:8;background:linear-gradient(90deg, #045F4E 0%,rgb(46, 46, 46) 100% 100%);font-family:'DM Sans';">
                        <a href="/service">Get Started Now</a>
                        <br />

                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-30-layer-4" data-type="image" data-rsp_ch="on" data-xy="xo:417px,364px,276px,170px;yo:128px,112px,85px,52px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:109px,95px,72px,44px;h:109px,95px,72px,44px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1300;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:9;"><img src="assets/img/slider/sh2.3.png" alt="" class="tp-rs-img" width="109" height="109" data-no-retina>
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-30-layer-5" data-type="image" data-rsp_ch="on" data-xy="xo:900px,787px,597px,368px;yo:675px,590px,448px,276px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:191px,167px,126px,77px;h:123px,107px,81px,49px;" data-frame_0="y:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:800;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:10;"><img src="assets/img/slider/sh2.2.png" alt="" class="tp-rs-img" width="191" height="123" data-no-retina>
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-30-layer-6" data-type="image" data-rsp_ch="on" data-xy="xo:66px,57px,43px,26px;yo:767px,671px,509px,314px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:68px,59px,44px,27px;h:137px,119px,90px,55px;" data-basealign="slide" data-frame_0="y:100%;" data-frame_0_mask="u:t;" data-frame_1="st:1100;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:11;"><img src="assets/img/slider/sh2.1.png" alt="" class="tp-rs-img" width="68" height="137" data-no-retina>
                    </rs-layer>
                    <!--
                        -->
                </rs-slide>
                <rs-slide style="position: absolute;" data-key="rs-31" data-title="Slide" data-thumb="assets/img/slider/slider5.png" data-in="o:0;" data-out="a:false;">
                    <img src="assets/img/slider/slider5.png" alt="" title="slider2.1" width="1920" height="813" class="rev-slidebg tp-rs-img" data-no-retina>
                    <!--
-->
                    <rs-layer id="slider-14-slide-31-layer-0" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,9px,5px;yo:415px,324px,246px,134px;" data-text="w:normal;s:14,12,14,14;l:25,21,20,20;fw:500;" data-padding="r:7,6,5,3;l:7,6,5,3;" data-border="bor:4px,4px,4px,4px;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:5;background:linear-gradient(90deg, #045F4E 0%,rgb(46, 46, 46) 100% 100%);font-family:'DM Sans';text-transform:uppercase;">
                        Konsultasi Individu
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-31-layer-1" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,9px,5px;y:m;yo:46px,40px,30px,1px;" data-text="w:normal;s:60,52,39,24;l:70,61,46,28;fw:700;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:450;sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:6;font-family:'DM Sans';">Healing Begins Here :
                        <br />
                        Temui Psikolog, Teman Pemulihanmu!
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-31-layer-2" data-type="text" data-rsp_ch="on" data-xy="xo:15px,13px,8px,4px;y:m;yo:166px,145px,110px,60px;" data-text="w:normal;s:20,17,14,14;l:30,26,20,18;fw:500;" data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;" data-frame_1="x:-1px,0px,0px,0px;y:-1px,0px,0px,0px;e:power3.out;st:600;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:7;font-family:'DM Sans';">Jangan ragu untuk berbagi ketika merasa tidak
                        baik-baik saja, kami disini untuk mendampingi anda,
                        <br />
                        bersama mari berproses bersama akhlaqul karimah
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-31-layer-3" class="rev-btn" data-type="button" data-bsh="c:#461d7d;v:5px,4px,3px,1px;b:20px,17px,12px,7px;" data-rsp_ch="on" data-xy="xo:15px,13px,9px,4px;y:m;yo:257px,224px,170px,114px;" data-text="w:normal;s:16,14,14,14;l:60,52,40,40;fw:500;" data-dim="minh:0px,none,none,none;" data-padding="r:35,31,24,15;l:35,31,24,15;" data-border="bor:5px,5px,5px,5px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:700;sp:2000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:linear-gradient(50deg, #fffff 10%,rgb(20, 20, 20) 100%);bor:5px,5px,5px,5px;e:power1.inOut;bri:120%;" style="z-index:8;background:linear-gradient(90deg, #045F4E 0%,rgb(46, 46, 46) 100% 100%);font-family:'DM Sans';">
                        <a href="/service">Get Started Now</a>
                        <br>

                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-31-layer-4" data-type="image" data-rsp_ch="on" data-xy="xo:417px,364px,276px,170px;yo:128px,112px,85px,52px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:109px,95px,72px,44px;h:109px,95px,72px,44px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1300;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:9;"><img src="assets/img/slider/sh2.3.png" alt="" class="tp-rs-img" width="109" height="109" data-no-retina>
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-31-layer-5" data-type="image" data-rsp_ch="on" data-xy="xo:900px,787px,597px,368px;yo:675px,590px,448px,276px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:191px,167px,126px,77px;h:123px,107px,81px,49px;" data-frame_0="y:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:800;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:10;"><img src="assets/img/slider/sh2.2.png" alt="" class="tp-rs-img" width="191" height="123" data-no-retina>
                    </rs-layer>
                    <!--

                        -->
                    <rs-layer id="slider-14-slide-31-layer-6" data-type="image" data-rsp_ch="on" data-xy="xo:66px,57px,43px,26px;yo:767px,671px,509px,314px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:68px,59px,44px,27px;h:137px,119px,90px,55px;" data-basealign="slide" data-frame_0="y:100%;" data-frame_0_mask="u:t;" data-frame_1="st:1100;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:11;"><img src="assets/img/slider/sh2.1.png" alt="" class="tp-rs-img" width="68" height="137" data-no-retina>
                    </rs-layer>
                    <!--
                        -->
                </rs-slide>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
</section>
<!-- End of Slider section
============================================= -->

<!-- Start of Service section
============================================= -->
<section id="in-service-2" class="in-service-section-2 position-relative">
    <span class="in-service-bg position-absolute"><img src="assets/img/bg/ser-bg1.png" alt=""></span>
    <div class="container">
        <div class="in-service-top-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="in-service-title-text wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                <div class="in-section-title-2 headline">
                    <div class="sub-title text-uppercase">
                        Apa saja yang kami berikan?
                    </div>
                    <h2>Kami Memberikan Pengalaman Psikologis Terbaik untuk Anda
                    </h2>
                </div>
                <div class="in-service-title-desc">
                    Di sini, kami bukan hanya menyediakan layanan konseling, tapi juga membuka pintu bagi Anda untuk
                    menemukan keindahan dalam setiap langkah pertumbuhan pribadi, keharmonisan pasangan, dan
                    kekuatan dalam keluarga.
                </div>
            </div>
            <div class="in-service-title-img wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                <img src="assets/img/about/bn1.png" alt="">
            </div>
        </div>
        <!-- <div class="in-service-content-2 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
            <div class="in-service-slider">
                <div class="in-slider-item">
                    <div class="in-service-item-2 position-relative">
                        <span class="icon-bg position-absolute"><i class="flaticon-life-insurance-1"></i></span>
                        <div class="inner-text headline pera-content">
                            <h3><a href="service-single.html">Konsultasi Keluarga</a></h3>
                            <p>Konseling keluarga adalah bentuk terapi yang membantu keluarga mengatasi konflik,
                                meningkatkan komunikasi, dan memperkuat hubungan antaranggota keluarga. Tujuannya
                                adalah menciptakan lingkungan keluarga yang sehat dan harmonis.
                            </p>
                        </div>
                        <div class="inner-icon-more-btn d-flex align-items-center justify-content-between">
                            <div class="inner-icon">
                                <i class="flaticon-life-insurance-1"></i>
                            </div>
                            <div class="more-btn d-flex align-items-center justify-content-center">
                                <a href="service-single.html"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-service-item-2 position-relative">
                        <span class="icon-bg position-absolute"><i class="flaticon-healthcare"></i></span>
                        <div class="inner-text headline pera-content">
                            <h3><a href="service-single.html">Health Insurence</a></h3>
                            <p>Lorem ipsum dolor sit amete
                                elit sed do eius moded.</p>
                        </div>
                        <div class="inner-icon-more-btn d-flex align-items-center justify-content-between">
                            <div class="inner-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="more-btn d-flex align-items-center justify-content-center">
                                <a href="service-single.html"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-service-item-2 position-relative">
                        <span class="icon-bg position-absolute"><i class="flaticon-healthcare"></i></span>
                        <div class="inner-text headline pera-content">
                            <h3><a href="service-single.html">Home Insurence</a></h3>
                            <p>Lorem ipsum dolor sit amete
                                elit sed do eius moded.</p>
                        </div>
                        <div class="inner-icon-more-btn d-flex align-items-center justify-content-between">
                            <div class="inner-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="more-btn d-flex align-items-center justify-content-center">
                                <a href="service-single.html"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->
        <div class="in-service-more-btn text-center pera-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
            <p>Konsultan Keluarga Akhlaqul Karimah Untuk Keluarga Anda <a href="service.html">Tunggu Apa Lagi?</a>
            </p>
        </div>
    </div>
</section>
<br>
<!-- End of service section
============================================= -->

<!-- Start of About section
============================================= -->
<section id="in-about-2" class="in-about-section-2 position-relative">
    <div class="in-about-bg position-absolute">
        <!-- <img src="assets/img/bg/ab-bg.jpg" alt=""> -->
    </div>
    <div class="container">
        <div class="in-about-content-4">
            <div class="row">
                <div class="col-lg-3  wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <div class="in-section-title-2 headline  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="sub-title text-uppercase">
                            Psikolog
                        </div>
                    </div>
                    <div class="in-about-img-2" data-tilt data-tilt-max="5">
                        <img src="assets/img/about/ibudewi.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in-about-text-wrapper-8">
                        <div class="in-about-text-area-1 wow fadeInUp text-justify" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <div class="in-section-title-2 headline  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                                <h2>Dewi Widiastuti, M.Psi</h2>
                            </div>
                            <p>R. Dewi Widiastuti, M.Psi adalah seorang psikolog berpengalaman yang mengkhususkan
                                diri
                                sebagai konsultan keluarga dan terapis anak berkebutuhan khusus. Beliau juga
                                memiliki
                                peran sebagai Konsultan Pendidikan Sekolah Inklusi Bukit Bintang dan Konsultan
                                Pendidikan. Memiliki wawasan dan panduan praktis kepada orangtua dalam mendidik
                                anak.
                                Dengan latar belakang profesional dan pengalaman yang luas, beliau berkomitmen untuk
                                memberikan dukungan psikologis dan pendidikan yang holistik kepada individu dan
                                keluarga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="in-about-counter-wrapper-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                        <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <br>
                                <div class="in-about-counter-item-1 position-relative headline pera-content">
                                    <p>Berpengalaman Selama: </p>
                                    <h3>
                                        <h3>±</h3>
                                        <h3><span class="counter">15</span></h3>
                                        <h3>Tahun</h3>
                                    </h3>
                                    <br>
                                    <div class="in-btn-2 position-relative  wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
                                        <a href="/service">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of About section
============================================= -->

<!-- Start of Portfolio section
============================================= -->

<section id="in-portfolio-2" class="in-portfolio-section-2 position-relative">
    <div class="container">
        <div class="in-portfolio-top-content-2 d-flex flex-wrap align-items-center justify-content-between">
            <div class="in-section-title-2 headline  wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                <div class="sub-title text-uppercase">
                    Pelayanan
                </div>
                <h2 class="text-light">Menyajikan beragam pelayanan untuk anda</h2>
            </div>
            <div class="in-portfolio-title-text  wow fadeInUp text-light" data-wow-delay="400ms" data-wow-duration="1000ms">
                Dengan bangga, Akhlaqul Karimah menyajikan beragam pelayanan yang tak hanya memenuhi kebutuhan,
                tetapi juga memberikan pengalaman istimewa untuk meningkatkan kualitas hidup Anda.
            </div>
        </div>
        <div class="in-portfolio-content-2">
            <div class="in-portfolio-slider-2">
                <div class="in-slider-item">
                    <div class="in-portfolio-item position-relative">
                        <div class="inner-img">
                            <img src="assets/img/portfolio/1.png" alt="">
                        </div>
                        <div class="inner-text headline position-absolute">
                            <span class="port-category"><a>Layanan Konseling</a></span>
                            <h3><a>Melayani Konseling Individu, Pasangan dan
                                    Keluarga</a></h3>
                            <div class="more-btn position-absolute">
                                <a class="d-flex justify-content-center align-items-center" href="portfolio-single.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-portfolio-item position-relative">
                        <div class="inner-img">
                            <img src="assets/img/portfolio/2.png" alt="">
                        </div>
                        <div class="inner-text headline position-absolute">
                            <span class="port-category"><a>Parenting</a></span>
                            <h3><a>Melayani Seminar Parenting</a></h3>
                            <div class="more-btn position-absolute">
                                <a class="d-flex justify-content-center align-items-center" href="portfolio-single.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-portfolio-item position-relative">
                        <div class="inner-img">
                            <img src="assets/img/portfolio/3.png" alt="">
                        </div>
                        <div class="inner-text headline position-absolute">
                            <span class="port-category"><a>Psikoedukasi</a></span>
                            <h3><a>Melayani Psikoedukasi ke berbagai sekolah</a></h3>
                            <div class="more-btn position-absolute">
                                <a class="d-flex justify-content-center align-items-center" href="portfolio-single.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-portfolio-item position-relative">
                        <div class="inner-img">
                            <img src="assets/img/portfolio/4.png" alt="">
                        </div>
                        <div class="inner-text headline position-absolute">
                            <span class="port-category"><a>Psikotest</a></span>
                            <h3><a>Melayani Berbagai Macam Psikotes Untuk Sekolah,
                                    Lembaga dan Perusahaan</a></h3>
                            <div class="more-btn position-absolute">
                                <a class="d-flex justify-content-center align-items-center" href="portfolio-single.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-portfolio-item position-relative">
                        <div class="inner-img">
                            <img src="assets/img/portfolio/5.png" alt="">
                        </div>
                        <div class="inner-text headline position-absolute">
                            <span class="port-category"><a>Terapi Anak Berkebutuhan Khusus</a></span>
                            <h3><a>Terapi Untuk Anak Bekebutuhan Khusus di Sekolah
                                    Inklusi
                                    Bukit Bintang</a></h3>
                            <div class="more-btn position-absolute">
                                <a class="d-flex justify-content-center align-items-center" href="portfolio-single.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-portfolio-item position-relative">
                        <div class="inner-img">
                            <img src="assets/img/portfolio/6.png" alt="">
                        </div>
                        <div class="inner-text headline position-absolute">
                            <span class="port-category"><a>Mahagoni Outbond and Camp
                                    Tasikmalaya </a></span>
                            <h3><a>Outbond alam yang menyenangkan</a></h3>
                            <div class="more-btn position-absolute">
                                <a class="d-flex justify-content-center align-items-center" href="portfolio-single.html"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Portfolio section
============================================= -->
<!-- Start of Benefit section
============================================= -->
<section id="in-benefit" class="in-benefit-section position-relative">
    <span class="shape-side position-absolute"><img src="assets/img/bg/shape-bg.png" alt=""></span>
    <div class="container">
        <div class="in-benefit-content">
            <div class="row">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <div class="in-benefit-img">
                        <img src="assets/img/about/7.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="in-benefit-text">
                        <div class="in-section-title-2 headline wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="sub-title text-uppercase">
                                Mengapa Harus Akhlaqul Karimah?
                            </div>
                            <h2></h2>
                        </div>
                        <div class="in-about-text-area-1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                            Dukungan yang Peduli, Solusi yang Terarah - Pengalaman Psikologis yang Membawa
                            Perubahan Positif.
                        </div>
                        <div class="in-btn-2 position-relative wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                            <a href="contact.html">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="in-benefit-feature">
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                    <div class="in-benefit-feature-item position-relative">
                        <span class="serial position-absolute">01</span>
                        <div class="inner-icon">
                            <i class="flaticon-privacy-policy"></i>
                        </div>
                        <div class="inner-text headline">
                            <h3>Pendekatan yang bersifat Holistik</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                    <div class="in-benefit-feature-item position-relative">
                        <span class="serial position-absolute">02</span>
                        <div class="inner-icon">
                            <i class="flaticon-insurance-1"></i>
                        </div>
                        <div class="inner-text headline">
                            <h3>Profesionalisme dan Pengalaman</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
                    <div class="in-benefit-feature-item position-relative">
                        <span class="serial position-absolute">03</span>
                        <div class="inner-icon">
                            <i class="flaticon-family-insurance"></i>
                        </div>
                        <div class="inner-text headline">
                            <h3>Komitmen pada Kerahasiaan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                    <div class="in-benefit-feature-item position-relative">
                        <span class="serial position-absolute">04</span>
                        <div class="inner-icon">
                            <i class="flaticon-family"></i>
                        </div>
                        <div class="inner-text headline">
                            <h3>Melayani dengan Sepenuh Hati</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Benefit section
============================================= -->


<!-- Start of CTA section
============================================= -->
<!-- End of CTA section
============================================= -->

<!-- Start of Why Choose section
============================================= -->
<!-- <section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
    <div class="container">
        <div class="in-portfolio-top-content-2 d-flex flex-wrap align-items-center justify-content-between">
            <div class="in-section-title-2 headline wow fadeInLeft" data-wow-delay="200ms"
                data-wow-duration="1000ms">
                <div class="sub-title text-uppercase">
                    Why Choose
                </div>
                <h2>Discover Our Insurence
                    Restoration Works</h2>
            </div>
            <div class="in-portfolio-title-text wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1000ms">
                On the other hand we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure of the moment.
            </div>
        </div>
        <div class="in-why-choose-content-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="in-why-choose-img-text">
                        <div class="in-why-choose-img-area">
                            <div class="row">
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration="1000ms">
                                    <div class="in-why-choose-img">
                                        <img src="assets/img/about/wc2.jpg" alt="">
                                    </div>
                                    <div class="in-why-choose-text-wrap">
                                        <div class="in-why-choose-text d-flex align-items-center">
                                            <div class="inner-icon">
                                                <img src="assets/img/about/wc-icon.png" alt="">
                                            </div>
                                            <div class="inner-text">
                                                Strategy & Planning
                                            </div>
                                        </div>
                                        <div class="in-why-choose-text d-flex align-items-center">
                                            <div class="inner-icon">
                                                <img src="assets/img/about/wc-icon.png" alt="">
                                            </div>
                                            <div class="inner-text">
                                                Audit & Evaluation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="500ms"
                                    data-wow-duration="1000ms">
                                    <div class="in-why-choose-img">
                                        <img src="assets/img/about/wc3.jpg" alt="">
                                    </div>
                                    <div class="in-why-choose-text-wrap">
                                        <div class="in-why-choose-text d-flex align-items-center">
                                            <div class="inner-icon">
                                                <img src="assets/img/about/wc-icon.png" alt="">
                                            </div>
                                            <div class="inner-text">
                                                Finance Services
                                            </div>
                                        </div>
                                        <div class="in-why-choose-text d-flex align-items-center">
                                            <div class="inner-icon">
                                                <img src="assets/img/about/wc-icon.png" alt="">
                                            </div>
                                            <div class="inner-text">
                                                Consumer Markets
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="in-btn-2 position-relative wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1000ms">
                            <a href="contact.html">Get Started Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in-why-choose-faq">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingOne2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne2" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Ensuring Operational Safety?
                                    </button>
                                </h2>
                                <div id="collapseOne2" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        On the other hand we denounce with righteous indignat and dislike men who
                                        are so beguiled and demoralized by the charms of the moment so by desire.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingTwo2">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                        aria-expanded="false" aria-controls="collapseTwo2">
                                        Financial Advisers & Intermediaries?
                                    </button>
                                </h2>
                                <div id="collapseTwo2" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        On the other hand we denounce with righteous indignat and dislike men who
                                        are so beguiled and demoralized by the charms of the moment so by desire.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingThree2">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                        aria-expanded="false" aria-controls="collapseThree2">
                                        Financial Advisers & Intermediaries?
                                    </button>
                                </h2>
                                <div id="collapseThree2" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        On the other hand we denounce with righteous indignat and dislike men who
                                        are so beguiled and demoralized by the charms of the moment so by desire.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="800ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Financial Advisers & Intermediaries?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        On the other hand we denounce with righteous indignat and dislike men who
                                        are so beguiled and demoralized by the charms of the moment so by desire.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End of  Why Choose section
============================================= -->

<!-- Start of Testimonial Team section
============================================= -->
{{-- <section id="in-testimonial-team" class="in-testimonial-team-section">
    <div class="container">
        <div class="in-testimonial-team-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="in-testimonial-2">
                        <div class="in-section-title-2 headline">
                            <div class="sub-title text-uppercase">
                                Testimonials
                            </div>
                            <h2>Ulasan Dari Klien Kami</h2>
                        </div>
                        <div class="in-testimonial-slider-area-2">
                            <div class="in-testimonial-slider-2">
                                <div class="in-testimonial-item-2 position-relative">
                                    <div class="inner-text">
                                        Kami sangat bersyukur telah mendapatkan bimbingan dari konsultan keluarga Akhlaqul Karimah. Mereka membantu kami melewati masa-masa sulit dalam pernikahan kami dan memberikan solusi yang sesuai dengan ajaran agama. Keluarga kami sekarang lebih bahagia dan tentram
                                    </div>
                                    <div class="inner-author-quote d-flex justify-content-between align-items-center">
                                        <div class="inner-author d-flex align-items-center">
                                            <div class="inner-img">
                                                <img src="assets/img/about/tst1.png" alt="">
                                            </div>
                                            <div class="author-meta headline">
                                                <h3>Euis Ignes SH</h3>
                                                <span>Karyawan Swasta</span>
                                            </div>
                                        </div>
                                        <div class="inner-quote d-flex align-items-center justify-content-center">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-testimonial-item-2 position-relative">
                                    <div class="inner-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida. Risuscommodo viverra maecenas accumsan
                                    </div>
                                    <div class="inner-author-quote d-flex justify-content-between align-items-center">
                                        <div class="inner-author d-flex align-items-center">
                                            <div class="inner-img">
                                                <img src="assets/img/about/tst1.png" alt="">
                                            </div>
                                            <div class="author-meta headline">
                                                <h3>Arnold Logan</h3>
                                                <span>Managing Diretor</span>
                                            </div>
                                        </div>
                                        <div class="inner-quote d-flex align-items-center justify-content-center">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-testimonial-item-2 position-relative">
                                    <div class="inner-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida. Risuscommodo viverra maecenas accumsan
                                    </div>
                                    <div class="inner-author-quote d-flex justify-content-between align-items-center">
                                        <div class="inner-author d-flex align-items-center">
                                            <div class="inner-img">
                                                <img src="assets/img/about/tst2.png" alt="">
                                            </div>
                                            <div class="author-meta headline">
                                                <h3>Arnold Logan</h3>
                                                <span>Managing Diretor</span>
                                            </div>
                                        </div>
                                        <div class="inner-quote d-flex align-items-center justify-content-center">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_nav text-center position-relative">
                                <button type="button" class="testi_left_arrow text-uppercase"><i class="far fa-long-arrow-left"></i></button>
                                <button type="button" class="testi_right_arrow text-uppercase"><i class="far fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in-team-area">
                        <div class="in-section-title-2 headline">
                            <div class="sub-title text-uppercase">
                                Team Member
                            </div>
                            <h2>Meet Our Expert</h2>
                        </div>
                        <div class="in-team-slider-area">
                            <div class="in-team-slider">
                                <div class="in-team-item position-relative">
                                    <div class="in-team-img-text d-flex align-items-center">
                                        <div class="in-team-img">
                                            <img src="assets/img/team/tm1.png" alt="">
                                        </div>
                                        <div class="in-team-text headline">
                                            <h3><a href="team-single.html">John Doe</a></h3>
                                            <span>Managing Diretor</span>
                                            <div class="in-team-social d-flex">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-team-item position-relative">
                                    <div class="in-team-img-text d-flex align-items-center">
                                        <div class="in-team-img">
                                            <img src="assets/img/team/tm2.png" alt="">
                                        </div>
                                        <div class="in-team-text headline">
                                            <h3><a href="team-single.html">John Doe</a></h3>
                                            <span>Managing Diretor</span>
                                            <div class="in-team-social d-flex">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-team-item position-relative">
                                    <div class="in-team-img-text d-flex align-items-center">
                                        <div class="in-team-img">
                                            <img src="assets/img/team/tm3.png" alt="">
                                        </div>
                                        <div class="in-team-text headline">
                                            <h3><a href="team-single.html">John Doe</a></h3>
                                            <span>Managing Diretor</span>
                                            <div class="in-team-social d-flex">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_nav d-flex justify-content-end position-relative">
                                <button type="button" class="team_left_arrow text-uppercase"><i class="far fa-long-arrow-left"></i></button>
                                <button type="button" class="team_right_arrow text-uppercase"><i class="far fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End of Testimonial Team section
============================================= -->

<!-- Start of Blog section
============================================= -->
<!-- <section id="in-blog" class="in-blog-section" data-background="assets/img/bg/blg-bg.jpg">
    <div class="container">
        <div class="in-portfolio-top-content-2 flex-wrap d-flex justify-content-between align-items-center">
            <div class="in-section-title-2 headline wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="sub-title position-relative text-uppercase">
                    latest News
                </div>
                <h2>Our Latest News Post
                    & Articles </h2>
            </div>
            <div class="in-portfolio-title-text wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1000ms">
                On the other hand we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized bite the finan charms of pleasure of blinded.
            </div>
        </div>
        <div class="in-blog-content">
            <div class="in-blog-slide">
                <div class="in-slider-item">
                    <div class="in-blog-item">
                        <div class="blog-title headline">
                            <h3><a href="blog-single.html">Winged Moved Star Creature
                                    Mark Seed Night.</a></h3>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blg1.jpg" alt="">
                        </div>
                        <div class="blog-meta-text">
                            <div class="in-meta">
                                <a href="#"><i class="far fa-calendar-check"></i> 11 Jun 2022</a>
                                <a href="#"><i class="far fa-file-alt"></i> Business</a>
                            </div>
                            <div class="in-blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedincididunt ut labore et
                                dolore magna aliqua
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-blog-item">
                        <div class="blog-title headline">
                            <h3><a href="blog-single.html">Winged Moved Star Creature
                                    Mark Seed Night.</a></h3>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blg2.jpg" alt="">
                        </div>
                        <div class="blog-meta-text">
                            <div class="in-meta">
                                <a href="#"><i class="far fa-calendar-check"></i> 11 Jun 2022</a>
                                <a href="#"><i class="far fa-file-alt"></i> Business</a>
                            </div>
                            <div class="in-blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedincididunt ut labore et
                                dolore magna aliqua
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-blog-item">
                        <div class="blog-title headline">
                            <h3><a href="blog-single.html">Winged Moved Star Creature
                                    Mark Seed Night.</a></h3>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blg3.jpg" alt="">
                        </div>
                        <div class="blog-meta-text">
                            <div class="in-meta">
                                <a href="#"><i class="far fa-calendar-check"></i> 11 Jun 2022</a>
                                <a href="#"><i class="far fa-file-alt"></i> Business</a>
                            </div>
                            <div class="in-blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedincididunt ut labore et
                                dolore magna aliqua
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-blog-item">
                        <div class="blog-title headline">
                            <h3><a href="blog-single.html">Winged Moved Star Creature
                                    Mark Seed Night.</a></h3>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blg2.jpg" alt="">
                        </div>
                        <div class="blog-meta-text">
                            <div class="in-meta">
                                <a href="#"><i class="far fa-calendar-check"></i> 11 Jun 2022</a>
                                <a href="#"><i class="far fa-file-alt"></i> Business</a>
                            </div>
                            <div class="in-blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedincididunt ut labore et
                                dolore magna aliqua
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-slider-item">
                    <div class="in-blog-item">
                        <div class="blog-title headline">
                            <h3><a href="blog-single.html">Winged Moved Star Creature
                                    Mark Seed Night.</a></h3>
                        </div>
                        <div class="blog-img">
                            <img src="assets/img/blog/blg3.jpg" alt="">
                        </div>
                        <div class="blog-meta-text">
                            <div class="in-meta">
                                <a href="#"><i class="far fa-calendar-check"></i> 11 Jun 2022</a>
                                <a href="#"><i class="far fa-file-alt"></i> Business</a>
                            </div>
                            <div class="in-blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedincididunt ut labore et
                                dolore magna aliqua
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End of Blog section
============================================= -->

<!-- Start of Sponsor section
============================================= -->
{{-- <section id="in-sponsor" class="in-sponsor-section-2">
    <div class="container">
        <div class="in-sponsor-slider">
            <div class="in-sponsor-item">
                <div class="inner-img">
                    <img src="assets/img/sponsor/spn1.png" alt="">
                </div>
            </div>
            <div class="in-sponsor-item">
                <div class="inner-img">
                    <img src="assets/img/sponsor/spn2.png" alt="">
                </div>
            </div>
            <div class="in-sponsor-item">
                <div class="inner-img">
                    <img src="assets/img/sponsor/spn3.png" alt="">
                </div>
            </div>
            <div class="in-sponsor-item">
                <div class="inner-img">
                    <img src="assets/img/sponsor/spn4.png" alt="">
                </div>
            </div>
            <div class="in-sponsor-item">
                <div class="inner-img">
                    <img src="assets/img/sponsor/spn5.png" alt="">
                </div>
            </div>
            <div class="in-sponsor-item">
                <div class="inner-img">
                    <img src="assets/img/sponsor/spn1.png" alt="">
                </div>
            </div>
            <div class="in-sponsor-item">
                <div class="inner-img">
                    <img src="assets/img/sponsor/spn2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
