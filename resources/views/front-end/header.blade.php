<header id="in-header" class="in-header-section header-style-two">
    <div class="in-header-content-wrapper">

    </div>
    <div class="in-header-main-menu-wrapper d-flex justify-content-between align-items-center">
        <div class="m-brand-logo ml-auto">
            <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
        </div>
        <div class="in-header-main-menu-cta-btn d-flex justify-content-between align-items-center">
            <nav class="in-main-navigation-area clearfix ul-li">
                <ul id="main-nav" class="nav navbar-nav clearfix">
                    <li class="dropdown in-megamenu">
                        <a href="/">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Pelayanan</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a href="/service">Konseling </a></li>
                            <li><a href="/serviceLain">Pelayanan Lain</a></li>
                        </ul>
                    </li>
                    @if (session('klien'))

                    <li class="dropdown">
                        <a href="/profilUser">Menu Saya</a>
                    </li>
                    @endif
                    <li class="dropdown">
                        <a href="/tentangKami">Tentang Kami</a>

                    </li>


                    @if (session('klien'))
                    <li class="dropdown" style="float: right">
                        <a href="#">Hai, {{ session('klien')->nama }}</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a href="#" id="ubah-sandi-klien">Ubah Kata Sandi</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </nav>
            <div class="header-cta-btn ">
                <div class="in-header-search-cta-btn d-flex align-items-center">

                    <div class="in-header-cta-btn">
                        @if (session('klien'))
                        <button class="btn btn-dark" id="logoutKlien">Logout</button>
                        @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-login">Masuk</a>
                        @endif
                    </div>
                </div>
                {{-- modal login --}}

                {{-- <button class="" id="">Masuk</button> --}}
            </div>
        </div>
        <div class="header-cta-info d-flex align-items-center">
            <!-- <div class="inner-icon d-flex justify-content-center align-items-center"> -->
            <!-- <i class="fas fa-phone-alt"></i> -->
        </div>
        <div class="inner-text headline">
            <!-- <span>Need any help?</span>
                    <h4>Call: <a href="#">(210) 123-451</a></h4> -->
        </div>
    </div>
    </div>
    {{-- INI UNTUK MOBILE MI JANGAN SALAH LAGI YA!!!! --}}
    <div class="mobile_menu position-relative">
        <div class="mobile_menu_button open_mobile_menu">
            <i class="fal fa-bars text-dark"></i>
        </div>
        <div class="mobile_menu_wrap">
            <div class="mobile_menu_overlay open_mobile_menu"></div>
            <div class="mobile_menu_content">
                <div class="mobile_menu_close open_mobile_menu">
                    <i class="fal fa-times"></i>
                </div>

                <div class="m-brand-logo">
                    <a href="!#"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="in-m-search">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search..">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <nav class="mobile-main-navigation  clearfix ul-li">
                    <ul id="m-main-nav" class="nav navbar-nav clearfix">
                        <li class=" in-megamenu">
                            <a href="/">Beranda</a>
                        </li>
                        @if (session('klien'))
                        <li>
                            <a href="/profilUser">Menu Saya</a>
                        </li>
                        @endif
                        <li class="dropdown">
                            <a href="#">Pelayanan</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="/service">Konseling</a></li>
                                <li><a href="/serviceLain">Pelayanan Lain</a></li>


                                {{-- <li><a target="_blank" href="404.html">404</a></li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="/tentangKami">Tentang Kami</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /Mobile-Menu -->
    </div>
    </div>
</header>
