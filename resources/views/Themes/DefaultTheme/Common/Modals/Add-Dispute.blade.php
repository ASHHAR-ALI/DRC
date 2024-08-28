<!-- -------------------------------------------Modal for Disputer Register Form By user------------------------------------------- -->
<div class="modal fade" id="addDisputeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addDisputeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- <div class="modal-header justify-content-center text-center">
                <h5 class="modal-title text-center" id="addDisputeModalLabel">Add The New Dispute Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body" style="background-image: url('{{ asset('/allassets/images/background/fp12.jpg') }}') ">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name text-success"> File New Dispute </div>
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body tablebg">
                                    <form class="row g-3" action="{{ asset('/add-dispute') }}" method="post">
                                        @csrf

                                        

                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonNameInput" class="form-label"> Dispute Person
                                                Name
                                            </label>
                                            <input type="text" name="dispute_person_name" class="form-control"
                                                id="disputerNameInput" placeholder="Enter Dispute Person Name" />
                                            <div class="invalid-feedback">Please enter dispute Person Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonFatherNameInput" class="form-label">
                                                Dispute Person Father Name
                                                <!-- <span class="text-danger">*</span> -->
                                            </label>
                                            <input type="text" name="dispute_person_father_name"
                                                class="form-control" id="disputePersonFatherNameInput"
                                                placeholder="Enter Dispute Person Father Name" required />
                                            <div class="invalid-feedback">Please enter Dispute Person Father Name.
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonContactInput" class="form-label"> Dispute Person
                                                Contact
                                            </label>
                                            <input type="text" name="dispute_person_contact_number"
                                                class="form-control" id="disputePersonContactInput" maxlength="11"
                                                placeholder="Enter Dispute Person Contact" required />
                                            <div class="invalid-feedback">Please enter disputePerson Contact.</div>
                                        </div>


                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonAddressInput" class="form-label">
                                                Dispute Person Address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="dispute_person_address" class="form-control"
                                                id="disputePersonAddressInput"
                                                placeholder="Enter Dispute Person Address" required />
                                            <div class="invalid-feedback">Please enter disputePerson Address.</div>
                                        </div>


                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonEmailInput" class="form-label">
                                                Dispute Person Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" name="email" class="form-control"
                                                id="disputePersonEmailInput"
                                                placeholder="Enter Dispute Person Email" required />
                                            <div class="invalid-feedback">Please enter disputePerson Email.</div>
                                        </div>



                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonPasswordInput" class="form-label">
                                                Dispute Person Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="password" name="password" class="form-control"
                                                id="disputePersonPasswordInput"
                                                placeholder="Enter Dispute Person Password" required />
                                            <div class="invalid-feedback">Please enter dispute Person Password.</div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-12">
                                            <label for="disputePersonCnicInput" class="form-label">
                                                Dispute Person Cnic
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="dispute_person_cnic" maxlength="14" class="form-control"
                                                id="disputePersonCnicInput"
                                                placeholder="Enter Dispute Person Cnic" required />
                                            <div class="invalid-feedback">Please enter dispute Person Cnic.</div>
                                        </div>

                                        <div class=" col-lg-4 col-md-12">
                                            <label for="disputePersonAddressInput" class="form-label">
                                                Select Dispute Type
                                                <span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select d-flex align-items-center col text-danger"
                                                name="dispute_type" id="disputetype">
                                                @foreach ($disputeTypes as $types)
                                                    <option class="bg-dark" value="{{ $types->id }}">{{ $types->dispute_type_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="d-grid ">
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















