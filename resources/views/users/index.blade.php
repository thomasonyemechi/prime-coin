@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-xl-9 d-none d-md-block">
                        <div class="card mb-0">
                            <div class="card-body ">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/images/coins/00.png') }}"
                                            class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                                        <div class="dropdown mt-2 ms-2">
                                            <a href="#" class="text-white" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="mt-2">Primecoin</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <img src="{{ asset('assets/images/coins/00.png') }}"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img71">Stable Primecoin
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-block w-50">
                                        <div class="d-flex justify-content-evenly flex-1">
                                            <span class=" text-primary">
                                                37,390.00<br>
                                                <small>$37,390.00</small>
                                            </span>
                                            <span class=" text-primary">
                                                129.51+0.8%<br>
                                                <small>24th changes</small>
                                            </span>
                                            <span class="">
                                                37,440.01<br>
                                                <small>24th high</small>
                                            </span>
                                            <span class="">
                                                37,327.30<br>
                                                <small>24th low</small>
                                            </span>
                                            <span class="d-none">
                                                37,390.00<br>
                                                <small>24th volume(BTC)</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="d-grid grid-3-auto gap-card">
                            <div class="dropdown">
                                <button class="btn btn-primary w-100">
                                    Deposit USDT
                                </button>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-primary w-100" type="button" id="dropdownMenuButton4"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Transfer Fund
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="">
                                                <span class="fs-4 fw-bold me-2" style="line-height: 20px">$1146</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/00.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">Primecoin <br>
                                                    <span style="font-weight: lighter">$0.2</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">13000 PMC <br>
                                                    <span style="font-weight: lighter">$800</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/01.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">USDT <br>
                                                    <span style="font-weight: lighter">$1</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">300 USDT <br>
                                                    <span style="font-weight: lighter">$300</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/02.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">Airdrop <br>
                                                    <span style="font-weight: lighter">$1</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">46 SPC <br>
                                                    <span style="font-weight: lighter">$46</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between flex-wrap">
                                        <div class="header-title">
                                            <h4 class="card-title">Quick Transfer</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-grid grid-cols-5 gap-card mb-4">
                                            <div class="">
                                                <img src="../assets/images/avatars/02.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img36">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/03.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img37">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/04.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img38">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/05.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img39">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/06.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img40">
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text" id="basic-addon7">Amount</span>
                                            <input type="text" class="form-control col-lg-8" placeholder="126.5"
                                                aria-label="Recipient's username" aria-describedby="basic-addon3">
                                        </div>
                                        <div class="d-grid grid-cols-1 gap-card justify-content-between">
                                            <div>
                                                <button type="button" class="btn btn-primary w-100">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.74074 8.25926L2 6.7037L16 1M8.74074 8.25926L10.8148 15L16 1M8.74074 8.25926L16 1"
                                                            stroke="white" />
                                                    </svg>
                                                    <span class="ms-2">Transfer Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="p-2 rounded bg-warning disabled">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none"
                                                        viewBox="0 0 24 24" stroke="white">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                    </svg>
                                                </div>
                                                <h4 class="px-3">Conversion</h4>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class=" border rounded">
                                                    <svg width="28" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.9393 12.0129H15.9483" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M11.9301 12.0129H11.9391" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M7.92128 12.0129H7.93028" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="d-grid gap-card">
                                            <div class="form-group mb-2">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="1000"
                                                        aria-label="Recipient's username" aria-describedby="basic-addon3">
                                                    <span class="input-group-text" id="basic-addon3">GRD</span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="100"
                                                        aria-label="Recipient's username" aria-describedby="basic-addon4">
                                                    <span class="input-group-text" id="basic-addon4">USD</span>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Archive</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch custom-scroll">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                                <div class="caption">
                                    <h4 class="font-weight-bold mb-2">Recent Transactions</h4>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1">
                                    <label class="btn btn-sm btn-secondary active rounded-start"
                                        for="btncheck1">Monthly</label>

                                    <input type="checkbox" class="btn-check" id="btncheck2">
                                    <label class="btn btn-sm btn-secondary " for="btncheck2">Weekly</label>

                                    <input type="checkbox" class="btn-check" id="btncheck3">
                                    <label class="btn btn-sm btn-secondary rounded-end" for="btncheck3">Today</label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">7d %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Volume(24th)</th>
                                                <th scope="col">Circulating</th>
                                                <th scope="col">Last 7 Days</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="white-space-no-wrap">
                                                <td>
                                                    <img src="../assets/images/coins/02.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img23" />
                                                    Bitcoin BTC<a href="#"
                                                        class="button btn-primary badge ms-2">Buy</a>
                                                </td>
                                                <td class="pe-2">$40,501.87</td>
                                                <td class="text-danger"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E" />
                                                    </svg>
                                                    6.93%
                                                </td>
                                                <td class="text-success"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42" />
                                                    </svg>
                                                    4.58%
                                                </td>
                                                <td>$123,456,789,159</td>
                                                <td>$373,359,580,155<br>
                                                    <small class="ms-5">635,237 BTC</small>
                                                </td>
                                                <td class="ms-5">18,777,768 BTC</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div id="sparklinechart-1"></div>
                                                        <div class="dropdown ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" role="tablist"
                                                                width="20" id="dropdownMenuButton7"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton7">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Charts</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Markets</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Historical Data</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td>
                                                    <img src="../assets/images/coins/02.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img23" />
                                                    Ethereum ETH<a href="#"
                                                        class="button btn-primary badge ms-2">Buy</a>
                                                </td>
                                                <td class="pe-2">$2,796.60</td>
                                                <td class="text-danger"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E" />
                                                    </svg>
                                                    3.33%
                                                </td>
                                                <td class="text-success"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42" />
                                                    </svg>
                                                    15.45%
                                                </td>
                                                <td>$123,456,789,159</td>
                                                <td>$373,359,580,155<br>
                                                    <small class="ms-5">635,237 BTC</small>
                                                </td>
                                                <td class="ms-5">18,777,768 BTC</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div id="sparklinechart-2"></div>
                                                        <div class="dropdown ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                role="tablist" id="dropdownMenuButton8"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton8">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Charts</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Markets</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Historical Data</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td>
                                                    <img src="../assets/images/coins/02.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img23" />
                                                    Monero XMR<a href="#"
                                                        class="button btn-primary badge ms-2">Buy</a>
                                                </td>
                                                <td class="pe-2">$1.00</td>
                                                <td class="text-success"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42" />
                                                    </svg>
                                                    0.01%
                                                </td>
                                                <td class="text-danger"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E" />
                                                    </svg>
                                                    0.02%
                                                </td>
                                                <td>$123,456,789,159</td>
                                                <td>$373,359,580,155<br>
                                                    <small class="ms-5">635,237 BTC</small>
                                                </td>
                                                <td class="ms-5">18,777,768 BTC</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div id="sparklinechart-3"></div>
                                                        <div class="dropdown ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                role="tablist" id="dropdownMenuButton9"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton9">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Charts</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Markets</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Historical Data</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td>
                                                    <img src="../assets/images/coins/02.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img23" />
                                                    Litecoin LTC<a href="#"
                                                        class="button btn-primary badge ms-2">Buy</a>
                                                </td>
                                                <td class="pe-2">$40,501.87</td>
                                                <td class="text-danger"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E" />
                                                    </svg>
                                                    6.93%
                                                </td>
                                                <td class="text-success">
                                                    <svg width="10" height="8" viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42" />
                                                    </svg>
                                                    4.58%
                                                </td>
                                                <td>$123,456,789,159</td>
                                                <td>$373,359,580,155<br>
                                                    <small class="ms-5">635,237 BTC</small>
                                                </td>
                                                <td class="ms-5">18,777,768 BTC</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div id="sparklinechart-4"></div>
                                                        <div class="dropdown ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" role="tablist"
                                                                width="20" id="dropdownMenuButton10"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton10">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Charts</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Markets</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Historical Data</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td>
                                                    <img src="../assets/images/coins/02.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img23" />
                                                    Bitcoin BTC<a href="#"
                                                        class="button btn-primary badge ms-2">Buy</a>
                                                </td>
                                                <td class="pe-2">$40,501.87</td>
                                                <td class="text-success"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42" />
                                                    </svg>
                                                    6.93%
                                                </td>
                                                <td class="text-danger"><svg width="10" height="8"
                                                        viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E" />
                                                    </svg>
                                                    4.58%
                                                </td>
                                                <td>$123,456,789,159</td>
                                                <td>$373,359,580,155<br>
                                                    <small class="ms-5">635,237 BTC</small>
                                                </td>
                                                <td class="ms-5">18,777,768 BTC</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div id="sparklinechart-5"></div>
                                                        <div class="dropdown ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                id="dropdownMenuButton11" role="tablist"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton11">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Charts</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Markets</a></li>
                                                                <li><a class="dropdown-item" href="#">View
                                                                        Historical Data</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title">
                                    <h4 class="card-title">History</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline m-0 p-0">
                                    <li class="d-flex  align-items-center pt-3">
                                        <div
                                            class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap">
                                            <img src="../assets/images/coins/01.png"
                                                class="img-fluid avatar avatar-40 avatar-rounded" alt="img6">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-2 d-inline-block">Bitcoin</h5>
                                                <p class=" text-success mb-2 d-inline-block ms-1">+$10,00</p>
                                                <p class="fs-6">Bitcoins Evolution™. 234000 Satisfied Customers
                                                    From 107 Countries.</p>
                                            </div>
                                            <div class="">
                                                <p>11/02/21</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
