<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                @if (Auth::guard('admin')->check())

                    <li class="has-submenu">
                        <a href="{{ asset('/') }}">
                            <i class="dripicons-meter"></i>Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/about') }}"> <i class="dripicons-briefcase"></i>About <div class="arrow-down">
                            </div>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/faqs') }}">
                            <i class="dripicons-jewel"></i>FAQs <div class="arrow-down"></div></a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/contacts') }}">
                            <i class="dripicons-mail"></i>Contact Us <div class="arrow-down"></div></a>
                    </li>
                @elseif (Auth::guard('member')->check())
                    <li class="has-submenu">
                        <a href="{{ asset('/') }}">
                            <i class="dripicons-meter"></i>Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/about') }}"> <i class="dripicons-briefcase"></i>About <div
                                class="arrow-down"></div>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/faqs') }}">
                            <i class="dripicons-jewel"></i>FAQs <div class="arrow-down"></div></a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/contacts') }}">
                            <i class="dripicons-mail"></i>Contact Us <div class="arrow-down"></div></a>
                    </li>
                @elseif (Auth::guard('disputer')->check())
                    <li class="has-submenu">
                        <a href="{{ asset('/') }}">
                            <i class="dripicons-meter"></i>Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/about') }}"> <i class="dripicons-briefcase"></i>About <div
                                class="arrow-down"></div>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/faqs') }}">
                            <i class="dripicons-jewel"></i>FAQs <div class="arrow-down"></div></a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/contacts') }}">
                            <i class="dripicons-mail"></i>Contact Us <div class="arrow-down"></div></a>
                    </li>
                @else
                    <li class="has-submenu">
                        <a href="{{ asset('/') }}">
                            <i class="dripicons-meter"></i>Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/about') }}"> <i class="dripicons-briefcase"></i>About <div
                                class="arrow-down"></div>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/faqs') }}">
                            <i class="dripicons-jewel"></i>FAQs <div class="arrow-down"></div></a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/contacts') }}">
                            <i class="dripicons-mail"></i>Contact Us <div class="arrow-down"></div></a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ asset('/') }}" data-bs-toggle="modal" data-bs-target="#allloginModal"> <i
                                class="dripicons-view-apps"></i>Sign In <div class="arrow-down">
                            </div></a>
                    </li>


                    @endif

            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->

</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-alt-bg"></div>
        <div class="page-title-box">
            <h4 class="page-title text-center">Hello 
                {{-- {{ $admins->name }}  --}}
            </h4>
        </div>
        <!-- end page title -->
