<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('/allassets/DefaultTheme/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/allassets/DefaultTheme/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/allassets/DefaultTheme/favicons/favicon-16x16.png') }}">

    <title> @yield('title') </title>






    <!-- ---------------------------------Link stylesheet with download resources--------------------------------- -->

    <!-- --------------- Link For Bootstrap Classes---------------   -->
    <link rel="stylesheet" type="text/css"
        href=" {{ asset('/allassets/DefaultTheme/bootstrap/css/bootstrap.min.css') }} " />


    <!---- ---------------Stylesheet for Home file of User with indexstyle.css--------------- -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/DefaultTheme/css/indexstyle.css') }} " />


    <!--  Download Resources from CDN Link for Bootstrap DataTables --> <!-- Look more beautiful -->
    <link rel="stylesheet" type="text/css"
        href=" {{ asset('/allassets/DefaultTheme/bootstrap/DataTables/datatables.min.css') }} " />

    {{-- <!--  Download Resources of CSS stylesheet for DataTables -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/DefaultTheme/DataTables/datatables.css') }} " />
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/DefaultTheme/DataTables/datatables.min.css') }} " /> --}}




    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}




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
    <script src="{{ asset('/allassets/DefaultTheme/bootstrap/js/Jquery/jquery-3.7.0.js') }}"></script> --}}
    <!--  Script tag for Jquery-3.7.1    -->
    <script src="{{ asset('/allassets/DefaultTheme/bootstrap/js/Jquery/jquery-3.7.1.js') }}"></script>


</head>




<body>

    <div class="container-100">
        <div class="content-wrap">
            <div class="main">
                <nav class="navbar navbar-expand-lg fs-4 fw-bolder fc-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ asset('/') }}"><img class="m-3"
                                src="{{ asset('/allassets/DefaultTheme/images/DRC.png') }}" alt="DRC logo"
                                style=" height: 50px; width: 100px; "></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav gap-5 mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                        href="{{ asset('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                        href="{{ asset('/about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                        href="{{ asset('/faqs') }}">FAQs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                        href="{{ asset('/contacts') }}">Contacts</a>

                                <li class="nav-item">
                                    <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                        data-bs-toggle="modal" data-bs-target="#allloginModal">Signin</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>

                <h2 class="mt-5 mb-3">Welcome to the DRC Portal</h2>
                <div id="myCarousel" class="carousel slide mt-3" data-ride="carousel">
                    <div class="carousel-inner mb-3 pb-3">
                        <div class="carousel-item active">
                            <p class="testimonial">This application is the online Dispute Resolution Portal where you
                                can file a case
                                to the other person and be able to see the final Decision on your case which are 100%
                                fair and
                                corruption free.
                                This also save yours precious time for which we care.
                            </p>
                        </div>
                    </div>
                </div>



                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card col" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Already the Part of the DRC Portal</h5>
                                <p class="card-text text-center"> Be first to Make Changes </p>
                                <div class="text-center">
                                    <a class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#allloginModal">Sign in</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Be the part of the DRC Portal</h5>
                                <p class="card-text text-center">Want to Case a file for First Time</p>
                                <div class="text-center">
                                    {{-- <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#allloginModal">Sign in</a> --}}
                                    <a class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#insertdisputerModal">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- Footer of the website start from here --}}

                {{-- <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white">
    <div class="container text-center">
        <small>Copyright &copy; DRC Portal</small>
    </div>
</footer> --}}

            </div>
        </div>
    </div>









    <!--  Bootstrap  -->
    <script src="{{ asset('/allassets/DefaultTheme/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--  Jquery-3.7.0  --> <!-- Jquery already used in the head section  -->
    {{-- <!--  Script tag for Jquery-3.7.0    -->
    <script src="{{ asset('/allassets/DefaultTheme/bootstrap/js/Jquery/jquery-3.7.0.js') }}"></script> --}}
    {{-- <!--  Script tag for Jquery-3.7.1    -->
    <script src="{{ asset('/allassets/DefaultTheme/bootstrap/js/Jquery/jquery-3.7.1.js') }}"></script> --}}

    <!-- Below Downloaded Resources of DataTables Files Included -->
    <script src="{{ asset('/allassets/DefaultTheme/DataTables/datatables.js') }}"></script>
    <script src="{{ asset('/allassets/DefaultTheme/DataTables/datatables.min.js') }}"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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


    {{-- <script>
        function readURL(input) {
           if (input.files && input.files[0]) {
               let reader = new FileReader();
               reader.onload = function (e) {
                   $('.slider-preview-image')
                       .removeClass('hidden')
                       .attr('src', e.target.result)
                       .width(120)
                       .height(80)
                       .css('borderRadius', '0.275rem');
               };
               reader.readAsDataURL(input.files[0]);
           }
        }
    </script> --}}




    {{-- @include('Themes.DefaultTheme.LinkScripts.scripttags') --}}



</body>

</html>
