<!-- -------------------------------------------Modal for Disputer Register Form By user------------------------------------------- -->
<div class="modal fade" id="insertdisputerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="insertdisputerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- <div class="modal-header justify-content-center text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Register Disputer </div>
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <form class="row g-3" action="{{ asset('/submit-registration') }}" method="post">
                                        @csrf

                                        <div class="col-lg-6 col-md-12">
                                            <label for="userNameInput" class="form-label">
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="name" class="form-control" id="userNameInput"
                                                placeholder="Enter Name" required />
                                            <div class="invalid-feedback">Please enter Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="userFatherNameInput" class="form-label"> Father Name </label>
                                            <input type="text" name="fathername" class="form-control"
                                                id="userFatherNameInput" placeholder="Enter Father Name" required />
                                            <div class="invalid-feedback">Please enter Father Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="userEmailInput" class="form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" name="email" class="form-control"
                                                id="userEmailInput" placeholder="Enter Email" required />
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="loginPasswordInput" class="form-label"> Password </label>
                                            <input type="password" name="password" class="form-control"
                                                id="loginPasswordInput" placeholder="Enter Password" required />
                                            <div class="invalid-feedback">Please enter Password.</div>
                                        </div>


                                        <div class="col-lg-4 col-md-12">
                                            <label for="userCnicInput" class="form-label">
                                                CNIC
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="cnic" class="form-control" id="userCnicInput"
                                                placeholder="Enter CNIC" required />
                                            <div class="invalid-feedback">Please enter CNIC.</div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <label for="userContactInput" class="form-label">
                                                Contact Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="contact" class="form-control"
                                                id="userContactInput" placeholder="Enter Contact" required />
                                            <div class="invalid-feedback">Please enter Contact.</div>
                                        </div>

                                        <!-- <div class="col-lg-6 col-md-12">
                                            <label for="userContactInput" class="form-label">
                                                Select Image
                                            </label>
                                            <img class="slider-preview-image hidden">
                                            <div class="uploader">
                                                <div class="uniform-uploader">
                                                    <input type="file" name="contact" class="form-control"
                                                        name="disputerimage" accept="image/x-png,image/gif,image/jpeg"
                                                        onchange="readURL(this);"><span class="filename"
                                                        style="user-select: none;" ></span><span
                                                        class="action" style="user-select: none;"></span>
                                                    <div class="invalid-feedback">Please selet Image.</div>
                                                </div>
                                                <span class="help-text text-muted">Image dimension 120x80</span>
                                            </div>
                                        </div> -->

                                        <!-- <img class="slider-preview-image hidden">
                                        <div class="uploader">
                                            <div class="uniform-uploader"><input type="file"
                                                    class="form-control-lg form-control-uniform" name="disputerimage"
                                                    accept="image/x-png,image/gif,image/jpeg"
                                                    onchange="readURL(this);"><span class="filename"
                                                    style="user-select: none;" required></span><span class="action"
                                                    style="user-select: none;"></span>
                                            </div>
                                            <span class="help-text text-muted">Image dimension 120x80</span>
                                        </div> -->


                                        <div class="col-lg-4 col-md-12">
                                            <label for="userAddressInput" class="form-label"> Address </label>
                                            <input type="text" name="address" class="form-control"
                                                id="userAddressInput" placeholder="Enter Address" required />
                                            <div class="invalid-feedback">Please enter Address.</div>
                                        </div>


                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonNameInput" class="form-label"> Dispute Person
                                                Name
                                            </label>
                                            <input type="text" name="dispute_person_name" class="form-control"
                                                id="disputerNameInput" placeholder="Enter Dispute Person Name"
                                                required />
                                            <div class="invalid-feedback">Please enter dispute Person Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonFatherNameInput" class="form-label">
                                                Dispute Person Father Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="dispute_person_father_name"
                                                class="form-control" id="disputePersonFatherNameInput"
                                                placeholder="Enter Dispute Person Father Name" required />
                                            <div class="invalid-feedback">Please enter Dispute Person Father Name.
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <label for="disputePersonContactInput" class="form-label"> Dispute Person
                                                Contact
                                            </label>
                                            <input type="text" name="dispute_person_contact_number"
                                                class="form-control" id="disputePersonContactInput"
                                                placeholder="Enter Dispute Person Contact" required />
                                            <div class="invalid-feedback">Please enter disputePerson Contact.</div>
                                        </div>


                                        <div class="col-lg-4 col-md-12">
                                            <label for="disputePersonAddressInput" class="form-label">
                                                Dispute Person Address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="dispute_person_address" class="form-control"
                                                id="disputePersonAddressInput"
                                                placeholder="Enter Dispute Person Address" required />
                                            <div class="invalid-feedback">Please enter disputePerson Address.</div>
                                        </div>


                                        <div class=" col-lg-4 col-md-12">
                                            <label for="disputePersonAddressInput" class="form-label">
                                                Select Dispute Type
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select d-flex align-items-center col"
                                                name="dispute_type" id="disputetype">
                                                @foreach ($disputeTypes as $types)
                                                <option value="{{$types->id}}">{{$types->dispute_type_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger"></span>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-success mt-2"
                                                name="submit">SUBMIT</button>
                                            <button type="button" class="btn btn-secondary mt-2"
                                                data-bs-dismiss="modal">CLOSE</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



























































<!-- -------------------------------------------Modal for Disputer Register Form By Admin------------------------------------------- -->
<div class="modal fade" id="registerdisputerModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="registerdisputerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center text-center">
                <h5 class="modal-title text-center" id="registerdisputerModalLabel">Disputer Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}"
                            class="rounded mx-auto d-block" style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Register Disputer </div>
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <form class="row g-3" action="{{ asset('/submit-registration') }}"
                                        method="post">
                                        @csrf

                                        <div class="col-lg-6 col-md-12">
                                            <label for="userNameInput" class="form-label">
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="name" class="form-control"
                                                id="userNameInput" placeholder="Enter Name" required />
                                            <div class="invalid-feedback">Please enter Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="userFatherNameInput" class="form-label"> Father Name </label>
                                            <input type="text" name="fathername" class="form-control"
                                                id="userFatherNameInput" placeholder="Enter Father Name" required />
                                            <div class="invalid-feedback">Please enter Father Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="userEmailInput" class="form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" name="email" class="form-control"
                                                id="userEmailInput" placeholder="Enter Email" required />
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="loginPasswordInput" class="form-label"> Password </label>
                                            <input type="password" name="password" class="form-control"
                                                id="loginPasswordInput" placeholder="Enter Password" required />
                                            <div class="invalid-feedback">Please enter Password.</div>
                                        </div>


                                        <div class="col-lg-4 col-md-12">
                                            <label for="userCnicInput" class="form-label">
                                                CNIC
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="cnic" class="form-control"
                                                id="userCnicInput" placeholder="Enter CNIC" required />
                                            <div class="invalid-feedback">Please enter CNIC.</div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <label for="userContactInput" class="form-label">
                                                Contact Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="contact" class="form-control"
                                                id="userContactInput" placeholder="Enter Contact" required />
                                            <div class="invalid-feedback">Please enter Contact.</div>
                                        </div>

                                        <!-- <div class="col-lg-6 col-md-12">
                                            <label for="userContactInput" class="form-label">
                                                Select Image
                                            </label>
                                            <img class="slider-preview-image hidden">
                                            <div class="uploader">
                                                <div class="uniform-uploader">
                                                    <input type="file" name="contact" class="form-control"
                                                        name="disputerimage" accept="image/x-png,image/gif,image/jpeg"
                                                        onchange="readURL(this);"><span class="filename"
                                                        style="user-select: none;" ></span><span
                                                        class="action" style="user-select: none;"></span>
                                                    <div class="invalid-feedback">Please selet Image.</div>
                                                </div>
                                                <span class="help-text text-muted">Image dimension 120x80</span>
                                            </div>
                                        </div> -->



                                        <!-- <img class="slider-preview-image hidden">
                                        <div class="uploader">
                                            <div class="uniform-uploader"><input type="file"
                                                    class="form-control-lg form-control-uniform" name="disputerimage"
                                                    accept="image/x-png,image/gif,image/jpeg"
                                                    onchange="readURL(this);"><span class="filename"
                                                    style="user-select: none;" required></span><span class="action"
                                                    style="user-select: none;"></span>
                                            </div>
                                            <span class="help-text text-muted">Image dimension 120x80</span>
                                        </div> -->



                                        <div class="col-lg-4 col-md-12">
                                            <label for="userAddressInput" class="form-label"> Address </label>
                                            <input type="text" name="address" class="form-control"
                                                id="userAddressInput" placeholder="Enter Address" required />
                                            <div class="invalid-feedback">Please enter Address.</div>
                                        </div>


                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonNameInput" class="form-label"> Dispute Person
                                                Name
                                            </label>
                                            <input type="text" name="dispute_person_name" class="form-control"
                                                id="disputerNameInput" placeholder="Enter Dispute Person Name"
                                                required />
                                            <div class="invalid-feedback">Please enter dispute Person Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonFatherNameInput" class="form-label">
                                                Dispute Person Father Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="dispute_person_father_name"
                                                class="form-control" id="disputePersonFatherNameInput"
                                                placeholder="Enter Dispute Person Father Name" required />
                                            <div class="invalid-feedback">Please enter Dispute Person Father Name.
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <label for="disputePersonContactInput" class="form-label"> Dispute Person
                                                Contact
                                            </label>
                                            <input type="text" name="dispute_person_contact_number"
                                                class="form-control" id="disputePersonContactInput"
                                                placeholder="Enter Dispute Person Contact" required />
                                            <div class="invalid-feedback">Please enter disputePerson Contact.</div>
                                        </div>


                                        <div class="col-lg-4 col-md-12">
                                            <label for="disputePersonAddressInput" class="form-label">
                                                Dispute Person Address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="dispute_person_address" class="form-control"
                                                id="disputePersonAddressInput"
                                                placeholder="Enter Dispute Person Address" required />
                                            <div class="invalid-feedback">Please enter disputePerson Address.</div>
                                        </div>


                                        <div class=" col-lg-4 col-md-12">
                                            <label for="disputePersonAddressInput" class="form-label">
                                                Select Dispute Type
                                                <span class="text-danger">*</span>
                                            </label>
                                            
                                            <select class="form-select d-flex align-items-center col"
                                                name="dispute_type" id="disputetype">
                                                @foreach ($disputeTypes as $types)
                                                <option value="{{$types->id}}">{{$types->dispute_type_name}}</option>
                                                @endforeach
                                            </select>

                                            <span class="text-danger"></span>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-success mt-2"
                                                name="submit">SUBMIT</button>
                                            <button type="button" class="btn btn-secondary mt-2"
                                                data-bs-dismiss="modal">CLOSE</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




























































































































{{-- <!-- -------------------------------------------Modal for Disputer Register Form By user------------------------------------------- -->
<div class="modal fade" id="insertdisputerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="insertdisputerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- <div class="modal-header justify-content-center text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Register Disputer </div>
                        <form class="p-1 mt-1" action="{{ asset('/submit-registration') }}" method="post"
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
                                    <span class="text-danger">*</span>
                                    <span class="far fa-user"></span>
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

                                <!-- <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-key"></span>
                                    <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
                                    <span class="text-danger"></span>
                                </div> -->
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
                                    <span class="far fa-address-book"></span>
                                    <input type="text" name="address" placeholder="Address" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span class="fas fa-phone"></span>
                                    <input type="text" name="contact" placeholder="Contact Number" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <img class="slider-preview-image hidden">
                            <div class="uploader">
                                <div class="uniform-uploader"><input type="file"
                                        class="form-control-lg form-control-uniform" name="disputerimage"
                                        accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);"><span
                                        class="filename" style="user-select: none;" required></span><span class="action"
                                        style="user-select: none;"></span>
                                </div>
                                <span class="help-text text-muted">Image dimension 120x80</span>
                            </div>
                            <!-- <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-file-image"></span>
                                    <input type="file" name="disputerimage" placeholder="Add Profile Image">
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span><i class="material-icons">perm_identity</i></span>
                                    <input type="text" name="dispute_person_name" placeholder="Disputer Name"
                                        required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="dispute_person_father_name"
                                        placeholder="Disputer Father Name" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-phone"></span>
                                    <input type="text" name="dispute_person_contact_number"
                                        placeholder="Dispute Person Contact Number" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-address-card"></span>
                                    <input type="text" name="dispute_person_address"
                                        placeholder="Dispute Person Address" required>
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
                            <button type="submit" class="btn btn-success mt-2" name="submit">Submit</button>
                            <button type="button" class="btn btn-secondary mt-2"
                                data-bs-dismiss="modal">Close</button>

                        </form>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<!-- -------------------------------------------Modal for Disputer Register Form By Admin------------------------------------------- -->
<div class="modal fade" id="registerdisputerModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="registerdisputerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center text-center">
                <h5 class="modal-title text-center" id="registerdisputerModalLabel">Disputer Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <!-- <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;"> -->
                        <div class="text-center mt-4 name"> Add Disputer </div>
                        <form class="p-1 mt-1" action="{{ asset('/insert-disputer') }}" method="post"
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
                                    <span class="text-danger">*</span>
                                    <span class="far fa-user"></span>
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

                                <!-- <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-key"></span>
                                    <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
                                    <span class="text-danger"></span>
                                </div> -->
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
                                    <span class="far fa-address-book"></span>
                                    <input type="text" name="address" placeholder="Address" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="text-danger">*</span>
                                    <span class="fas fa-phone"></span>
                                    <input type="text" name="contact" placeholder="Contact Number" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>


                            <div class="row">
                                <img class="slider-preview-image hidden">
                                <div class="uploader">
                                    <div class="uniform-uploader"><input type="file"
                                            class="form-control-lg form-control-uniform" name="disputerimage"
                                            accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);"><span
                                            class="filename" style="user-select: none;" required></span><span
                                            class="action" style="user-select: none;"></span>
                                    </div>
                                    <span class="help-text text-muted">Image dimension 120x80</span>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-file-image"></span>
                                    <input type="file" name="disputerimage" placeholder="Add Profile Image">
                                </div>
                            </div> -->


                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span><i class="material-icons">perm_identity</i></span>
                                    <input type="text" name="dispute_person_name" placeholder="Disputer Name"
                                        required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="dispute_person_father_name"
                                        placeholder="Disputer Father Name" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-phone"></span>
                                    <input type="text" name="dispute_person_contact_number"
                                        placeholder="Dispute Person Contact Number" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-address-card"></span>
                                    <input type="text" name="dispute_person_address"
                                        placeholder="Dispute Person Address" required>
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
                            <button type="submit" class="btn btn-success mt-2" name="submit">Submit</button>
                            <button type="button" class="btn btn-secondary mt-2"
                                data-bs-dismiss="modal">Close</button>

                        </form>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}







































<!-- CONTACT Form Theme -->


{{-- <!-- -------------------------------------------Modal FORM THEME FOR REGISTRATION------------------------------------------- -->
<div class="modal-body">
    <div class="container">
        <div class="wrapper">
            <div class="logo"></div>
            <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
            <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                style="height: 80px; width: 150px; margin: auto;">
            <div class="text-center mt-4 name"> Register Disputer </div>
            <div class="col-md-12 col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form class="row g-3" action="{{ asset('/submit-registration') }}" method="post">
                            @csrf

                            <div class="col-lg-6 col-md-12">
                                <label for="userNameInput" class="form-label">
                                    Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name" class="form-control"
                                    id="userNameInput" placeholder="Enter Name" required />
                                <div class="invalid-feedback">Please enter Name.</div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <label for="userFatherNameInput" class="form-label"> Father Name </label>
                                <input type="text" name="fathername" class="form-control"
                                    id="userFatherNameInput" placeholder="Enter Father Name" required />
                                <div class="invalid-feedback">Please enter Father Name.</div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <label for="userEmailInput" class="form-label">
                                    Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" name="email" class="form-control"
                                    id="userEmailInput" placeholder="Enter Email" required />
                                <div class="invalid-feedback">Please enter email.</div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <label for="loginPasswordInput" class="form-label"> Password </label>
                                <input type="password" name="password" class="form-control"
                                    id="loginPasswordInput" placeholder="Enter Password" required />
                                <div class="invalid-feedback">Please enter Password.</div>
                            </div>


                            <div class="col-lg-4 col-md-12">
                                <label for="userCnicInput" class="form-label">
                                    CNIC
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="cnic" class="form-control"
                                    id="userCnicInput" placeholder="Enter CNIC" required />
                                <div class="invalid-feedback">Please enter CNIC.</div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="userContactInput" class="form-label">
                                    Contact Number
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="contact" class="form-control"
                                    id="userContactInput" placeholder="Enter Contact" required />
                                <div class="invalid-feedback">Please enter Contact.</div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="userAddressInput" class="form-label"> Address </label>
                                <input type="text" name="address" class="form-control"
                                    id="userAddressInput" placeholder="Enter Address" required />
                                <div class="invalid-feedback">Please enter Address.</div>
                            </div>


                            <div class="col-lg-6 col-md-12">
                                <label for="disputePersonNameInput" class="form-label"> Dispute Person Name
                                </label>
                                <input type="text" name="dispute_person_name" class="form-control"
                                    id="disputerNameInput" placeholder="Enter Dispute Person Name"
                                    required />
                                <div class="invalid-feedback">Please enter dispute Person Name.</div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <label for="disputePersonFatherNameInput" class="form-label">
                                    Dispute Person Father Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="dispute_person_father_name"
                                    class="form-control" id="disputePersonFatherNameInput"
                                    placeholder="Enter Dispute Person Father Name" required />
                                <div class="invalid-feedback">Please enter Dispute Person Father Name.</div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="disputePersonContactInput" class="form-label"> Dispute Person
                                    Contact
                                </label>
                                <input type="text" name="dispute_person_contact_number"
                                    class="form-control" id="disputePersonContactInput"
                                    placeholder="Enter Dispute Person Contact" required />
                                <div class="invalid-feedback">Please enter disputePerson Contact.</div>
                            </div>


                            <div class="col-lg-4 col-md-12">
                                <label for="disputePersonAddressInput" class="form-label">
                                    Dispute Person Address
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="dispute_person_address" class="form-control"
                                    id="disputePersonAddressInput"
                                    placeholder="Enter Dispute Person Address" required />
                                <div class="invalid-feedback">Please enter disputePerson Address.</div>
                            </div>


                            <div class=" col-lg-4 col-md-12">
                                <label for="disputePersonAddressInput" class="form-label">
                                    Select Dispute Type
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select d-flex align-items-center col"
                                    name="dispute_type" id="disputetype">
                                    <option value="money">Money/Loan</option>
                                    <option value="home">Home</option>
                                    <option value="land">Land</option>
                                    <option value="vehicle">Vehice</option>
                                    <option value="assault">Assault</option>
                                    <option value="others">Others</option>
                                </select>
                                <span class="text-danger"></span>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mt-2"
                                    name="submit">SUBMIT</button>
                                <button type="button" class="btn btn-secondary mt-2"
                                    data-bs-dismiss="modal">CLOSE</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
