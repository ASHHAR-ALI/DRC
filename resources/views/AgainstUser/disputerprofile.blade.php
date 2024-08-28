@extends('welcome')

@section('title', 'My Profile')

@section('content')
    <div class="container">


        <section {{-- style="background-color: #373737;" --}}>

            <div class="row mt-4">


                <div class="row">
                    <div class="col">
                        <h1 class="text-center">My Profile</h1>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">

                    <div class="card mb-4">
                        <div class="card-body text-center" style="background-color: #796f5c;">
                            @if ($disputers->againstdisputerimage)
                                <img src="{{ asset('/allassets/images/ActorsDetails/againstdisputers/' . $disputers->againstdisputerimage) }}"
                                    alt="profile image" class=" img-fluid"  style="height:125px; width: 140px;">
                            @else
                                <img src="{{ asset('/allassets/images/d1.jpeg') }}" alt="profile image"
                                    class=" img-fluid"  style="height:125px; width: 140px;">
                            @endif
                            <h5 class="my-3 text-warning">{{ $disputers->dispute_person_name }}</h5>
                            <p class="mb-1">Member at DRC Portal | Full Stack Developer</p>
                            <p class="mb-4">{{ $disputers->dispute_person_address }}</p>

                            <div class="d-flex justify-content-center mb-2">
                                <a type="button" class="btn btn-primary"
                                    href="{{ asset('/editagainstdisputerprofile/' . $disputers->id) }}">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-8 mt-4">
                    <div class="card mb-4">
                        <div class="card-body" style="background-color: #796f5c;">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 text-warning">Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $disputers->dispute_person_name }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 text-warning">Father Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $disputers->dispute_person_father_name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 text-warning">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $disputers->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 text-warning">CNIC</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $disputers->dispute_person_cnic }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 text-warning">Contact</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $disputers->dispute_person_contact_number }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 text-warning">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $disputers->dispute_person_address }}</p>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </section>


    </div>
@endsection
