<!-- -------------------------------------------Modal for Them Creation Form By ------------------------------------------- -->
<div class="modal fade" id="createThemeModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="createThemeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center text-center">
                <h5 class="modal-title text-center" id="createThemeModalLabel">Create New Theme</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-image: url('{{ asset('/allassets/images/background/fp12.jpg') }}') ">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <!-- <div class="text-center mt-1 name text-danger"> Create New Theme Blade Structure </div> -->
                        <!-- <img src="{{ asset('/allassets/images/DRC.png') }}"
                            class="rounded mx-auto d-block" style="height: 80px; width: 150px; margin: auto;"> -->
                        <div class="text-center mt-4 name"> Create New Theme Blade Structure </div>
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <form class="row g-3" action="{{ asset('/create-theme') }}"
                                        method="post">
                                        @csrf

                                        <div class="col-lg-6 col-md-12">
                                            <label for="themeNameInput" class="form-label">
                                                Theme Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="themename" class="form-control"
                                                id="themeNameInput" placeholder="Enter Theme Name" required />
                                            <div class="invalid-feedback">Please enter Theme Name.</div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <label for="themeLayoutNameInput" class="form-label"> Theme Layout Name 
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="themelayoutname" class="form-control"
                                                id="themeLayoutNameInput" placeholder="Enter Theme Layout Name" required />
                                            <div class="invalid-feedback">Please enter Theme Layout Name.</div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <label for="themeUrlNameInput" class="form-label"> Theme Iframe Url : <small>The name should be same as themename: Recommended </small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="themeiframeurl" class="form-control"
                                                id="themeUrlNameInput" placeholder="Enter Theme Iframe Url (slug)" required />
                                            <div class="invalid-feedback">Please enter Theme Url Name.</div>
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