@extends('layout.admin02')
@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row mb-4">
            <div class="col-lg-12">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-white">All Users</h4>
                        </div>
                        <div class="d-flex mt-3 ms-4 me-4 justify-content-between">

                            <div class="form-outline">
                                <form action="">
                                    <input type="search" name="user" class="form-control ms-1" placeholder="Search users.."
                                    aria-label="Search">
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! isset($_GET['user']) ? '<p class="mb-2 fw-bold" >Search Result for <b>" '.$_GET['user'].' "</b></p>' : '' !!}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="">
                                        <tr>
                                            <th>Username</th>
                                            <th>PC</th>
                                            <th>USDT</th>
                                            <th>SPC</th>
                                            <th>Purchase</th>
                                            <th>Reffered By</th>
                                            <th>Joined</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td> <a class=" fw-bold " href="/admin/user/{{$user->id}}"  > <span>{{$user->username}} </span> </a> </td>
                                                <td> {{number_format(pcBalance($user->id),)}} PC </td>
                                                <td> {{number_format(usdtBalance($user->id),)}} USDT </td>
                                                <td> {{number_format(spcBalance($user->id),)}} SPC </td>
                                                <td> {{number_format(coinTotalPurchase($user->id),)}} USDT </td>
                                                <td> 
                                                    {{($user->spon) ? $user->spon->username : 'Admin' }}
                                                </td>
                                                <td> {{date('j M, Y', strtotime($user->created_at))}} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <div class="d-flex justify-content-between flex-wrap">
                                    {{ $users->links('pagination::bootstrap-4') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
