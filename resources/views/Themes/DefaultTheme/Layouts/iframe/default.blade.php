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



{{-- @include('Themes.DefaultTheme.LinkScripts.headlinks') --}}


    <!-- ---------------------------------Link stylesheet with download resources--------------------------------- -->

    <!-- --------------- Link For Bootstrap Classes---------------   -->
    <link rel="stylesheet" type="text/css"
        href=" {{ asset('/allassets/BootstrapV5/css/bootstrap.min.css') }} " />

    <!---- ---------------Stylesheet for Home file of User with indexstyle.css--------------- -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/allassets/DefaultTheme/css/indexstyle.css') }} " />


</head>




<body>

    <div class="container-100">
        <div class="content-wrap">
            <div class="main">
                <nav class="navbar navbar-expand-lg fs-4 fw-bolder fc-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ asset('/') }}"><img class="m-3"
                                src="{{ asset('/allassets/images/DRC.png') }}" alt="DRC logo"
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




                
                {{-- Footer of the website start from here --}}

                {{-- <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white">
    <div class="container text-center">
        <small>Copyright &copy; DRC Portal</small>
    </div>
</footer> --}}

            </div>
        </div>
    </div>







    {{-- @include('Themes.DefaultTheme.LinkScripts.scripttags') --}}



<!--  Bootstrap  -->
<script src="{{ asset('/allassets/DefaultTheme/bootstrap/js/bootstrap.bundle.min.js') }}"></script>




</body>

</html>
