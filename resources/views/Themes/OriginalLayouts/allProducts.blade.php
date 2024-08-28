<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Table</title>
    <link rel="icon" href="{{ asset('allassets/images/DRC.png') }} " type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('allassets/images/DRC.png') }} " type="image/x-icon">

    
<!-- ---------------------------------Link stylesheet with download resources--------------------------------- -->

    <!-- --------------- Link For Bootstrap Classes---------------   -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/bootstrap/css/bootstrap.min.css') }} " />


    <!---- ---------------Stylesheet for Home file of User with indexstyle.css--------------- -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/css/indexstyle.css') }} " />


    <!--  Download Resources from CDN Link for Bootstrap DataTables --> <!-- Look more beautiful -->
    <link rel="stylesheet" type="text/css"
        href=" {{ asset('/allassets/bootstrap/DataTables/datatables.min.css') }} " />

    {{-- <!--  Download Resources of CSS stylesheet for DataTables -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/DataTables/datatables.css') }} " />
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/DataTables/datatables.min.css') }} " /> --}}




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    <!-- --------------------------------------Link stylesheet with CDN-------------------------------------- -->

    {{-- <!-- --------------- CDN Link For Bootstrap------------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

    <!-- ---------------- CDN Link For Font Awesone Icon------------------ -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- ---------------- CDN Link For Google Font Awesone Icon------------------ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- <!--  CDN of CSS stylesheet for DataTables for Bootstrap -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"> --}}

    {{-- <!-- CDN datatables -->
    <link
        href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.11.0/r-2.5.0/rg-1.4.1/rr-1.4.1/sc-2.3.0/sb-1.6.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.css"
        rel="stylesheet"> --}}



    {{-- <!--  Script tag for Jquery-3.7.0    -->
    <script src="{{ asset('/allassets/bootstrap/js/Jquery/jquery-3.7.0.js') }}"></script> --}}
    <!--  Script tag for Jquery-3.7.1    -->
    <script src="{{ asset('/allassets/bootstrap/js/Jquery/jquery-3.7.1.js') }}"></script>
</head>

<body>

    <div class="container-fluid">

        <div class="col-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <!-- <div class="wrapper"> -->
                    <div class="text-center mt-1 mb-4 name">
                        <h2>All Disputers</h2>
                    </div>
                    <table id="productDataTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>CNic</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->email }}</td>
                                    <td>{{ $product->password }}</td>
                                    <td>{{ $product->phone }}</td>
                                    <td>{{ $product->address }}</td>
                                    <td>{{ $product->cnic }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>CNic</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- </div> -->
                </div>
                <div class="col-1"></div>
            </div>
        </div>



        <script>
            $(document).ready(function() {
                $('#productDataTable').DataTable();
            })
        </script>



    </div> <!-- Closing Div for .container class -->





<!--  Bootstrap  -->
<script src="{{ asset('/allassets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!--  Jquery-3.7.0  -->   <!-- Jquery already used in the head section  -->
{{-- <!--  Script tag for Jquery-3.7.0    -->
    <script src="{{ asset('/allassets/bootstrap/js/Jquery/jquery-3.7.0.js') }}"></script> --}}
{{-- <!--  Script tag for Jquery-3.7.1    -->
    <script src="{{ asset('/allassets/bootstrap/js/Jquery/jquery-3.7.1.js') }}"></script> --}}

<!-- Below Downloaded Resources of DataTables Files Included -->
<script src="{{ asset('/allassets/DataTables/datatables.js') }}"></script>
<script src="{{ asset('/allassets/DataTables/datatables.min.js') }}"></script>



{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


<!--  -------------------------------------All the CDN Links If You Want to Use-------------------------------------   -->

{{--   <!-- CDN Link for Bootstrap Javascript  --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script> --}}

{{-- <!-- CDN Link for Jquery-3.7.1  -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}

{{-- <!--   Complete Datatables JS CDN Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script
        src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.11.0/r-2.5.0/rg-1.4.1/rr-1.4.1/sc-2.3.0/sb-1.6.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.js">
    </script> --}}

</body>

</html>
