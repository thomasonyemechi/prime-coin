@extends('layout.admin')
@section('page_content')
    <div class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-1 h2 fw-bold">
                            All Withdarwals
                        </h1>
                        <!-- Breadcrumb  -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Withdarwals</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">

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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdrawal as $dep)
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
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center  pt-3">
                                    {{ $withdrawal->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection


@push('scripts')
    <script>

    </script>
@endpush
