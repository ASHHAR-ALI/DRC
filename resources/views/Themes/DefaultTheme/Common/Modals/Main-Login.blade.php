<!-- -------------------------------------------Modal for All Login Signin Form------------------------------------------- -->


<div class="modal fade" id="allloginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="allloginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- <div class="modal-header justify-content-center text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            

            <div class="modal-body" style="background-image: url('{{ asset('/allassets/images/background/fp12.jpg') }}') ">
                <div class="container">
                    <div class="wrapper">
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Login </div>
                    <form class="row g-3" action="{{ asset('/login-all') }}" method="post" >
                        @csrf

                        <div class="col-md-12">
                            <label for="loginEmailInput" class="form-label">
                                Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" name="email" class="form-control" id="loginEmailInput" placeholder="Enter Email"
                                required />
                            <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        
                        <div class="col-md-12">
                            <label for="loginPasswordInput" class="form-label"> Password </label>
                            <input type="password" name="password" class="form-control" id="loginPasswordInput" placeholder="Enter Password"
                                required />
                            <div class="invalid-feedback">Please enter Password.</div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success mt-2" name="submit">SUBMIT</button>
                            <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














































{{-- <!-- -------------------------------------------Modal for All Login Signin Form------------------------------------------- -->


<div class="modal fade" id="allloginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="allloginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
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
                        <div class="text-center mt-4 name"> Login </div>

                        <!--  ---------------------Login Form For All ---------------------    -->
                        <form class="p-3 mt-1" action="{{ asset('/login-all') }}" method="post">
                            @csrf
                            
                            <div class="form-field d-flex align-items-center">
                                <span class="text-danger">*</span>
                                <span class="far fa-user"></span>
                                <input type="text" name="email" placeholder="Email" required>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="text-danger">*</span>
                                <span class="fas fa-key"></span>
                                <input type="password" name="password" placeholder="Password" required>
                                <span class="text-danger"></span>
                            </div>
                                <button type="submit" class="btn btn-success mt-2" name="submit">SUBMIT</button>
                                <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">CLOSE</button>
                        </form>
                        <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}























<!-- -------------------------------------------WITH SIMPLE Other THEME------------------------------------------- -->

{{-- <!-- -------------------------------------------Modal for All Login------------------------------------------- -->
<div class="modal fade" id="allloginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="allloginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <div class="container">
                    <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                    <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                        style="height: 80px; width: 150px; margin: auto;">
                    <div class="text-center mt-4 name"> Login </div>
                    <form action="{{ asset('/login-all') }}" method="post">
                        @csrf
                        <div class="col">
                            <div class="form-group row mt-5">
                                <label class="col-lg-3 col-form-label"><span class="text-danger">*</span>Email:</label>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        placeholder="Email" required="">
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
                        </div>

                        <div class="modal-footer mt-5">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}







<!-- -------------------------------------------WITH SIMPLE Contact Form THEME------------------------------------------- -->

{{-- <!-- -------------------------------------------Modal for All Login------------------------------------------- -->
<div class="modal fade" id="allloginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="allloginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="wrapper">
                        <div class="text-center mt-1 name text-danger"> Dispute Resolution Council </div>
                        <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
                            style="height: 80px; width: 150px; margin: auto;">
                        <div class="text-center mt-4 name"> Login </div>
                    <form class="row g-3" action="{{ asset('/login-all') }}" method="post" >
                        @csrf

                        <div class="col-md-12">
                            <label for="loginEmailInput" class="form-label">
                                Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" name="email" class="form-control" id="loginEmailInput" placeholder="Enter Email"
                                required />
                            <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        
                        <div class="col-md-12">
                            <label for="loginPasswordInput" class="form-label"> Password </label>
                            <input type="password" name="password" class="form-control" id="loginPasswordInput" placeholder="Enter Password"
                                required />
                            <div class="invalid-feedback">Please enter Password.</div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success mt-2" name="submit">SUBMIT</button>
                            <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
