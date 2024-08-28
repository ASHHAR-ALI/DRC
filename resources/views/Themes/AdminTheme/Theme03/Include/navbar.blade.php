<!-- Page Header Start-->
<div class="page-main-header">
    <div class="main-header-right row">
        <div class="main-header-left d-lg-none w-auto">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="blur-up lazyloaded d-block d-lg-none" src="{{ asset('allassets/images/DRC.png') }} "
                        alt="">
                </a>
            </div>
        </div>
        <div class="mobile-sidebar w-auto">
            <div class="media-body text-end switch-sm">
                <label class="switch">
                    <a href="javascript:void(0)">
                        <i id="sidebar-toggle" data-feather="align-left"></i>
                    </a>
                </label>
            </div>
        </div>
        <div class="nav-right col">
            <ul class="nav-menus ">
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
                <!-- ---------------------------- Link Tag for Search box ---------------------------- -->
                <!-- <li>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Search..">
                            <span class="d-sm-none mobile-search">
                                <i data-feather="search"></i>
                            </span>
                        </div>
                    </form>
                </li> -->

                <!-- <li>
                    <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                        <i data-feather="maximize-2"></i>
                    </a>
                </li>-->



                @if (Auth::guard('admin')->check())

                    <li class="onhover-dropdown">
                        <div class="media align-items-center">

                            @if ($admins->adminimage)
                                <img src="{{ asset('/allassets/images/ActorsDetails/admins/' . $admins->adminimage) }}"
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    style="width: 50px; height: 50px;" alt="profile image">
                            @else
                                <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    style="width: 50px; height: 50px;" alt="profile image">
                            @endif

                            <div class="dotted-animation">
                                <span class="animate-circle"></span>
                                <span class="main-circle"></span>
                            </div>

                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li>
                                <a href="{{ asset('/adminprofile') }}">
                                    <i data-feather="user"></i>View Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/setting') }}">
                                    <i data-feather="settings"></i>Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/reset') }}">
                                    <i data-feather="trash"></i>Clear Cache
                                </a>
                            </li>

                            
                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item text-white">
                                        <i data-feather="log-out"></i>
                                        Logout
                                    </button>
                                </li>
                            </form>

                            {{-- <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item"
                                        style="background: none; border: none; cursor: pointer;">
                                        <!-- <i class="dw dw-logout"></i> -->
                                        <a href="">
                                            <i data-feather="log-out"></i>
                                            Logout
                                        </a>
                                    </button>
                                </li>
                            </form> --}}
                        </ul>
                    </li>
                @elseif (Auth::guard('member')->check())
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            @if ($members->memberimage)
                                <img src="{{ asset('/allassets/images/ActorsDetails/members/' . $members->memberimage) }}"
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    style="width: 50px; height: 50px;" alt="profile image">
                            @else
                                <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    style="width: 50px; height: 50px;" alt="profile image">
                            @endif
                            <div class="dotted-animation">
                                <span class="animate-circle"></span>
                                <span class="main-circle"></span>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li>
                                <a href="{{ asset('/memberprofile') }}">
                                    <i data-feather="user"></i>View Profile
                                </a>
                            </li>

                            

                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item">
                                        <i data-feather="log-out"></i>
                                        Logout
                                    </button>
                                </li>
                            </form>

                            {{-- <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item"
                                        style="background: none; border: none; cursor: pointer;">
                                        <!-- <i class="dw dw-logout"></i> -->
                                        <a href="">
                                            <i data-feather="log-out"></i>
                                            Logout
                                        </a>
                                    </button>
                                </li>
                            </form> --}}
                        </ul>
                    </li>
                @elseif (Auth::guard('disputer')->check())
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">

                            @if ($disputers->disputerimage)
                                <img src="{{ asset('/allassets/images/ActorsDetails/disputers/' . $disputers->disputerimage) }}"
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    style="width: 50px; height: 50px;" alt="profile image">
                            @else
                                <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    style="width: 50px; height: 50px;" alt="profile image">
                            @endif
                            <div class="dotted-animation">
                                <span class="animate-circle"></span>
                                <span class="main-circle"></span>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li>
                                <a href="{{ asset('/disputerprofile') }}">
                                    <i data-feather="user"></i>View Profile
                                </a>
                            </li>


                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item">
                                        <i data-feather="log-out"></i>
                                        Logout
                                    </button>
                                </li>
                            </form>

                            {{-- <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item"
                                        style="background: none; border: none; cursor: pointer;">
                                        <!-- <i class="dw dw-logout"></i> -->
                                        <a href="">
                                            <i data-feather="log-out"></i>
                                            Logout
                                        </a>
                                    </button>
                                </li>
                            </form> --}}

                        </ul>
                    </li>
                @else
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            <img class="align-self-center pull-right img-50 blur-up lazyloaded"
                                src="{{ asset('allassets/images/DRC.png') }} " alt="header-user">
                            <div class="dotted-animation">
                                <span class="animate-circle"></span>
                                <span class="main-circle"></span>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li>
                                <a href="{{ asset('/adminprofile') }}">
                                    <i data-feather="user"></i>View Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/setting') }}">
                                    <i data-feather="settings"></i>Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/reset') }}">
                                    <i data-feather="trash"></i>Clear Cache
                                </a>
                            </li>


                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item"
                                        style="background: none; border: none; cursor: pointer;">
                                        <a href="">
                                            <i data-feather="log-out"></i>
                                            Logout
                                        </a>
                                    </button>
                                </li>
                            </form>


                            {{-- <form action="{{ url('/logout') }}" method="post">
                            @csrf
                            <li class="nav-item ">
                                <button type="submit" class="dropdown-item"
                                    style="background: none; border: none; cursor: pointer;">
                                    <!-- <i class="dw dw-logout"></i> -->
                                    <i data-feather="log-out"></i>
                                    Logout
                                </button>
                            </li>
                        </form> --}}
                        </ul>
                    </li>


                @endif

                {{-- <li class="onhover-dropdown">
                    <div class="media align-items-center">
                        <img class="align-self-center pull-right img-50 blur-up lazyloaded"
                            src="{{ asset('allassets/images/DRC.png') }} " alt="header-user">
                        <div class="dotted-animation">
                            <span class="animate-circle"></span>
                            <span class="main-circle"></span>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                        <li>
                            <a href="{{ asset('/adminprofile') }}">
                                <i data-feather="user"></i>View Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('/setting') }}">
                                <i data-feather="settings"></i>Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('/reset') }}">
                                <i data-feather="trash"></i>Clear Cache
                            </a>
                        </li>


                        <form action="{{ url('/logout') }}" method="post">
                            @csrf
                            <li>
                                <button type="submit" class="dropdown-item"
                                    style="background: none; border: none; cursor: pointer;">
                                    <!-- <i class="dw dw-logout"></i> -->
                                    <a href="">
                                        <i data-feather="log-out"></i>
                                        Logout
                                    </a>
                                </button>
                            </li>
                        </form>


                        <!-- <form action="{{ url('/logout') }}" method="post">
                            @csrf
                            <li class="nav-item ">
                                <button type="submit" class="dropdown-item"
                                    style="background: none; border: none; cursor: pointer;">
                                    <!-- <i class="dw dw-logout"></i> -->
                                    <i data-feather="log-out"></i>
                                    Logout
                                </button>
                            </li>
                        </form> -->
                    </ul>
                </li> --}}


            </ul>
            <div class="d-lg-none mobile-toggle pull-right">
                <i data-feather="more-horizontal"></i>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Ends -->
