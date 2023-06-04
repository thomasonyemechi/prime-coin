<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prime Coin | Create Account</title>
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

    <header>
        <div id="sticky-header" class="menu-area menu-area-four transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="/"><img src="assets/img/logo/logo.png" alt="Logo"></a>
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
        <section class="login-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-10">
                        <div class="login-content">
                            <h3 class="title">Create account</h3>
                            <span class="" >Welcome To {{ env('APP_NAME') }}! Please enter your details.</span>

                            @if(session('success'))
                                <div class="mb-2" >
                                    <i class="text-success fw-bold "> {{ session('success') }} </i>
                                </div>
                            @endif

                            <form method="post" action=" {{ route('create-account') }} ">
                                @csrf
                                <div class="form-grp">
                                    <label>Username</label>
                                    <input type="text" name="username" placeholder="Enter username" value="{{ old('username') }}" >
                                    @error('username')
                                        <i class="text-danger fw-bold ">{{ $message }} </i>
                                    @enderror
                                </div>
                                <div class="form-grp">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="************">
                                    @error('password')
                                        <i class="text-danger fw-bold ">{{ $message }} </i>
                                    @enderror
                                </div>
                                <div class="password-wrap">
                                    <div class="form-grp checkbox-grp">
                                        <label for="checkbox">By Signing up you agree to our <a href="#">Terms and
                                                Condition</a> </label>
                                    </div>
                                </div>
                                <button type="submit" class="sine-btn">sing in</button>
                                <button type="submit" class="google-btn"><img src="assets/img/images/google.png"
                                        alt=""> sign in with google</button>
                                <span>Already have an account? <a href="/login">Sign In</a> </span>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="login-right-content-wrap">
                            <div class="login-right-bg" data-background="assets/img/bg/error_bg.jpg"></div>
                            <div class="login-right-content-inner">
                                <img src="assets/img/images/login_img.png" alt="">
                                <h4 class="title">Revolutionize your writing: Try <span>AI writer today</span> and
                                    watch your content soar</h4>
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
