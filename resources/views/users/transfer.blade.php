@extends('layout.app')

@section('page_content')
    <main class="main-content after-login fix">
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
                        <div class="comment-respond" style="width: 100%">
                            <h3 class="comment-reply-title">Transfer</h3>
                            <span>Send prime cion to other users</span>
                            <form class="comment-form" action="#">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <label for="amount">Amount *</label>
                                            <input type="number" name="amount">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-grp">
                                            <label for="text">Receving Wallet Address *</label>
                                            <input type="text" name="wallet_address">
                                            @error('wallet_address')
                                                <i class="text-danger fw-bold ">{{ $message }} </i>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Transfer</button>
                            </form>
                        </div>



                        <div class="comment-respond mt-4" style="width: 100%">
                            <h3 class="comment-reply-title"> Transfer History</h3>
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
        </section>


    </main>
@endsection
