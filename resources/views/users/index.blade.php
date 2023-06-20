@extends('layout.app')

@section('page_content')
    <main class="main-content-two after-login fix">
        <section class="inner-about-area pb-115">
            <div class="container  ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        @include('users.head')
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4  col-12">
                        @include('users.nav')
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12 mb-3">
                                <div class="balance-card  ">
                                    <p class="text-uppercase mb-1" style="font-size: 13px">Coin Balance</p>
                                    <h2 class="title fs-3 text">2,000 <span style="font-weight:100">pc</span></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12 mb-3">
                                <div class="balance-card  ">
                                    <p class="text-uppercase mb-1" style="font-size: 13px">Coin Balance</p>
                                    <h2 class="title fs-3 text">2,000 <span style="font-weight:100">pc</span></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12 mb-3">
                                <div class="balance-card  ">
                                    <p class="text-uppercase mb-1" style="font-size: 13px">Coin Balance</p>
                                    <h2 class="title fs-3 text">2,000 <span style="font-weight:100">pc</span></h2>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            {{-- <div class="col-12">
                                <div class="job-item pb-3 d-flex justify-content-between">
                                    <div class="text-center">
                                        <a href="#">
                                            <span class="rounded-circle home-icon">
                                                <i class="fa fa-paper-plane  "></i>
                                            </span>
                                            <h6 class="title fs-5 mt-2">Transfer</h6>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="#">
                                            <span class="rounded-circle home-icon">
                                                <i class="fa fa-paper-plane  "></i>
                                            </span>
                                            <h6 class="title fs-5 mt-2">Deposit</h6>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="#">
                                            <span class="rounded-circle home-icon">
                                                <i class="fa fa-paper-plane  "></i>
                                            </span>
                                            <h6 class="title fs-5 mt-2">Trade</h6>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="#">
                                            <span class="rounded-circle home-icon">
                                                <i class="fa fa-paper-plane  "></i>
                                            </span>
                                            <h6 class="title fs-5 mt-2">Withdraw</h6>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-md-12">
                                <div class="comment-respond" style="width: 100%">
                                    <h3 class="comment-reply-title">Transactions</h3>
                                    <div class="table-responsive">
                                        <table class="table text-white ">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Amount</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Timestamp</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
