@extends('layout.admin02')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h6 class="font-weight-bold text-sm mb-2">Credit User</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/credit" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="">
                                @error('username')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="number" name="amount" class="form-control" placeholder="">
                                @error('amount')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>



                            <div class="mt-2 d-flex justify-content-end ">
                                <button class="btn btn-sm  btn-primary">Credit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="col-lg-12">
                    <div class="card card-block card-stretch custom-scroll">
                        <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <div class="caption">
                                <h4 class="font-weight-bold mb-2">Credit History</h4>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0">Amount</th>
                                            <th scope="col" class="border-0">User</th>
                                            <th scope="col" class="border-0">By</th>
                                            <th scope="col" class="border-0">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($credits as $credit)
                                            <tr>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->amount }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->user->username }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->admin->username }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
