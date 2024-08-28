<body>

    <div class="container-100">
        <div class="content-wrap">
            <div class="main">


                <nav class="navbar navbar-expand-lg fs-4 fw-bolder fc-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ asset('/') }}"><img class="m-3"
                                src="{{ asset('public/allassets/images/DRC.png') }}" alt="DRC logo"
                                style=" height: 50px; width: 100px; "></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav gap-5 mb-2 mb-lg-0">


                                <!--  -------------------------Nav Element When Admin is Logged In-------------------------  -->
                                @auth('disputer')
                                    <li class="nav-item">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/') }}">Home</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/about') }}">About</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/faqs') }}">FAQs</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/contacts') }}">Contacts</a>
                                    </li>

                                    <li class="nav-item  dropdown">

                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover dropdown-toggle"
                                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                            @if ($disputers->disputerimage)
                                                <img src="{{ asset('/public/allassets/images/ActorsDetails/disputers/' . $disputers->disputerimage) }}"
                                                    alt="profile image"class="rounded-circle"
                                                    style="width: 40px; height: 40px;">
                                            @else
                                                <img src="{{ asset('/public/allassets/images/DRC.png') }}"
                                                    class="rounded-circle" alt="profile image"
                                                    style="width: 40px; height: 40px;">
                                            @endif

                                        </a>


                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ asset('/disputerprofile') }}">My
                                                    Profile</a></li>
                                            <form action="{{ url('/disputerlogout') }}" method="post">
                                                @csrf
                                                <li class="nav-item ">
                                                    <button type="submit" class="dropdown-item"
                                                        style="background: none; border: none; cursor: pointer;">Sign Out
                                                    </button>
                                                </li>
                                            </form>

                                        </ul>

                                    </li>



                                    <!--  -------------------------Nav Element When Admin not Login-------------------------  -->
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/') }}">Home</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/about') }}">About</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/faqs') }}">FAQs</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            href="{{ asset('/contacts') }}">Contacts</a>
                                    </li>

                                    {{-- <li class="nav-item">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Signin</a>
                                    </li> --}}
                                @endauth


                            </ul>
                        </div>
                    </div>
                </nav>
