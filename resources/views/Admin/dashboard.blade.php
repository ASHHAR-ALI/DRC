@extends('welcome')


@section('title', 'dashboard')


@section('content')
    <div class="container">


        <div class="col-1"></div>
        <div class="col-10 d-flex justify-content-center mx-auto">
            {{-- <div class="row mt-5">
            <div class="col-6 mb-4 mb-sm-0">
                <div class="card">
                    <div class="card-body text-center">
                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#completedisputesModal">
                            <h3 class="card-title">Completed Cases</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#disputerregisterModal">Add Members</a>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-6 mb-4 mb-sm-0">
                <div class="card">
                    <div class="card-body text-center">
                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#pendingdisputesModal">
                            <h3 class="card-title">Pending Cases</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#memberregisterModal">Add Disputer</a>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}



            <div class="row mt-5">
                <div class="col-6 mb-4 mb-sm-0">
                    <div class="card">
                        <div class="card-body text-center">
                            {{-- <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#memberdetailsModal"> --}}
                                <a class="btn btn-secondary" href="{{asset('/memberdetailview')}}">
                                <h3 class="card-title">All Members</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a class="btn btn-primary mt-3" data-bs-toggle="modal"
                                    data-bs-target="#memberregisterModal">Add Member</a>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-4 mb-sm-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <!-- <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#disputerdetailsModal"> -->
                                <a class="btn btn-secondary" href="{{asset('/disputerdetailview')}}">
                                <h3 class="card-title">All Disputers</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a class="btn btn-primary mt-3" data-bs-toggle="modal"
                                    data-bs-target="#disputerregisterModal">Add Disputer</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-1"></div>



       






    </div> <!-- Closing Div for .container class -->
@endsection

























{{-- <div class="col-1"></div>
<div class="col-10 justify-item-center">
    <div class="row mt-5">
        <div class="col-6 mb-4 mb-sm-0">
            <div class="card">
                <div class="card-body text-center">
                    <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#memberdetailsModal">
                        <h3 class="card-title">All Members</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#memberregisterModal">Add
                            Members</a>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 mb-4 mb-sm-0">
            <div class="card">
                <div class="card-body text-center">
                    <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#disputerdetailsModal">
                        <h3 class="card-title">All Disputer</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a class="btn btn-primary mt-3" data-bs-toggle="modal"
                            data-bs-target="#disputerregisterModal">Add Disputer</a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-1"></div> --}}
