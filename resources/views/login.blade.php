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
                        <a href="/" class="d-flex justify-content-center">
                            <img src="{{asset('assets/images/coins/00.png')}}" style="width: 25px; height:25px" alt="">
                            <h4>Primecoin</h4>
                        </a>
                    </div>
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

                    <form method="post" action=" {{ route('access-account') }} ">@csrf
                        <div class="form-group username-field">
                            <div class="form-field">
                                <input class="form-control" type="text" placeholder="Username" required=""
                                    name="username">
                                @error('username')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group password-field">
                            <div class="form-field">
                                <input class="form-control" name="password" type="password" placeholder="password"
                                    required="">
                                @error('password')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>
                            <div class="d-flex pt-2 justify-content-between" >
                                <span></span>
                                <span> <a href="/forgot-password">Forgot Password</a> </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">Login</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center"><a href="/signup" class="forgot-link">Sign Up</a></p>
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
