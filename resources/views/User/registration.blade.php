@extends('welcome')


@section('title', 'Registration')


@section('content')






<div class="container-fluid">
    <div class="wrapper">
        <div class="text-center mt-4 name text-danger"> Dispute Resolution Council </div>
        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
            style="height: 50px; width: 90px; margin: auto;">
        <div class="text-center mt-4 name"> User Registration </div>
        <form class="p-1 mt-1" id="login-form" action="{{ asset('/submit-registration') }}" method="post">
            @csrf
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="name" placeholder="Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="fathername" placeholder="Father Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="email" placeholder="Email">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" placeholder="Password">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="fas fa-key"></span>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="cnic" placeholder="CNIC">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="address" placeholder="Address">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="contact" placeholder="Contact Number">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="dispute_person_name" placeholder="Disputer Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="dispute_person_father_name" placeholder="Disputer Father Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="dispute_person_contact_number"
                        placeholder="Dispute Person Contact Number">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="dispute_person_address"
                        placeholder="Dispute Person Address">
                    <span class="text-danger"></span>
                </div>
                <div class="d-flex align-items-center col">
                    <select class="form-select d-flex align-items-center col" name="dispute_type"
                        id="disputetype">
                        <option value="money">Money/Loan</option>
                        <option value="home">Home</option>
                        <option value="land">Land</option>
                        <option value="vehicle">Vehice</option>
                        <option value="assault">Assault</option>
                        <option value="others">Others</option>
                    </select>
                    <span class="text-danger"></span>
                </div>
            </div>
            <button class="btn mt-3 mb-3" name="submit">Sign Up</button>
        </form>
        <div class="text-center fs-6">
            <p>Already have an account <a data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Sign in</a> </p>
        </div>
    </div>
</div>





    {{-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Show a second modal and hide this one with the button below.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Open second modal</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Hide this modal and show the first with the button below.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Back to first</button>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> --}}






















    {{-- <div class="wrapper">
        <div class="text-center mt-4 name text-danger"> Dispute Resolution Council </div>
        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
            style="height: 50px; width: 90px; margin: auto;">
        <div class="text-center mt-4 name"> User Registration </div>
        <form class="p-3 mt-3" id="login-form" action="{{ asset('/') }}" method="get"> <!-- Change the Method to POST -->
            @csrf
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="name" placeholder="Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="fathername" placeholder="Father Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="email" placeholder="Email">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" placeholder="Password">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="fas fa-key"></span>
                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="cnic" placeholder="CNIC">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="address" placeholder="Address">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="contact" placeholder="Contact Number">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="disputername" placeholder="Disputer Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="disputerfather" placeholder="Disputer Father Name">
                    <span class="text-danger"></span>
                </div>
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="disputercontact" placeholder="Dispute Person Contact Number">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-field d-flex align-items-center col">
                    <span class="far fa-user"></span>
                    <input type="text" name="disputeraddress" placeholder="Dispute Person Address">
                    <span class="text-danger"></span>
                </div>
                <div class="d-flex align-items-center col">
                    <select class="form-select d-flex align-items-center col" name="disputetype" id="disputetype">
                        <option value="money">Money/Loan</option>
                        <option value="home">Home</option>
                        <option value="land">Land</option>
                        <option value="vehicle">Vehice</option>
                        <option value="assault">Assault</option>
                        <option value="others">Others</option>
                    </select>
                    <span class="text-danger"></span>
                </div>
            </div>
            <button class="btn mt-3 mb-3" name="submit">Login</button>
        </form>
        <div class="text-center fs-6">
            <p>Already have an account <a href="#">Sign in</a> </p>
        </div>
    </div> --}}








    {{-- <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Request a Demo</h3>
                <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.
                </p>
                <div class="card">
                    <h5 class="text-center mb-4">Powering world-class companies</h5>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">First name
                                    <span class="text-danger"> *</span></label> <input type="text" id="fname"
                                    name="fname" placeholder="Enter your first name" onblur="validate(1)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Last name
                                    <span class="text-danger"> *</span></label> <input type="text" id="lname"
                                    name="lname" placeholder="Enter your last name" onblur="validate(2)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Business email
                                    <span class="text-danger">
                                        *</span></label> <input type="text" id="email" name="email" placeholder=""
                                    onblur="validate(3)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Phone number
                                    <span class="text-danger">
                                        *</span></label>
                                <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Job title
                                    <span class="text-danger"> *</span></label> <input type="text" id="job"
                                    name="job" placeholder="" onblur="validate(5)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">What would you be using Flinks for?
                                    <span class="text-danger"> *</span></label> <input type="text" id="ans"
                                    name="ans" placeholder="" onblur="validate(6)">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Request a
                                    demo</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- <style>
        .wrapper {
            /* max-width: 1170px; */
            max-width: 80%;
            min-height: 500px;
            margin: 10px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
        }

        .logo {
            width: 80px;
            margin: auto
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 40px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
        }

        .wrapper .form-field .fas {
            color: #555
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
            letter-spacing: 1.3px
        }

        .wrapper .btn:hover {
            background-color: #039BE5
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4
        }

        .wrapper a:hover {
            color: #039BE5
        }

        .wrapper select {
            width: calc(100% - 10);
            /* Adjust the width as needed */
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px;
            margin-bottom: 20px;
            border-radius: 40px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;

            wrapper option {
                width: 100%;
                display: block;
                border: none;
                outline: none;
                background: none;
                font-size: 1.2rem;
                color: #666;
                padding: 10px 15px 10px 10px;
                margin-bottom: 10px;
                border-radius: 40px;
                box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
            }
        }


        @media(max-width: 400px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px
            }
        }
    </style> --}}
@endsection
