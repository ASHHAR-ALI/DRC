@extends('welcome')

@section('title', 'Edit Profile')

@section('content')
<div class="container">

    <div class="wrapper">
        <div class="logo"></div>
        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
            style="height: 80px; width: 150px; margin: auto;">
        <div class="text-center mt-4 name"> Update Profile </div>

        <!--  ---------------------Update Admin Profile ---------------------    -->
        <form class="p-3 mt-1" action="{{ asset('/updatememberprofile/'.$members->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name" value="{{ $members->name }}" >
                <span class="text-danger"></span>
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="fathername" value="{{ $members->fathername }}" >
                <span class="text-danger"></span>
            </div>

            <div class="form-field d-flex align-items-center">
                <span ><i class="material-icons">email</i> </span>
                <input type="text" name="email" value="{{ $members->email }}">
                <span class="text-danger"></span>
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Enter New Password" required>
                <span class="text-danger"></span>   
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="cnic" value="{{ $members->cnic }}" >
                <span class="text-danger"></span>
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-phone"></span>
                <input type="text" name="contactnumber"  value="{{ $members->contactnumber }}">
                <span class="text-danger"></span>
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-address-book"></span>
                <input type="text" name="address" value="{{ $members->address }}">
                <span class="text-danger"></span>
            </div>

            <img class="slider-preview-image hidden">
                    <div class="uploader">
                        <div class="uniform-uploader"><input type="file" class="form-control-lg form-control-uniform"
                                name="memberimage" accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);"><span
                                class="filename" style="user-select: none;" required></span><span
                                class="action" style="user-select: none;"></span>
                            </div>
                        <span class="help-text text-muted">Image dimension 120x80</span>
                    </div>

                <button type="submit" class="btn btn-success mt-2" name="submit">SUBMIT</button>
                <a type="button" class="btn btn-secondary mt-2" href="{{asset('/memberprofile')}}" >RETURN BACK</a>
        </form>
        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
    </div>

</div>
@endsection