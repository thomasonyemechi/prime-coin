@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-4">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Update Wallet Address</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-solid alert-primary d-flex align-items-center" role="alert">
                            <div>
                                <b>Note:</b> you can only update your wallet address once in a week
                            </div>
                        </div>

                        <form>
                            <div class="form-group">
                                <label class="form-label" for="email">New Wallet Address:</label>
                                <input type="text" class="form-control" name="waller_adress">
                            </div>
                            <div class="d-flex justify-content-end" >
                                <button type="submit" class="btn btn-primary rounded">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Wallet Update History</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Address</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection


@push('scripts')
@endpush
