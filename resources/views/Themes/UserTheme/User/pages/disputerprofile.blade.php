@extends('User.layout.default')

@section('title', 'My Profile')

@section('content')
    <div class="container">


        <section style="background-color: #eee;">

            <div class="row mt-4">


                <div class="row">
                    <div class="col">
                        <h1 class="text-center">My Profile</h1>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">

                    <div class="card mb-4">
                        <div class="card-body text-center">
                            @if ($disputers->disputerimage)
                                <img src="{{ asset('/public/allassets/images/ActorsDetails/disputers/' . $disputers->disputerimage) }}"
                                    alt="profile image" class=" img-fluid" style="width: 150px;">
                            @else
                                <img src="{{ asset('/public/allassets/images/DRC.png') }}" alt="profile image"
                                    class=" img-fluid" style="width: 150px;">
                            @endif
                            <h5 class="my-3">{{ $disputers->name }}</h5>
                            <p class="text-muted mb-1">{{ $disputers->email }}</p>
                            <p class="text-muted mb-4">{{ $disputers->address }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a type="button" class="btn btn-primary"
                                    href="{{ asset('/editdisputerprofile/' . $disputers->id) }}">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-8 mt-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $disputers->name }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Father Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $disputers->fathername }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $disputers->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">CNIC</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $disputers->cnic }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Contact</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $disputers->contact }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $disputers->address }}</p>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </section>


    </div>
@endsection
