@extends('welcome')


@section('title', 'Edit Member')

@section('content')
    <div class="container-fluid">



        <div class="container">
            <div class="wrapper">
                <div class="logo"></div>
                {{-- <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                <img src="{{ asset('/allassets/DefaultTheme/images/DRC.png') }}" class="rounded mx-auto d-block"
                    style="height: 80px; width: 150px; margin: auto;"> --}}
                <div class="text-center mt-4 name"> Update Member </div>
                <form class="p-3 mt-1" action="{{ asset('/updatemember/'.$members->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="name" value="{{ $members->name}}" required>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="fathername" value="{{ $members->fathername}}"  required>
                            <span class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="email" value="{{ $members->email}}"  required>
                            <span class="text-danger"></span>
                        </div>

                        <!-- <div class="form-field d-flex align-items-center col">
                            <span class="fas fa-key"></span>
                            <input type="password" name="password" value="{{ $members->password}}"  required>
                            <span class="text-danger"></span>
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="cnic" value="{{ $members->cnic}}"  required>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="contactnumber" value="{{ $members->contactnumber}}"  required>
                            <span class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="address" value="{{ $members->address}}"  required>
                        </div>
                    </div>


                    <img class="slider-preview-image hidden">
                    <div class="uploader">
                        <div class="uniform-uploader"><input type="file" class="form-control-lg form-control-uniform"
                                name="memberimage" accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);"><span
                                class="filename" style="user-select: none;" required></span><span
                                class="action" style="user-select: none;"></span>
                            </div>
                        <span class="help-text text-muted">Image dimension 160x117</span>
                    </div>

                    {{-- <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="fas fa-file-image"></span>
                            <input type="file" name="memberimage"cvalue="{{ $members->memberimage}}" placeholder="Member Image">
                        </div>
                    </div> --}}

                        <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
                </form>
                <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
            </div>
        </div>



</div> <!-- Closing Div for .container class -->
@endsection
