<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets2/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="/assets2/js/config.js"></script>

    <!-- App css -->
    <link href="/assets2/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="/assets2/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="/assets2/images/auth-img.jpg" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="index.html" class="logo-light">
                                            <img src="/assets2/images/logo.png" alt="logo" height="22">
                                        </a>
                                        <a href="index.html" class="logo-dark">
                                            <img src="/assets2/images/logo-dark.png" alt="dark logo" height="22">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Sign In</h4>
                                        <p class="text-muted mb-3">Enter your email address and password to access
                                            account.
                                        </p>
                                        {{-- Kodingan didalam if akan muncul ketika session(error) == true  --}}
                                        @if(session()->has('error'))
                                        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show time-alert" role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <small>{{ session('error') }}</small>
                                        </div>
                                        @endif
                                        <!-- form -->
                                        <form action="/auth" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                {{-- jika pada tag input diberi class in-invalid maka input tersebut akan merah --}}
                                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="Enter your username">
                                                {{-- jika di bawah tag input diberi class in-valid ada div dengan class invalid-feedback maka pesa yang ada dalam div tersebut akan muncul --}}
                                                <div class="invalid-feedback"> @error('username') {{ $message }}
                                                    
                                                @enderror</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror" name="password" type="password"  id="password" placeholder="Enter your password">
                                                <div class="invalid-feedback"> @error('password') {{ $message }} @enderror
                                                
                                            </div>
                                            {{-- Ketika tombol login di klik maka request akan ditangani oleh url /auth --}}
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit"><i class="ri-login-circle-fill me-1"></i> <span class="fw-bold">LogIn</span> </button>
                                            </div>   
                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
          
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>
                document.write(new Date().getFullYear())
            </script> © Velonic - Theme by Techzaa
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="/assets2/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/assets2/js/app.min.js"></script>

</body>

</html>