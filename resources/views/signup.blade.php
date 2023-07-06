<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->

    <link rel="shortcut icon" href="images/favi-icon.ico" type="image/x-icon" />

    <!-- Website Title -->
    <title>Prime Coin</title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="{{ asset('main/css/fontawesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/fancybox/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/my-style2.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/responsive2.css') }}" type="text/css" />
</head>

<body>

    <div class="wrapper login-page style-3" id="top">
        <div class="cp-container">
            <div class="form-part">
                <div class="cp-header text-center">
                    <div class="logo">
                        <a href="/">
                            <h4>Prime Coin</h4>
                        </a>
                    </div>
                </div>
                <div class="cp-heading text-center">
                    <h5>Welcome to Prime Coin</h5>
                    <p>To keep connected with us please Sign up with your personal information by username and password..</p>
                </div>
                <div class="cp-body">
                    @if (session('success'))
                        <div class="mb-2 text-center refresh ">
                            <i class="text-success "> {{ session('success') }} </i>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="mb-2 text-center refresh">
                            <i class="text-danger"> {{ session('error') }} </i>
                        </div>
                    @endif
                    <form method="post" action=" {{ route('create-account') }} ">@csrf
                        <div class="form-group username-field">
                            <div class="form-field">
                                <input class="form-control" type="text" placeholder="Username" required=""
                                    name="username" value="{{ old('username') }}" >
                                @error('username')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group username-field">
                            <div class="form-field">
                                <input class="form-control" type="text" placeholder="Refferal Id (optional)"
                                    name="referral_id">
                                @error('referral_id')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group password-field">
                            <div class="form-field">
                                <input class="form-control" name="password" type="password" autocomplete="new-password" placeholder="password"
                                    required="">
                                @error('password')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group password-field">
                            <div class="form-field">
                                <input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password"
                                    required="">
                                @error('password_confirmation')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="text-center remember-me-checkbox"><label><input type="checkbox" name="remember" value="0" required>I agree with the website's <a href="#" class="forgot-link">Terms and conditions</a></label></p> 
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center"><a href="/login" class="forgot-link">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('main/js/jquery.min.js') }}"></script>
    <script src="{{ asset('main/js/circle-progress.js') }}"></script>
    <script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('main/js/onpagescroll.js') }}"></script>
    <script src="{{ asset('main/js/wow.min.js') }}"></script>
    <script src="{{ asset('main/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('main/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('main/js/slick.min.js') }}"></script>
    <script src="{{ asset('main/js/Chart.js') }}"></script>
    <script src="{{ asset('main/js/chart-function.js') }}"></script>
    <script src="{{ asset('main/js/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('main/js/script2.js') }}"></script>
    <script src="{{ asset('main/js/particles.js') }}"></script>
    <script src="{{ asset('main/js/gold-app2.js') }}"></script>

    <script>
        $(function() {
            setTimeout(() => {
                $('.refresh').hide('slow');
            }, 5000);
        })
    </script>

</body>

</html>
