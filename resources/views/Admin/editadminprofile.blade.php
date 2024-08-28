@extends('welcome')

@section('title', 'Edit Profile')

@section('content')




                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/DefaultTheme/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Update Profile </div>

                        <!--  ---------------------Update Admin Profile ---------------------    -->
                        <form class="p-3 mt-1" action="{{ asset('/updateadminprofile/'.$admins->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                <input type="text" name="name" value="{{ $admins->name }}" >
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span ><i class="material-icons">email</i> </span>
                                <input type="text" name="email" value="{{ $admins->email }}">
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="fas fa-key"></span>
                                <input type="password" name="password" id="password" placeholder="Enter New Password" required>
                                <span class="text-danger"></span>   
                               <!--  <button class="btn btn-danger btn-small" type="button" id="togglePasswordInput">Enable Password</button> -->
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                <input type="text" name="cnic" value="{{ $admins->cnic }}" >
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="fas fa-phone"></span>
                                <input type="text" name="phone"  value="{{ $admins->phone }}">
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-address-book"></span>
                                <input type="text" name="address" value="{{ $admins->address }}">
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-field d-flex align-items-center">
                                <span class="fas fa-file-image"></span>
                                <input type="file" name="adminimage" value="{{ $admins->adminimage }}">
                            </div>

                                <button type="submit" class="btn btn-success mt-2" name="submit">SUBMIT</button>
                                <a type="button" class="btn btn-secondary mt-2" href="{{asset('/adminprofile')}}" >RETURN BACK</a>
                        </form>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
       
    


<!-- <script>
      // Toggle password input field
      document.getElementById("togglePasswordInput").addEventListener("click", function() {
        var passwordField = document.getElementById("password");
        if (passwordField.disabled) {
            passwordField.disabled = false;
            this.textContent = "Disable Password";
        } else {
            passwordField.disabled = true;
            this.textContent = "Enable Password";
        }
    });
</script> -->


@endsection