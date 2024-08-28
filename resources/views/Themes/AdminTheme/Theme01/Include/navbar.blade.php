<body class="topbar-dark center-menu">

    <!-- Navigation Bar-->
    <header id="topnav">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    @if (Auth::guard('admin')->check())

                        <li class="dropdown notification-list">
                            <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover dropdown-toggle"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                @if ($admins->adminimage)
                                    <img src="{{ asset('/allassets/images/ActorsDetails/admins/' . $admins->adminimage) }}"
                                        alt="profile image" class="rounded-circle" style="width: 40px; height: 40px;">
                                @else
                                    <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded-circle"
                                        alt="profile image" style="width: 40px; height: 40px;">
                                @endif
                                <span class="pro-user-name ml-1">
                                    {{ $admins->name }} 
                                </span>
                            </a>
                            <!-- <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('allassets/GreevaTheme/images/users/avatar-4.jpg') }}" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Agnes K <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a> -->
                            
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a href="{{ asset('/adminprofile') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-user"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="{{ asset('/setting') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-gear"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="{{ asset('/reset') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-help"></i>
                                    <span>Clear Cache</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <form action="{{ url('/logout') }}" method="post">
                                    @csrf
                        <li class="nav-item ">
                            <button type="submit" class="dropdown-item notify-item"
                                style="background: none; border: none; cursor: pointer;">
                                <i class="dripicons-power"></i>
                                <span>Logout</span>
                            </button>
                        </li>
                        </form>
                        </li>
                    @elseif (Auth::guard('member')->check())
                        <li class="dropdown notification-list">
                            <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover dropdown-toggle"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                @if ($members->memberimage)
                                    <img src="{{ asset('/allassets/images/ActorsDetails/members/' . $members->memberimage) }}"
                                        alt="profile image" class="rounded-circle" style="width: 40px; height: 40px;">
                                @else
                                    <img src="{{ asset('/allassets/images/d1.jpeg') }}" class="rounded-circle"
                                        alt="profile image" style="width: 40px; height: 40px;">
                                @endif
                                <span class="pro-user-name ml-1">
                                    {{ $members->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                {{-- <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                    Welcome {{ $admins->name }}
                                </h6>
                            </div> --}}

                                <a href="{{ asset('/memberprofile') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-user"></i>
                                    <span>My Account</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <form action="{{ url('/logout') }}" method="post">
                                    @csrf
                        
                                    <li class="nav-item ">
                            <button type="submit" class="dropdown-item notify-item"
                                style="background: none; border: none; cursor: pointer;">
                                <i class="dripicons-power"></i>
                                <span>Logout</span>
                            </button>
                        </li>
                        </form>
                        </li>
                    @elseif (Auth::guard('disputer')->check())
                        <li class="dropdown notification-list">
                            <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover dropdown-toggle"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                @if ($disputers->disputerimage)
                                    <img src="{{ asset('/allassets/images/ActorsDetails/disputers/' . $disputers->disputerimage) }}"
                                        alt="profile image" class="rounded-circle" style="width: 40px; height: 40px;">
                                @else
                                    <img src="{{ asset('/allassets/images/d1.jpeg') }}" class="rounded-circle"
                                        alt="profile image" style="width: 40px; height: 40px;">
                                @endif
                                <span class="pro-user-name ml-1">
                                    {{ $disputers->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>

                            {{-- <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('allassets/GreevaTheme/images/users/avatar-4.jpg') }}" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Agnes K <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a> --}}

                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                {{-- <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                    Welcome {{ $admins->name }}
                                </h6>
                            </div> --}}

                                <!-- item-->
                                <a href="{{ asset('/disputerprofile') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-user"></i>
                                    <span>My Account</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <form action="{{ url('/logout') }}" method="post">
                                    @csrf
                        <li class="nav-item ">
                            <button type="submit" class="dropdown-item notify-item"
                                style="background: none; border: none; cursor: pointer;">
                                <i class="dripicons-power"></i>
                                <span>Logout</span>
                            </button>
                        </li>
                        </form>
                        </li>
                    @else
                        <li class="dropdown notification-list">


                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="{{ asset('allassets/images/d1.jpeg') }}" alt="user-image"
                                    class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Agnes K <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            {{-- <a class="nav-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover dropdown-toggle"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            @if ($admins->adminimage)
                                <img src="{{ asset('/allassets/images/ActorsDetails/admins/' . $admins->adminimage) }}"
                                    alt="profile image" class="rounded-circle" style="width: 40px; height: 40px;">
                            @else
                                <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded-circle"
                                    alt="profile image" style="width: 40px; height: 40px;">
                            @endif
                            <span class="pro-user-name ml-1">
                                {{ $admins->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a> --}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                <a href="{{ asset('/adminprofile') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-user"></i>
                                    <span>My Account</span>
                                </a>
                                <a href="{{ asset('/setting') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-gear"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="{{ asset('/reset') }}" class="dropdown-item notify-item">
                                    <i class="dripicons-help"></i>
                                    <span>Clear Cache</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ url('/logout') }}" method="post">
                                    @csrf
                        <li class="nav-item ">
                            <button type="submit" class="dropdown-item notify-item"
                                style="background: none; border: none; cursor: pointer;">
                                <i class="dripicons-power"></i>
                                <span>Logout</span>
                            </button>
                        </li>
                        </form>
                        </li>
                    @endif


                </ul>
                <ul class="list-unstyled menu-left mb-0">
                    {{-- <li class="float-left logo-box">
                        <a href="javascript:void()" class="logo">
                            <span class="logo-lg">
                                <img src="{{ asset('allassets/GreevaTheme/images/logo-light.png') }} " alt=""
                                    height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('allassets/GreevaTheme/images/logo-sm.png') }} " alt=""
                                    height="24">
                            </span>
                        </a>
                    </li> --}}
                    {{-- <li class="app-search d-none d-md-block">
                    <form>
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit" class="sr-only"></button>
                    </form>
                </li> --}}
                </ul>
            </div>
        </div>
        <!-- end Topbar -->
