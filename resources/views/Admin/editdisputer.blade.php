@extends('welcome')


@section('title', 'Edit User')

@section('content')
    <div class="container-fluid">



        <div class="container">
            <div class="wrapper">
                <div class="logo"></div>
                {{-- <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                <img src="{{ asset('public/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                    style="height: 80px; width: 150px; margin: auto;"> --}}
                <div class="text-center mt-4 name"> Update Disputer </div>
                <form class="p-3 mt-1" action="{{ asset('/updatedisputer/' . $disputers->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="name" value="{{ $disputers->name }}" required>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="fathername" value="{{ $disputers->fathername }}" required>
                            <span class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="email" value="{{ $disputers->email }}" required>
                            <span class="text-danger"></span>
                        </div>

                        <!-- <div class="form-field d-flex align-items-center col">
                                <span class="fas fa-key"></span>
                                <input type="password" name="password" value="{{ $disputers->password }}"  required>
                                <span class="text-danger"></span>
                            </div> -->
                    </div>

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="cnic" value="{{ $disputers->cnic }}" required>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="contact" value="{{ $disputers->contact }}" required>
                            <span class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="text" name="address" value="{{ $disputers->address }}" required>
                            <span class="text-danger"></span>
                        </div>
                    </div>

                    <img class="slider-preview-image hidden">
                    <div class="uploader">
                        <div class="uniform-uploader"><input type="file" class="form-control-lg form-control-uniform"
                                name="disputerimage" accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);"><span
                                class="filename" style="user-select: none;" required></span><span
                                class="action" style="user-select: none;"></span>
                            </div>
                        <span class="help-text text-muted">Image dimension 160x117</span>
                    </div>
                    

                    {{-- <div class="row">
                        <div class="form-field d-flex align-items-center col">
                            <span class="far fa-user"></span>
                            <input type="file" name="disputerimage" value="{{ $disputers->disputerimage }}" required>
                        </div>
                    </div> --}}

                    <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
                </form>
                <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
            </div>
        </div>



    </div> <!-- Closing Div for .container class -->
@endsection
