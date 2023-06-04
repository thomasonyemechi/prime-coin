@extends('layout.app')

@section('page_content')
    <main class="main-content fix">
        <div class="noise-bg" data-background="assets/img/bg/noise_bg.png"></div>
        <div class="main-shape" data-background="assets/img/images/main_shape.png"></div>



        <section class="breadcrumb-area pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <h2 class="title mb-0 fs-1 ">Hello <span>Solex</span></h2>
                            <p style="display:inline">Welcome To {{ env('APP_NAME') }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="inner-about-area pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 mb-4 ">
                        <div class="balance-card  ">
                            <p class="text-uppercase mb-1" style="font-size: 13px">Coin Balance</p>
                            <h2 class="title fs-3 text">2,000 <span style="font-weight:100">pc</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-4 ">
                        <div class="balance-card  ">
                            <p class="text-uppercase mb-1" style="font-size: 13px">Coin Balance</p>
                            <h2 class="title fs-3 text">2,000 <span style="font-weight:100">pc</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-4 ">
                        <div class="balance-card  ">
                            <p class="text-uppercase mb-1" style="font-size: 13px">Coin Balance</p>
                            <h2 class="title fs-3 text">2,000 <span style="font-weight:100">pc</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-4 ">
                        <div class="balance-card  ">
                            <p class="text-uppercase mb-1" style="font-size: 13px">Coin Balance</p>
                            <h2 class="title fs-3 text">2,000 <span style="font-weight:100">pc</span></h2>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="job-item">
                            <div class="job-content d-md-flex justify-content-between ">
                                <div class="l-item">
                                    <a href="job-details.html">
                                        <div class="rounded-circle bfg-light" >
                                            <i class="fa fa-paper-plane "></i>
                                        </div>
                                        <h6 class="title fs-6">Send Money</h6>
                                    </a>
                                </div>
                                {{-- <p>We're looking for an experienced senior softwar engineer to join our team.</p> --}}
                                {{-- <ul class="list-wrap">
                                    <li><a href="job-details.html"><i class="far fa-map-marker-alt"></i>Remote</a></li>
                                    <li><a href="job-details.html"><i class="far fa-clock"></i>Full-time</a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>














    </main>
@endsection
