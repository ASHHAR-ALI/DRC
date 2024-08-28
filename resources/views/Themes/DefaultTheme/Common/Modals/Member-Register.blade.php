<!-- -------------------------------------------Modal for Member Register Form
                                    WITH CONTACT FORM THEME------------------------------------------- -->


<!-- -------------------------------------------Modal for Member Register Form------------------------------------------- -->
<div class="modal fade" id="memberregisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="memberregisterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            {{-- <div class="modal-header justify-content-center text-center">
                <!-- <h5 class="modal-title text-center" id="memberregisterModalLabel">Add Member</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body" style="background-image: url('{{ asset('/allassets/images/background/fp12.jpg') }}') ">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                         <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Add Member </div>
                        
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body tablebg">
                                    <form class="row g-3" action="{{ asset('/register-member') }}" method="post" > <!-- Use novalidate in form if you dont want validation -->
                                        @csrf

                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberNameInput"  class="form-label">
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="name" placeholder="Enter Name" class="form-control" id="memberNameInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberFatherNameInput" class="form-label">
                                                Father Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="fathername" placeholder="Enter Father Name" class="form-control" id="memberFatherNameInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Father Name.</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="memberEmailInput" class="form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" name="email" placeholder="Enter Email" class="form-control" id="memberEmailInput"
                                                required />
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label for="memberPasswordInput" class="form-label"> Password </label>
                                            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="memberPasswordInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Password.</div>
                                        </div>


                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberCnicInput" class="form-label">CNIC</label>
                                            <input type="text" name="cnic" placeholder="Enter CNIC" class="form-control" maxlength="13" id="memberCnicInput"
                                                required />
                                            <div class="invalid-feedback">Please enter CNIC.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberContactInput" class="form-label">Phone</label>
                                            <input type="text" name="contactnumber" placeholder="Enter Phone" maxlength="11" class="form-control" id="memberContactInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Contact Number.</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="memberAddressInput" class="form-label">Address</label>
                                            <input type="text" name="address" placeholder="Enter Address" class="form-control" id="memberAddressInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Address.</div>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
                                            <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

























{{-- <!-- -------------------------------------------Modal for Member Register Form------------------------------------------- -->
<div class="modal fade" id="memberregisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="memberregisterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center text-center">
                <!-- <h5 class="modal-title text-center" id="memberregisterModalLabel">Add Member</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <!-- <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;"> -->
                        <div class="text-center mt-4 name"> Add Member </div>
                        <form class="p-3 mt-1" action="{{ asset('/register-member') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span><i class="material-icons">perm_identity</i></span>
                                    <input type="text" name="name" placeholder="Name" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <span class="text-danger">*</span>
                                    <input type="text" name="fathername" placeholder="Father Name" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span><i class="material-icons">email</i> </span>
                                    <input type="text" name="email" placeholder="Email" required>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span class="fas fa-key"></span>
                                    <input type="password" name="password" placeholder="Password" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span class="far fa-user"></span>
                                    <input type="text" name="cnic" placeholder="CNIC" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span class="fas fa-phone"></span>
                                    <input type="text" name="contactnumber" placeholder="Contact Number" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span class="far fa-address-book"></span>
                                    <input type="text" name="address" placeholder="Address" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>


                            <img class="slider-preview-image hidden">
                            <div class="uploader">
                                <div class="uniform-uploader"><input type="file"
                                        class="form-control-lg form-control-uniform" name="memberimage"
                                        accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);"><span
                                        class="filename" style="user-select: none;" required></span><span class="action"
                                        style="user-select: none;"></span>
                                </div>
                                <span class="help-text text-muted">Image dimension 120x80</span>
                            </div>

                            <!-- <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-file-image"></span>
                                    <input type="file" name="memberimage" placeholder="Member Image">
                                </div>
                            </div> -->

                            <div class="modal-footer mt-5 ">
                                <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                <!-- <a class="btn btn-primary " href="{{ asset('/memberdetailview') }}"> All Members</a> -->
                                <!-- <button class="btn btn-primary" data-bs-target="#memberdetailsModal" data-bs-toggle="modal"
                                data-bs-dismiss="modal">All Members</button> -->
                            </div>
                        </form>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


















{{-- <!-- -------------------------------------------Modal for Member Register Form
                                    WITH DIFFERENT THEME------------------------------------------- -->


<!-- -------------------------------------------Modal for Member Register Form------------------------------------------- -->
<div class="modal fade" id="memberregisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="memberregisterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center text-center">
                <!-- <h5 class="modal-title text-center" id="memberregisterModalLabel">Add Member</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <!-- <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;"> -->
                        <div class="text-center mt-4 name"> Add Member </div>
                        <form class="p-3 mt-1" action="{{ asset('/register-member') }}" method="post">
                            @csrf


                            <div class="col">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="name"
                                            placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Father
                                        Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="fathername"
                                            placeholder="Enter Father Name" required="">
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Email:</label>
                                    <div class="col-lg-9">
                                        <input type="email" class="form-control form-control-lg" name="email"
                                            placeholder="Enter Email" required="">
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Password:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="password"
                                            placeholder="Enter Password" required="">
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>CNIC:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="cnic"
                                            placeholder="Enter CNIC" required="">
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Contact
                                        Number:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="contactnumber"
                                            placeholder="Enter Contact Number" required="">
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label class="col-lg-3 col-form-label"><span
                                            class="text-danger">*</span>Address:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" name="address"
                                            placeholder="Enter Address" required="">
                                    </div>
                                </div>
                                <div class="modal-footer mt-5 ">
                                    <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">CLOSE</button>
                                    
                                    <!-- <a class="btn btn-primary " href="{{ asset('/memberdetailview') }}"> All Members</a> -->
                                    <!-- <button class="btn btn-primary" data-bs-target="#memberdetailsModal" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">All Members</button> -->
                                </div> 

                            </div>

                        </form>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}




































{{-- <!-- -------------------------------------------Modal for Member Register Form
                                    WITH CONTACT FORM THEME------------------------------------------- -->


<!-- -------------------------------------------Modal for Member Register Form------------------------------------------- -->
<div class="modal fade" id="memberregisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="memberregisterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center text-center">
                <!-- <h5 class="modal-title text-center" id="memberregisterModalLabel">Add Member</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <!-- <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;"> -->
                        <div class="text-center mt-4 name"> Add Member </div>
                        
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <form class="row g-3" action="{{ asset('/register-member') }}" method="post" > <!-- Use novalidate in form if you dont want validation -->
                                        @csrf

                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberNameInput"  class="form-label">
                                                First Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="name" class="form-control" id="memberNameInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberFatherNameInput" class="form-label">
                                                Last Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="fathername" class="form-control" id="memberFatherNameInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Father Name.</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="memberEmailInput" class="form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" name="email" class="form-control" id="memberEmailInput"
                                                required />
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label for="memberPasswordInput" class="form-label"> Password </label>
                                            <input type="password" name="password" class="form-control" id="memberPasswordInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Password.</div>
                                        </div>


                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberCnicInput" class="form-label">CNIC</label>
                                            <input type="text" name="cnic" class="form-control" id="memberCnicInput"
                                                required />
                                            <div class="invalid-feedback">Please enter CNIC.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="memberContactInput" class="form-label">Phone</label>
                                            <input type="text" name="contactnumber" class="form-control" id="memberContactInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Contact Number.</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="memberAddressInput" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" id="memberAddressInput"
                                                required />
                                            <div class="invalid-feedback">Please enter Address.</div>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
                                            <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
