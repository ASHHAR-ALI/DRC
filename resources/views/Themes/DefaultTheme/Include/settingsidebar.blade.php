<div class="container">
        
    <div class="row">
        <h1 class="text-center mt-3">DRC Portal Setting</h1>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="row">
                    <div class="col-2 pt-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-condensed text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Setting List</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a class="text-decoration-none text-success"
                                                href="{{ asset('/setting') }}">Personal
                                                Details </td></a>
                                    </tr>
                                    <tr>
                                        <td><a class="text-decoration-none text-success"
                                                href="{{ asset('/setting') }}">Users
                                                and Permission</a> </td>
                                    </tr>
                                    <tr>
                                        <td><a class="text-decoration-none text-success"
                                                href="{{ asset('/setting') }}">Customer
                                                Accounts</a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- /col-2 -->


                    <div class="col-10 pt-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-condensed text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Contact US Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        
                                        <td> @yield('setting') </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div> <!--/. row -->
            </div> <!-- /col-12 -->
        </div> <!--/. container-fluid -->
    </section>
</div>