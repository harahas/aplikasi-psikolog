<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    {{-- <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a> --}}

    <!-- Brand Logo Dark -->
    {{-- <a href="/" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a> --}}

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="/" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="ri-pages-line"></i>
                    <span> Master </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/pelayanan">Pelayanan</a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="side-nav-item">
                <a href="/adminKlien" class="side-nav-link">
                    <i class=" ri-user-2-line"></i>
                    <span> Klien </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="/jadwalReservasiAdmin" class="side-nav-link">
                    <i class="ri-calendar-todo-fill"></i>
                    <span> Jadwal Reservasi</span>
                </a>
            </li>
            <li class="side-nav-title">Setting</li>
            <li class="side-nav-item">
                <a href="/settingJadwalAdmin" class="side-nav-link">
                    <i class="mdi mdi-calendar-account"></i>
                    <span> Jadwal Psikolog</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="/settingPelayanAdmin" class="side-nav-link">
                    <i class="mdi mdi-credit-card-settings"></i>
                    <span> Pelayanan</span>
                </a>
            </li>
            {{-- <li class="side-nav-item">
                <a href="/settingPelayanLain" class="side-nav-link">
                    <i class="mdi mdi-table-cog"></i>
                    <span> Pelayanan Lain</span>
                </a>
            </li> --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages2" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="ri-pages-line"></i>
                    <span> Artikel </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages2">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/list_artikel">List Artikel</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
