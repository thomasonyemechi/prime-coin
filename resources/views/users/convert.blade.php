@extends('layout.app')

@section('page_content')
    <main class="main-content-two  after-login fix">
        <section class="inner-about-area pb-115">
            <div class="container">
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
                            <h3 class="comment-reply-title">Buy Prime Coin</h3>
                            <span>Convert Your USDT to get prime coin (PC)</span>

                            {!! dropError() !!}

                            <form class="comment-form" method="post" action="{{ route('make_deposit') }}">@csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="amount">Amount In PC</label>
                                            <input type="number" name="pc" id="pc" value="{{ old('amount') }}">
                                            @error('amount')
                                                <i class="text-danger  ">{{ $message }} </i>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="text"> Amount In USDT </label>
                                            <input type="text" name="usdt" id="usdt" value="{{ old('wallet') }}">
                                            @error('wallet')
                                                <i class="text-danger ">{{ $message }} </i>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Convert To PC</button>
                            </form>
                        </div>



                        {{-- <div class="comment-respond mt-4" style="width: 100%">
                            <h3 class="comment-reply-title"> Deposit History</h3>
                            <div class="table-responsive">
                                <table class="table text-white ">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deposits as $dep)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td> {!! depositAmount($dep->amount) !!} </td>
                                                <td> deposit from {{ $dep->wallet }} </td>
                                                <td> {!! depositStatus($dep->status) !!} </td>
                                                <td> {{ $dep->created_at }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}


                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

@push('scripts')
    <script>
        $(function() {

            $('#pc').on('keyup', function() {
                pc = $('#pc');
                usdt = $('#usdt');
                coin = parseInt(pc.val());
                $.ajax({
                    method: 'get',
                    url: '/get_price'
                }).done(function(res) {
                    price = coin/res.price
                    usdt.val(price)
                }).fail(function(res) {
                    console.log(res);
                })
            })


            $('#usdt').on('keyup', function() {
                pc = $('#pc');
                usdt = $('#usdt');
                coin = parseInt(usdt.val());
                $.ajax({
                    method: 'get',
                    url: '/get_price'
                }).done(function(res) {
                    price = coin*res.price
                    price = (price == NaN) ? 0 : price;
                    pc.val(price)
                }).fail(function(res) {
                    console.log(res);
                })
            })

        })
    </script>
@endpush
