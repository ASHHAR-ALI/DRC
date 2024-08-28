<!-- Page Body Start-->
<div class="page-body-wrapper">



    <!-- Page Sidebar Start-->


    @if (Auth::guard('admin')->check())

        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="d-none d-lg-block blur-up lazyloaded"
                            src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/multikart-logo.png') }} "
                            alt="">
                    </a>
                </div>
            </div>
            <div class="sidebar custom-scrollbar">
                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                        aria-hidden="true"></i></a>
                <div class="sidebar-user">
                    <img class="img-60" src="{{ asset('allassets/images/DRC.png') }} ">
                    <div>
                        <h6 class="f-14">{{ $admins->name }}</h6>
                        <p>Admin</p>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a class="sidebar-header" href="{{ asset('/') }}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="user-plus"></i>
                            <span>Create</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-circle"></i>
                                    <span>Users</span>
                                    <i class="fa fa-angle-right pull-right"></i>
                                </a>

                                <ul class="sidebar-submenu">
                                    <li>
                                        <a data-bs-toggle="modal" data-bs-target="#memberregisterModal">
                                            <i class="fa fa-circle"></i>Members
                                        </a>
                                    </li>

                                    <li>
                                        <a data-bs-toggle="modal" data-bs-target="#registerdisputerModal">
                                            <i class="fa fa-circle"></i>Disputer</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/about') }}"><i data-feather="users"></i><span>About
                                us</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/faqs') }}"><i
                                data-feather="message-square"></i><span>FAQs</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/contacts') }}"><i
                                data-feather="phone"></i><span>Contact</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/adminprofile') }}"><i
                                data-feather="user"></i><span>My Profile</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="javascript:void(0)"><i
                                data-feather="settings"></i><span>Settings</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">

                            <li>
                                <a href="{{ asset('/setting') }}"><i class="fa fa-circle"></i>Theme Setting
                                </a>
                            </li>


                            <li>
                                <a href="{{ asset('/contactsetting') }}"><i class="fa fa-circle"></i>Contact Us Setting
                                </a>
                            </li>


                            <li>
                                <a href="{{ asset('/reset') }}"><i class="fa fa-circle"></i>Clear Cache
                                </a>
                            </li>

                            <li>
                                <a href="{{ asset('/viewDisputeTypeSetting') }}"><i class="fa fa-circle"></i>Add
                                    Disputer Types
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- <form action="{{ url('/logout') }}" method="post">
                        @csrf
                        <li>
                            <button type="submit" class="dropdown-item"
                                style="background: none; border: none; cursor: pointer;">
                                 <i class="dw dw-logout"></i> 
                                <a href="">
                                    <i data-feather="log-out" ></i>
                                    Logout
                                </a>
                            </button>
                        </li>
                    </form> -->

                </ul>
            </div>
        </div>
    @elseif (Auth::guard('member')->check())
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="d-none d-lg-block blur-up lazyloaded"
                            src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/multikart-logo.png') }} "
                            alt="">
                    </a>
                </div>
            </div>
            <div class="sidebar custom-scrollbar">
                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                        aria-hidden="true"></i></a>
                <div class="sidebar-user">
                    <img class="img-60" src="{{ asset('allassets/images/DRC.png') }} " alt="#">
                    <div>
                        <h6 class="f-14">{{ $members->name }}</h6>
                        <p>Member</p>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a class="sidebar-header" href="{{ asset('/') }}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/about') }}"><i data-feather="users"></i><span>About
                                us</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/faqs') }}"><i
                                data-feather="message-square"></i><span>FAQs</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/contacts') }}"><i
                                data-feather="phone"></i><span>Contact</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/memberprofile') }}"><i
                                data-feather="user"></i><span>My Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @elseif (Auth::guard('disputer')->check())
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="d-none d-lg-block blur-up lazyloaded"
                            src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/multikart-logo.png') }} "
                            alt="">
                    </a>
                </div>
            </div>
            <div class="sidebar custom-scrollbar">
                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                        aria-hidden="true"></i></a>
                <div class="sidebar-user">
                    <img class="img-60" src="{{ asset('allassets/images/DRC.png') }} " alt="#">
                    <div>
                        <h6 class="f-14">{{ $disputers->name }}</h6>
                        <p>Disputer</p>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a class="sidebar-header" href="{{ asset('/') }}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="user-plus"></i>
                            <span>Create</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a class="sidebar-header" data-bs-toggle="modal"
                                data-bs-target="#addDisputeModal"><i class="fa fa-circle"
                                        ></i><span>Dispute</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/about') }}"><i
                                data-feather="users"></i><span>About us</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/faqs') }}"><i
                                data-feather="message-square"></i><span>FAQs</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/contacts') }}"><i
                                data-feather="phone"></i><span>Contact</span>
                        </a>
                    </li>

                    <li>
                        <a class="sidebar-header" href="{{ asset('/disputerprofile') }}"><i
                                data-feather="user"></i><span>My Profile</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    @else
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="d-none d-lg-block blur-up lazyloaded"
                            src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/multikart-logo.png') }} "
                            alt="">
                    </a>
                </div>
            </div>
            <div class="sidebar custom-scrollbar">
                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                        aria-hidden="true"></i></a>
                <div class="sidebar-user">
                    <img class="img-60" src="{{ asset('allassets/images/DRC.png') }} " alt="#">
                    <div>
                        <h6 class="f-14">Ashhar</h6>
                        <p>CEO.</p>
                    </div>
                </div>
            </div>
        </div>
    @endif







    {{-- <div class="page-sidebar">
        <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="d-none d-lg-block blur-up lazyloaded"
                        src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/multikart-logo.png') }} "
                        alt="">
                </a>
            </div>
        </div>
        <div class="sidebar custom-scrollbar">
            <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                    aria-hidden="true"></i></a>
            <div class="sidebar-user">
                <img class="img-60" src="{{ asset('allassets/images/DRC.png') }} " alt="#">
                <div>
                    <h6 class="f-14">Ashhar</h6>
                    <p>CEO.</p>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li>
                    <a class="sidebar-header" href="{{asset('/')}}">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="sidebar-header" href="javascript:void(0)">
                        <i data-feather="box"></i>
                        <span>Create</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>

                    <ul class="sidebar-submenu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fa fa-circle"></i>
                                <span>Users</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="category.html">
                                        <i class="fa fa-circle"></i>Members
                                    </a>
                                </li>

                                <li>
                                    <a href="category-sub.html">
                                        <i class="fa fa-circle"></i>Disputer</a>
                                </li>

                                <li>
                                    <a href="product-list.html">
                                        <i class="fa fa-circle"></i>Remaining</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a class="sidebar-header" href="{{asset("/about")}}"><i
                        data-feather="users"></i><span>About us</span>
                    </a>
                </li>
                
                <li>
                    <a class="sidebar-header" href="{{asset("/faqs")}}"><i
                        data-feather="message-square"></i><span>FAQs</span>
                    </a>
                </li>   
                
                <li>
                    <a class="sidebar-header" href="{{asset("/contacts")}}"><i
                            data-feather="phone"></i><span>Contact</span>
                    </a>
                </li>

                <li>
                    <a class="sidebar-header" href="{{asset("/adminprofile")}}"><i
                            data-feather="user"></i><span>My Profile</span>
                    </a>
                </li>

                <li>
                    <a class="sidebar-header" href="javascript:void(0)"><i
                            data-feather="settings"></i><span>Settings</span><i
                            class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">

                        <li>
                            <a href="{{asset('/setting')}}"><i class="fa fa-circle"></i>Theme Setting
                            </a>
                        </li>
                        
                        
                        <li>
                            <a href="{{asset('/contactsetting')}}"><i class="fa fa-circle"></i>Contact Us Setting
                            </a>
                        </li>


                        <li>
                            <a href="{{asset('/reset')}}"><i class="fa fa-circle"></i>Clear Cache
                            </a>
                        </li>

                        <li>
                            <a href="{{asset('/viewDisputeTypeSetting')}}"><i class="fa fa-circle"></i>Add Disputer Types
                            </a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a class="sidebar-header" href="login.html">
                        <i data-feather="log-in"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div> --}}



    <!-- Page Sidebar Ends-->

    <!-- Right sidebar Start-->
    {{-- <div class="right-sidebar" id="right_side_bar">
        <div>
            <div class="container p-0">
                <div class="modal-header p-l-20 p-r-20">
                    <div class="col-sm-8 p-0">
                        <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                    </div>
                    <div class="col-sm-4 text-end p-0">
                        <i class="me-2" data-feather="settings"></i>
                    </div>
                </div>
            </div>
            <div class="friend-list-search mt-0">
                <input type="text" placeholder="search friend">
                <i class="fa fa-search"></i>
            </div>
            <div class="p-l-30 p-r-30 friend-list-name">
                <div class="chat-box">
                    <div class="people-list friend-list">
                        <ul class="list">
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/user.jpg') }} "
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Vincent Porter</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/user1.jpg') }} "
                                    alt="">
                                <div class="status-circle away"></div>
                                <div class="about">
                                    <div class="name">Ain Chavez</div>
                                    <div class="status">28 minutes ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/user2.jpg') }} "
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Kori Thomas</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/user3.jpg') }} "
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Erica Hughes</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/user3.jpg') }} "
                                    alt="">
                                <div class="status-circle offline"></div>
                                <div class="about">
                                    <div class="name">Ginger Johnston</div>
                                    <div class="status">2 minutes ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/user5.jpg') }} "
                                    alt="">
                                <div class="status-circle away"></div>
                                <div class="about">
                                    <div class="name">Prasanth Anand</div>
                                    <div class="status">2 hour ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{ asset('/allassets/AdminTheme/Theme03/images/dashboard/designer.jpg') }} "
                                    alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Hileri Jecno</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Right sidebar Ends-->



    <div class="page-body">
