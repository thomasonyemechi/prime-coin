<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prime Coin | Login</title>
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/animatedheadline.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="menu-area menu-area-four transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a class="d-flex justify-content-between "  href="/">
                                        <img class="img-fluid" style="width: 30px; height: 30px" src="{{ asset('assets/img/logo.png') }}" alt="Prime Coin">
                                        <h3 class="mb-0 align-middle ml-3 fw-bold " >PrimeCoin</h3>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main class="main-content">
        <div class="noise-bg" data-background="assets/img/bg/noise_bg.png"></div>
        <div class="main-shape" data-background="assets/img/images/main_shape.png"></div>

        <!-- login-area -->
        <section class="login-area about-area-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-10">
                        <div class="login-content">
                            <h3 class="title">Log into your account</h3>
                            <span>👋 Welcome back! Please enter your details.</span>
                            @if (session('success'))
                                <div class="mb-2">
                                    <i class="text-success fw-bold "> {{ session('success') }} </i>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="mb-2">
                                    <i class="text-danger fw-bold "> {{ session('error') }} </i>
                                </div>
                            @endif
                            <form method="post" action=" {{ route('access-account') }} ">
                                @csrf
                                <div class="form-grp">
                                    <label for="username">Your Username</label>
                                    <input type="text" name="username" value='{{ old('username') }}' >
                                    @error('username')
                                        <i class="text-danger fw-bold ">{{ $message }} </i>
                                    @enderror
                                </div>
                                <div class="form-grp">
                                    <label for="word">Password</label>
                                    <input type="password" name="password">
                                    @error('password')
                                        <i class="text-danger fw-bold ">{{ $message }} </i>
                                    @enderror
                                </div>
                                <div class="password-wrap">
                                    <div class="form-grp checkbox-grp">
                                        <input type="checkbox" id="checkbox" class="form-check-input">
                                        <label for="checkbox">Remember for 30 days</label>
                                    </div>
                                </div>
                                <button type="submit" class="sine-btn">sign in</button>
                                <span>Don’t have an account? <a href="/signup">Sign up for free</a> </span>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="login-right-content-wrap">
                            <div class="login-right-bg" data-background="assets/img/bg/error_bg.jpg"></div>
                            <div class="login-right-content-inner">
                                <img src="assets/img/images/login_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login-area-end -->

    </main>
    <!-- main-area-end -->



    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/ScrollTrigger.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/gsap-animation.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/animatedheadline.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from themeadapt.com/tf/dexai/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 06:05:27 GMT -->

</html>
