<body>

    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>

            <div class="user-info-dropdown">
                <div class="dropdown">

                    @if (Auth::guard('admin')->check())

                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon">

                                @if ($admins->adminimage)
                                    <img src="{{ asset('/allassets/images/ActorsDetails/admins/' . $admins->adminimage) }}"
                                        alt="profile image" class="rounded-circle" style="width: 50px; height: 50px;">
                                @else
                                    <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded-circle"
                                        alt="profile image" style="width: 50px; height: 50px;">
                                @endif
                            </span>
                            <span class="user-name">{{ $admins->name }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                            <a class="dropdown-item" href="{{ asset('/adminprofile') }}"><i class="dw dw-user1"></i>
                                Profile</a>
                            <a class="dropdown-item" href="{{ asset('/setting') }}"><i class="dw dw-settings2"></i>
                                Setting</a>
                            <a class="dropdown-item" href="{{ asset('/reset') }}"><i class="dw dw-help"></i> Clear
                                Cache</a>

                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li class="nav-item ">
                                    <button type="submit" class="dropdown-item"
                                        style="background: none; border: none; cursor: pointer;">
                                        <i class="dw dw-logout"></i>
                                        <span>Logout</span>
                                    </button>
                                </li>
                            </form>
                            <!-- <a class="dropdown-item" href=""><i class="dw dw-logout"></i> Log Out</a> -->
                        </div>

                    @elseif (Auth::guard('member')->check())
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon">

                                @if ($members->memberimage)
                                    <img src="{{ asset('/allassets/images/ActorsDetails/members/' . $members->memberimage) }}"
                                        alt="profile image" class="rounded-circle" style="width: 50px; height: 50px;">
                                @else
                                    <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded-circle"
                                        alt="profile image" style="width: 50px; height: 50px;">
                                @endif
                            </span>
                            <span class="user-name">{{ $members->name }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="{{ asset('/memberprofile') }}"><i class="dw dw-user1"></i>
                                Profile</a>

                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li class="nav-item ">
                                    <button type="submit" class="dropdown-item"
                                        style="background: none; border: none; cursor: pointer;">
                                        <i class="dw dw-logout"></i>
                                        <span>Logout</span>
                                    </button>
                                </li>
                            </form>
                            <!-- <a class="dropdown-item" href=""><i class="dw dw-logout"></i> Log Out</a> -->
                        </div>

                    @elseif (Auth::guard('disputer')->check())
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon">

                                @if ($disputers->disputerimage)
                                    <img src="{{ asset('/allassets/images/ActorsDetails/disputers/' . $disputers->disputerimage) }}"
                                        alt="profile image" class="rounded-circle" style="width: 50px; height: 50px;">
                                @else
                                    <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded-circle"
                                        alt="profile image" style="width: 50px; height: 50px;">
                                @endif
                            </span>
                            <span class="user-name">{{ $disputers->name }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="{{ asset('/disputerprofile') }}"><i class="dw dw-user1"></i>
                                Profile</a>

                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li class="nav-item ">
                                    <button type="submit" class="dropdown-item"
                                        style="background: none; border: none; cursor: pointer;">
                                        <i class="dw dw-logout"></i>
                                        <span>Logout</span>
                                    </button>
                                </li>
                            </form>
                            <!-- <a class="dropdown-item" href=""><i class="dw dw-logout"></i> Log Out</a> -->
                        </div>

                    @else
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            {{-- <span class="user-icon">
                            <img src="{{ asset('/allassets/AdminTheme/Theme02/vendors/images/photo1.jpg') }}"
                                alt="" />
                        </span> --}}

                            <span class="user-icon">
                                <img src="{{ asset('/allassets/images/DRC.png') }}" class="rounded-circle"
                                    alt="profile image" style="width: 50px; height: 50px;">
                            </span>
                            <span class="user-name">Name</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                            <a class="dropdown-item" href="{{ asset('/reset') }}"><i class="dw dw-help"></i> Clear
                                Cache</a>

                            <!-- <form action="{{ url('/logout') }}" method="post">
                            @csrf
                            <li class="nav-item ">
                                <button type="submit" class="dropdown-item"
                                    style="background: none; border: none; cursor: pointer;">
                                    <i class="dw dw-logout"></i>
                                    <span>Logout</span>
                                </button>
                            </li>
                        </form> -->
                            <a class="dropdown-item" href=""><i class="dw dw-logout"></i> Log Out</a>
                        </div>

                    @endif


                </div>
            </div>

        </div>
    </div>
