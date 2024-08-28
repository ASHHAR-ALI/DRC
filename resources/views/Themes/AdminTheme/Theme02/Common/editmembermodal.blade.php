
<!-- -------------------------------------------Modal for Member Register Form------------------------------------------- -->
<div class="modal fade" id="editmemberModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editmemberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center text-center">
                <!-- <h5 class="modal-title text-center" id="editmemberModalLabel">Add Member</h5> --> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Add Member </div>
                        <form class="p-3 mt-1" action="{{ asset('/register-member') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="name" placeholder="Name" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="fathername" placeholder="Father Name" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="email" placeholder="Email" required>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-field d-flex align-items-center col">
                                    <span class="fas fa-key"></span>
                                    <input type="password" name="password" placeholder="Password" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="cnic" placeholder="CNIC" required>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="contactnumber" placeholder="Contact Number" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-field d-flex align-items-center col">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="address" placeholder="Address" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="modal-footer mt-5 ">
                                <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                {{-- <button class="btn btn-primary" data-bs-target="#memberdetailsModal" data-bs-toggle="modal"
                                data-bs-dismiss="modal">All Members</button> --}}
                            </div>
                        </form>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>