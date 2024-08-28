<body style="background-image: url('{{ asset('/allassets/images/background/fp12.jpg') }}') ">

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


                                @if (Auth::guard('admin')->check())

                                    <!-- --------------------------------When the Admin is logged IN-------------------------------- -->
                                    <li class="nav-item ">
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

                                    {{-- <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form> --}}

                                    <li class="nav-item  dropdown">
                                        <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover dropdown-toggle"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">

                                            @if ($admins->adminimage)
                                                <img src="{{ asset('/allassets/images/ActorsDetails/admins/' . $admins->adminimage) }}"
                                                    alt="profile image"class="rounded-circle"
                                                    style="width: 40px; height: 40px;">
                                            @else
                                                <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                                    class="rounded-circle" alt="profile image"
                                                    style="width: 40px; height: 40px;">
                                            @endif

                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ asset('/adminprofile') }}">My
                                                    Profile</a>
                                            </li>

                                            <li><a class="dropdown-item" href="{{ asset('/setting') }}">Setting</a>
                                            </li>

                                            <li><a class="dropdown-item" href="{{ asset('/reset') }}">Clear Caches</a>
                                            </li>


                                            <form action="{{ url('/logout') }}" method="post">
                                                @csrf
                                                <li class="nav-item ">
                                                    <button type="submit" class="dropdown-item"
                                                        style="background: none; border: none; cursor: pointer;">Sign
                                                        Out
                                                    </button>
                                                </li>
                                            </form>


                                        </ul>
                                    </li>
                                @elseif (Auth::guard('member')->check())
                                    <!-- --------------------------------When the Member is logged IN-------------------------------- -->
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
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">


                                            @if ($members->memberimage)
                                                <img src="{{ asset('/allassets/images/ActorsDetails/members/' . $members->memberimage) }}"
                                                    alt="profile image"class="rounded-circle"
                                                    style="width: 40px; height: 40px;">
                                            @else
                                                <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                                    class="rounded-circle" alt="profile image"
                                                    style="width: 40px; height: 40px;">
                                            @endif

                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="{{ asset('/memberprofile') }}">My
                                                    Profile</a>
                                            </li>
                                            <form action="{{ url('/logout') }}" method="post">
                                                @csrf
                                                <li class="nav-item ">
                                                    <button type="submit" class="dropdown-item"
                                                        style="background: none; border: none; cursor: pointer;">Sign
                                                        Out
                                                    </button>
                                                </li>
                                            </form>

                                        </ul>

                                    </li>
                                @elseif (Auth::guard('disputer')->check())
                                    <!-- --------------------------------When the Disputer is logged IN-------------------------------- -->
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
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">


                                            @if ($disputers->disputerimage)
                                                <img src="{{ asset('/allassets/images/ActorsDetails/disputers/' . $disputers->disputerimage) }}"
                                                    alt="profile image" class="rounded-circle"
                                                    style="width: 40px; height: 40px;">
                                            @else
                                                <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                                    class="rounded-circle" alt="profile image"
                                                    style="width: 40px; height: 40px;">
                                            @endif

                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ asset('/disputerprofile') }}">My
                                                    Profile</a></li>
                                            <form action="{{ url('/logout') }}" method="post">
                                                @csrf
                                                <li class="nav-item ">
                                                    <button type="submit" class="dropdown-item"
                                                        style="background: none; border: none; cursor: pointer;">Sign
                                                        Out
                                                    </button>
                                                </li>
                                            </form>

                                        </ul>

                                    </li>
                                @elseif (Auth::guard('againstdisputer')->check())
                                    <!-- --------------------------------When the Disputer is logged IN-------------------------------- -->
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
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            @if ($againstdisputers->againstdisputerimage)
                                                <img src="{{ asset('/allassets/images/ActorsDetails/againstdisputers/' . $againstdisputers->disputerimage) }}"
                                                    alt="profile image" class="rounded-circle"
                                                    style="width: 40px; height: 40px;">
                                            @else
                                                <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                                    class="rounded-circle" alt="profile image"
                                                    style="width: 40px; height: 40px;">
                                            @endif

                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ asset('/againstdisputerprofile') }}">My
                                                    Profile</a></li>
                                            <form action="{{ url('/logout') }}" method="post">
                                                @csrf
                                                <li class="nav-item ">
                                                    <button type="submit" class="dropdown-item"
                                                        style="background: none; border: none; cursor: pointer;">Sign
                                                        Out
                                                    </button>
                                                </li>
                                            </form>

                                        </ul>

                                    </li>
                                @else
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

                                @endif

                            </ul>
                        </div>
                    </div>
                </nav>
