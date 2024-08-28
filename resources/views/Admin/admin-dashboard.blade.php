@extends('welcome')


@section('title', 'Admin Dashboard')


@section('content')
    <div class="container">

        <h3 class="text-center">Welcome {{ $admins->name }}</h3>

        <div class="row mt-5 text-center">

            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/memberdetailview') }}">
                        <div class="card l-bg-cherry">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">All Members</h1>
                                </div>
                                <div class="row align-items-center mb-2 text-center">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0 text-center">
                                            {{ $allmembers }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/disputerdetailview') }}">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">All Disputers</h1>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0">
                                            {{ $alldisputers }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>







                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/disputesdetail') }}">
                        <div class="card l-bg-cherry">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">Total Disputes</h1>
                                </div>
                                <div class="row align-items-center mb-2 text-center">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0 text-center">
                                            {{ $alldisputes }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/pendingdisputesdetail') }}">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">Pending Disputes</h1>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0">
                                            {{ $pendingdisputes }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/assigneddisputesdetail') }}">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">Assigned Disputes</h1>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0">
                                            {{ $dateassigneddisputes }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/dateassigneddisputedetail') }}">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">Date Assigned Disputes</h1>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0">
                                            {{ $assigneddisputes }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/inprogressdisputesdetail') }}">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">In Progress Disputes</h1>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0">
                                            {{ $inprogressdisputes }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-xl-6 col-lg-6">
                    <a href="{{ asset('/completeddisputesdetail') }}">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h1 class="card-title mb-0">Completed Disputes</h1>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col">
                                        <h3 class="align-items-center mb-0">
                                            {{ $completeddisputes }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>










            <div class="col-xl-6 col-lg-6 text-center">
                <a data-bs-toggle="modal" data-bs-target="#memberregisterModal">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Add New Members</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-6 col-lg-6 text-center">
                <a data-bs-toggle="modal" data-bs-target="#registerdisputerModal">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Add New Disputers</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div> <!-- Closing Div for .container class -->


    <style>
        a {
            text-decoration: none;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
        }

        .l-bg-cherry {
            background: linear-gradient(to right, #493240, #f09) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #0a504a, #38ef7d) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #a86008, #ffba56) !important;
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas,
        .card .card-statistic-3 .card-icon-large .far,
        .card .card-statistic-3 .card-icon-large .fab,
        .card .card-statistic-3 .card-icon-large .fal {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #000;
            position: absolute;
            right: -5px;
            top: 20px;
            opacity: 0.1;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .l-bg-green {
            background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
            color: #fff;
        }

        .l-bg-orange {
            background: linear-gradient(to right, #f9900e, #ffba56) !important;
            color: #fff;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }
    </style>
@endsection
