






{{-- With different Form Theme --}}

<!-- Double Modal Structure of DISPUTER LOGIN and Registration Form in one MODAL -->
<div class="modal fade" id="disputerloginsModalToggle" data-bs-backdrop="static" aria-hidden="true"
    aria-labelledby="disputerloginsModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="disputerloginsModalToggleLabel">Disputer Signin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name">User Login </div>

                        <!-- Include the Flash_Message or Fail_Message Function File -->

                        <form class="p-3 mt-1" action="{{ asset('/disputer-login') }}" method="post">
                            @csrf

                            <div class="row mt-3">
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Email:</label>
                                    <div class="col-lg-9">
                                        <input type="email" class="form-control form-control-lg" name="email"
                                            placeholder="Email" required="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Password:</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control form-control-lg" name="password"
                                            placeholder="Enter Password" required="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal-footer mt-5 ">
                                <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                <button class="btn btn-primary" data-bs-target="#disputerregisterModalToggle"
                                    data-bs-toggle="modal">Signup</button>
                                <button type="button" class="btn btn-secondary mt-3"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#disputerregisterModalToggle" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Open second modal</button>
            </div> -->
        </div>
    </div>
</div>


































<div class="modal fade" id="disputerregisterModalToggle" aria-hidden="true" data-bs-backdrop="static"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Disputer Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>  -->
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 50px; width: 90px; margin: auto;">
                        <div class="text-center mt-4 name"> User Registration </div>

                        <!-- Include the Flash_Message or Fail_Message Function File -->

                        <form class="p-1 mt-1" action="{{ asset('/submit-registration') }}" method="post">
                            @csrf

                            <div class="row mt-3">
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="name"
                                            placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Father
                                        Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="fathername"
                                            placeholder="Enter Father Name" required="">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col ">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>CNIC:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="cnic"
                                            placeholder="Enter CNIC (without dashes)" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Password:</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control form-control-lg" name="password"
                                            placeholder="Enter Password" required="">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col ">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Confirm
                                        Password:</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control form-control-lg"
                                            name="confirmpassword" placeholder="Enter Confirm Password"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Email:</label>
                                    <div class="col-lg-9">
                                        <input type="email" class="form-control form-control-lg" name="email"
                                            placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col ">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Contact
                                        Number:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="contact" placeholder="Enter Contact Number" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Address:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="address"
                                            placeholder="Enter Address" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex align-items-center col ">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Disputer
                                        Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="dispute_person_name" placeholder="Enter Disputer Name"
                                            required="">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Disputer
                                        Father Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="dispute_person_father_name" placeholder="Enter Disputer Father Name"
                                            required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="d-flex align-items-center col">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Dispute
                                        Person Address:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="dispute_person_address" placeholder="Enter Dispute Person Address"
                                            required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="d-flex align-items-center col ">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Dispute
                                        Person Contact
                                        Number:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg"
                                            name="dispute_person_contact_number"
                                            placeholder="Enter Dispute Person Contact Number" required="">
                                    </div>
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

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                <button class="btn btn-primary" data-bs-target="#disputerloginsModalToggle"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">Back to Signin</button>
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>

                            </div>
                        </form>
                        <div class="text-center fs-6">
                            <p>Already have an account <a data-bs-target="#disputerloginsModalToggle"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">Sign in</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






