@extends('layout.admin')
@section('page_content')
    <div class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Manage Withdrawals
                        </h1>
                        <!-- Breadcrumb  -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pending Withdrawals</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Tab -->
                <div class="tab-content">

                    <div class="tab-pane show active fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                        <!-- card -->
                        <div class="card">

                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0">Sn</th>
                                            <th scope="col" class="border-0">Username</th>
                                            <th scope="col" class="border-0">Amount</th>
                                            <th scope="col" class="border-0">Wallet Address</th>
                                            <th scope="col" class="border-0">Status</th>
                                            <th scope="col" class="border-0">Timestamp</th>
                                            <th scope="col" class="border-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdrawals as $dep)
                                        <tr>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <h5 class="mb-0"> {{ $loop->iteration }} </h5>
                                                </div>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                {{ $dep->user->username }}
                                            </td>
                                            <td class="align-middle border-top-0">
                                                {{ depositAmount($dep->amount) }}
                                            </td>
                                            <td class="align-middle border-top-0">
                                                {{ $dep->wallet_address }}
                                            </td>
                                            <td class="align-middle border-top-0">
                                                {!! depositStatus($dep->status) !!}
                                            </td>

                                            <td class="align-middle border-top-0">
                                                {{$dep->created_at }}
                                            </td>
                                            <td class="text-muted px-4 py-3 align-middle border-top-0">
                                                <span class="dropdown dropstart">
                                                    <a class="text-muted text-decoration-none" href="#" role="button"
                                                        id="courseDropdown" data-bs-toggle="dropdown"
                                                        data-bs-offset="-20,20" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i></a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown"><span
                                                            class="dropdown-header">Action</span>
                                                        <a class="dropdown-item text-success approvebtn" data-data='{{ json_encode($dep) }}' href="#"><i
                                                                class="fe fe-check dropdown-item-icon"></i>Approve</a>
                                                        <a class="dropdown-item text-danger rejectbtn " data-data='{{ json_encode($dep) }}' href="javascript:;"><i
                                                                class="fe fe-x dropdown-item-icon"></i>Reject</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                <div class="d-flex justify-content-center  pt-3">
                                    {{ $withdrawals->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="rejectDepositModal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <form method="POST" action="/admin/deposit/reject_deposit"  > @csrf
                        <h3>Reject Deposit</h3>
                        <p class="text-danger" ></p>
                        <div class="form-group" >
                            <label for="">State Reason For Rejection</label>
                            <input type="text" class="form-control" name="remark" >
                            <input type="hidden" class="form-control" name="id" >
                        </div>

                        <div class="mt-2 d-flex justify-content-end">  
                            <button class="btn btn-sm btn-danger" >Reject Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


    <div class="modal fade" id="approveDepositModal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <form method="POST" action="/admin/withdrawal/approve_withdrawal"  > @csrf
                        <h3>Approve</h3>
                        <p class="text-success" ></p>

                        <div class="form-group" >
                            <input type="hidden" class="form-control" name="id" >
                        </div>
                        
                        <div class="mt-2 d-flex justify-content-end">  
                            <button class="btn btn-sm btn-success" >Approve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection


@push('scripts')
    <script>
        $(function() {

            $('body').on('click', '.rejectbtn', function () {
                data = $(this).data('data');
                console.log(data);

                modal = $('#rejectDepositModal')
                modal.modal('show');
                modal.find('p').html(`Reject this withdrawal `)
                modal.find('input[name="id"]').val(data.id);
            })


            $('body').on('click', '.approvebtn', function () {
                data = $(this).data('data');
                console.log(data);

                modal = $('#approveDepositModal')
                modal.modal('show');
                modal.find('p').html(`You will transfer  ${data.amount} USDT to  ${data.wallet_address} `)
                modal.find('input[name="id"]').val(data.id);
            })
        })
    </script>
@endpush
