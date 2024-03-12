@php
use Illuminate\Support\Carbon;
use App\Models\Reservasi;
use App\Models\JadwalTaken;
use App\Models\Klien;
use Illuminate\Support\Facades\DB;

$waktu_hari_ini = strtotime(Carbon::now()->setTimezone('Asia/Jakarta'));
$reservasi = Reservasi::where('status', 0)->orWhere('status', 1)->get();
$notifs = [];
foreach($reservasi as $row){
$jadwal = DB::table('jadwal_takens as a')->join('setting_jadwals as b', 'a.unique_setting_jadwal', '=', 'b.unique')->where('unique_reservasi', $row->unique)->first();
$kadaluarsa = strtotime($row->tanggal.' '.$jadwal->jam_akhir);
if($kadaluarsa < $waktu_hari_ini){ $notifs[]=$row->unique; } }; @endphp
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{ $title }} | Akhlaqul Karimah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
        <meta content="Techzaa" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets2/images/favicon.ico">

        <!-- Datatables css -->
        <link href="/assets2/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets2/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets2/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets2/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets2/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets2/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

        {{-- TRIX --}}
        <link rel="stylesheet" href="/css/trix.css">
        <script src="/js/trix.umd.min.js"></script>

        {{-- TRIX --}}
        <link rel="stylesheet" href="/css/trix.css">
        <script>
            src = "/js/trix.umd.min.js"

        </script>

        <!-- Theme Config Js -->
        <script src="/assets2/js/config.js"></script>

        <!-- App css -->
        <link href="/assets2/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="/assets2/css/icons.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            .spinner {
                width: 56px;
                height: 56px;
                display: grid;
                border: 4.5px solid #0000;
                border-radius: 50%;
                border-color: #ffff #0000;
                animation: spinner-e04l1k 1s infinite linear;
            }

            .spinner::before,
            .spinner::after {
                content: "";
                grid-area: 1/1;
                margin: 2.2px;
                border: inherit;
                border-radius: 50%;
            }

            .spinner::before {
                border-color: #474bff #0000;
                animation: inherit;
                animation-duration: 0.5s;
                animation-direction: reverse;
            }

            .spinner::after {
                margin: 8.9px;
            }

            @keyframes spinner-e04l1k {
                100% {
                    transform: rotate(1turn);
                }
            }

            .card-spinner {
                position: fixed;
                top: 50vh;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 100000;
                padding: 75px 150px;
                background-color: rgba(0, 0, 0, 0.3);
            }

        </style>
        <script>
            const loader = `
            <div class="card d-flex justify-conten-center align-items-center card-spinner">
                <div class="spinner" style="position:relative;z-index: 101;"></div>
            </div>`

        </script>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">


            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg">
                                    <img src="/assets2/images/logosaya.png" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="/assets2/images/logosaya.png" alt="small logo">
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="/assets2/images/logosaya.png" alt="dark logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="/assets2/images/logosaya.png" alt="small logo">
                                </span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="ri-menu-line"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        <li class="dropdown d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line fs-22"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" role="button">
                                <i class="ri-notification-3-line fs-22"></i>
                                @if (count($notifs) > 0)
                                <span class="noti-icon-badge badge text-bg-pink">{{ count($notifs) }}</span>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0" style="">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-sm-12">
                                        @if (count($notifs) > 0)
                                        <span class="badge bg-info text-center p-1">{{ count($notifs) }} Reservasi Belum Dikonfirmasi Selesai!</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="table-responsive" id="table-notif">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Jenis Konseling</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($notifs as $notif)
                                                    @php
                                                    $reservasi = DB::table('reservasis as a')
                                                    ->join('klien as b', 'a.unique_klien', '=', 'b.unique')
                                                    ->join('setting_pembayarans as c', 'a.unique_setting_bayar', '=', 'c.unique')
                                                    ->select('a.*', 'b.nama', 'b.no_hp', 'c.nama_pelayanan')
                                                    ->where('a.unique', $notif)
                                                    ->where('a.status', 0)
                                                    ->orWhere('a.status', 1)
                                                    ->first();
                                                    @endphp
                                                    @if($reservasi)
                                                    <tr>
                                                        <td>{{ $reservasi->nama_pelayanan }}</td>
                                                        <td>{{ $reservasi->nama }}</td>
                                                        <td>
                                                            <span class="badge bg-success" style="cursor: pointer" id="btn-selesai" data-unique="{{ $notif }}">Selesai</span>
                                                            <span class="badge bg-secondary" style="cursor: pointer" id="btn-kadaluarsa" data-unique="{{ $notif }}">Kadaluarsa</span>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- All-->
                                <a href="/jadwalReservasiAdmin" class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>
                        <li class="d-none d-sm-inline-block">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                <i class="ri-settings-3-line fs-22"></i>
                            </a>
                        </li>

                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link" id="light-dark-mode">
                                <i class="ri-moon-line fs-22"></i>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="/assets2/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                                </span>
                                <span class="d-lg-block d-none">
                                    <h5 class="my-0 fw-normal">HamniRH <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item">
                                    <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="/logout" class="dropdown-item">
                                    <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->
            <div id="spinner">
            </div>

            @include('layouts.sidebar_velonic')

            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Online School</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                                            <li class="breadcrumb-item active">{{ $title }}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">{{ $title }}</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div id="spinner">
                            <div class="card d-flex justify-conten-center align-items-center card-spinner d-none">
                                <div class="spinner" style="position:relative;z-index: 101;"></div>
                            </div>
                        </div>
                        @yield('container-velonic')
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <script>
                                    document.write(new Date().getFullYear())

                                </script> © Akhlaqul Karimah <b>Lembaga Psikolog</b>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0">Theme Settings</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-3">
                        <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                                    <label class="form-check-label" for="layout-color-light">
                                        <img src="/assets2/images/layouts/light.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                                    <label class="form-check-label" for="layout-color-dark">
                                        <img src="/assets2/images/layouts/dark.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                        <label class="form-check-label" for="layout-mode-fluid">
                                            <img src="/assets2/images/layouts/light.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                                </div>

                                <div class="col-4">
                                    <div id="layout-boxed">
                                        <div class="form-check form-switch card-switch mb-1">
                                            <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                            <label class="form-check-label" for="layout-mode-boxed">
                                                <img src="/assets2/images/layouts/boxed.png" alt="" class="img-fluid">
                                            </label>
                                        </div>
                                        <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                                    <label class="form-check-label" for="topbar-color-light">
                                        <img src="/assets2/images/layouts/light.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                    <label class="form-check-label" for="topbar-color-dark">
                                        <img src="/assets2/images/layouts/topbar-dark.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>

                        <div>
                            <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                                        <label class="form-check-label" for="leftbar-color-light">
                                            <img src="/assets2/images/layouts/sidebar-light.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                        <label class="form-check-label" for="leftbar-color-dark">
                                            <img src="/assets2/images/layouts/light.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                        <label class="form-check-label" for="leftbar-size-default">
                                            <img src="/assets2/images/layouts/light.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                        <label class="form-check-label" for="leftbar-size-compact">
                                            <img src="/assets2/images/layouts/compact.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                        <label class="form-check-label" for="leftbar-size-small">
                                            <img src="/assets2/images/layouts/sm.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                                </div>


                                <div class="col-4">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                        <label class="form-check-label" for="leftbar-size-full">
                                            <img src="/assets2/images/layouts/full.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                            <div class="btn-group checkbox" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="https://1.envato.market/velonic" target="_blank" role="button" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $("#table-notif").on("click", "#btn-selesai", function() {
                    let unique = $(this).data('unique');
                    Swal.fire({
                        title: "Apakah Kamu Yakin?"
                        , text: "Kamu Menyelesaikan Reservasi!"
                        , icon: "warning"
                        , showCancelButton: true
                        , confirmButtonColor: "#3085d6"
                        , cancelButtonColor: "#d33"
                        , confirmButtonText: "Yes, Selesaikan!"
                    , }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "/selesaiPemesanan/" + unique
                                , type: "GET"
                                , dataType: "json"
                                , success: function(response) {
                                    document.location.reload();
                                }
                            , });
                        }
                    });
                })
                $("#table-notif").on("click", "#btn-kadaluarsa", function() {
                    let unique = $(this).data('unique');
                    Swal.fire({
                        title: "Apakah Kamu Yakin?"
                        , text: "Reservasi Ini Akan Kadaluarsa!"
                        , icon: "warning"
                        , showCancelButton: true
                        , confirmButtonColor: "#3085d6"
                        , cancelButtonColor: "#d33"
                        , confirmButtonText: "Yes, Kadaluarsakan!"
                    , }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "/selesaiKadaluarsa/" + unique
                                , type: "GET"
                                , dataType: "json"
                                , success: function(response) {
                                    document.location.reload();
                                }
                            , });
                        }
                    });
                })
            });

        </script>

        <!-- Vendor js -->
        <script src="/assets2/js/vendor.min.js"></script>

        <!-- Datatables js -->
        <script src="/assets2/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/assets2/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets2/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/assets2/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="/assets2/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
        <script src="/assets2/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="/assets2/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/assets2/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="/assets2/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="/assets2/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="/assets2/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="/assets2/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="/assets2/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

        <!-- App js -->
        <script src="/assets2/js/app.min.js"></script>

        <!-- Bootstrap Wizard Form js -->
        <script src="/assets2/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

        <!-- Wizard Form Demo js -->
        <script src="/assets2/js/pages/form-wizard.init.js"></script>



    </body>

    </html>
