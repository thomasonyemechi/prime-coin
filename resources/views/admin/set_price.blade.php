@extends('layout.admin')
@section('page_content')
    <div class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Set Prime Coin Price
                        </h1>
                        <!-- Breadcrumb  -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pricing</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="tab-content">
                    <!-- card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-1">Update Coin Price</h4>
                        </div>
                        <div class="card-body">
                            <div>
                                 <small>Current Price </small> <h4 class="fw-bold">1 USDT = {{ $coin->price }} PC</h4>
                                <hr>
                            </div>
                            <form action="/admin/set_price" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Coin Price equivalent to 1 USDT</label>
                                    <input type="number" step="any" name="price" class="form-control"
                                        placeholder="Enter Coin Price">
                                </div>

                                <div class="mt-2 d-flex justify-content-end ">
                                    <button class="btn btn-sm  btn-primary">Update Price</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-12">
                <!-- Tab -->
                <div class="tab-content">

                    <div class="tab-pane show active fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                        <!-- card -->
                        <div class="card">

                            <div class="card-header">
                                <h4 class="mb-1">Coin Price History </h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0">Amount</th>
                                            <th scope="col" class="border-0">Set By</th>
                                            <th scope="col" class="border-0">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($price_changes as $price)
                                            <tr>
                                                <td class="align-middle border-top-0">
                                                    {{ $price->price }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $price->user->username }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $price->created_at }}
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
    </div>

@endsection


@push('scripts')
    <script>
        $(function() {

          
        })
    </script>
@endpush
