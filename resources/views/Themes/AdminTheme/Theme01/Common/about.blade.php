{{-- @php
    $layout = '';
    if (Auth::guard('admin')->check()) {
        $layout = 'welcome';
    } elseif (Auth::guard('disputer')->check()) {
        $layout = 'welcome';
    }
    elseif (Auth::guard('member')->check()) {
        $layout = 'welcome';
    } else {
        $layout = 'welcome';
    }
@endphp

@extends($layout) --}}


@php
    $guards = ['admin', 'disputer', 'member'];
    $layout = 'welcome';
    foreach ($guards as $guard) {
        if (Auth::guard($guard)->check()) {
            break;
        }
    }
@endphp

@extends($layout)

@section('title', 'About')

@section('content')


{{-- background color for this pages   rgb(2, 6, 23) --}}
    <main>
        <div class="pattern-square"></div>
        <!--Pageheader start-->
        <section class="py-4 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="text-center">
                            {{-- <small class="text-uppercase ls-md fw-semibold">About Block</small> --}}
                            <h1 class="mb-3 mt-3">Empowering the world to Justice</h1>
                            <p class="mb-0 px-lg-6">
                                We are Block, a Digital Dispute Resolution & Justice Agency. As a team of Judges, Islamic
                                Scholar, Quality Assurance, and Dispute Managers, we collaborate on a
                                fair and clean process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->

        <!--Image start-->
        <section class>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="glightbox rounded-3">
                            <div class="rounded-3 card-lift"
                                style="background-image: url({{asset('/allassets/images/about/a1.jpg')}}); background-repeat: no-repeat; height: 350px; background-size: cover">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="glightbox rounded-3">
                            <div class="rounded-3 card-lift"
                                style="background-image: url({{asset('/allassets/images/about/a4.jpg')}}); background-repeat: no-repeat; height: 350px; background-size: cover">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a class="glightbox rounded-3">
                            <div class="rounded-3 card-lift"
                                style="background-image: url({{asset('/allassets/images/about/a8.jpg')}}); background-repeat: no-repeat; height: 350px; background-size: cover">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--Image end-->


        <!--Our values start-->
        <section class="my-xl-9 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="mb-xl-6 mb-5">
                            <h2 class="mb-0">Our values</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-6 col-md-6 col-12">
                        <figure class="mb-4 mb-md-0">
                            <img src="{{ asset('/allassets/images/about/a14.jpg') }}" alt="value"
                                class="img-fluid rounded-3" />
                        </figure>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                        <!-- <span class="text-primary fw-semibold">01</span> -->
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3">Never Be Too Quick for Final Decision</h3>
                            <p class="mb-0">
                                We create brands, interactions, communications, and a wide variety of design daily. It is
                                not only a work routine but also our way of fulfilling seemingly impossible tasks.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-5 col-md-6 col-12 order-2">
                        <!-- <span class="text-primary fw-semibold">02</span> -->
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3">Care Deeply</h3>
                            <p class="mb-0">
                                We care deeply about achieving our clients’ business goals. Our inner processes are built
                                around contributing to these goals. Because every personality impacts the final
                                product, we cherish and consider all viewpoints.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1 col-md-6 col-12 order-md-2">
                        <figure class="mb-4">
                            <img src="{{ asset('/allassets/images/about/aa1.jpeg') }}" alt="value"
                                class="img-fluid rounded-3" />
                        </figure>
                    </div>
                </div>

                <div class="row d-flex align-items-center mb-md-9 mb-6">
                    <div class="col-lg-6 col-md-6 col-12">
                        <figure class="mb-4 mb-md-0">
                            <img src="{{ asset('/allassets/images/about/aa4.jpeg') }}" alt="value"
                                class="img-fluid rounded-3" />
                        </figure>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                        <!-- <span class="text-primary fw-semibold">03</span> -->
                        <div class="mb-4">
                            <h3 class="mt-4 mb-3">Resolves Conflict Together</h3>
                            <p class="mb-0">We continue to transform and experiment with methodologies and approaches. But
                                one thing remains unchangeable — the direction of our growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Our values end-->

        <!--Behind the block start-->
        <section class="mb-lg-9 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 xol-12">
                        <div class="text-center mb-7">
                            <small class="text-uppercase ls-md fw-semibold">Behind the block</small>
                            <h2 class="mt-3">Our Leadership Team</h2>
                            <p class="mb-4">Working from all around the Pakistan to build the future of tomorrow with Justice.</p>
                        </div>
                    </div>
                </div>
                <div class="row gy-5">
                    <div class="col-lg-3 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <img src="{{ asset('/allassets/images/about/sj2.png') }}" alt="team"
                                class="rounded-3 img-fluid" />
                        </figure>
                        <div class="mb-4">
                            <h4 class="mb-1"><a class="text-reset">Qazi Faez Isa</a></h4>
                            <span class="fs-6">Chief Justice of Paksitan</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <img src="{{ asset('/allassets/DefaultTheme/images/about/sj3.png') }}" alt="team"
                                class="rounded-3 img-fluid" />
                        </figure>
                        <div class="mb-4">
                            <h4 class="mb-1"><a class="text-reset">Mr. Justice Muhammad Ameer Bhatti</a></h4>
                            <span class="fs-6">Chief Justice Lahore High Court</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <img src="{{ asset('/allassets/DefaultTheme/images/about/sj4.png') }}" alt="team"
                                class="rounded-3 img-fluid" />
                        </figure>
                        <div class="mb-4">
                            <h4 class="mb-1"><a class="text-reset">Mr. Justice Shujaat Ali Khan</a></h4>
                            <span class="fs-6">Lahore High Court Judge</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <img src="{{ asset('/allassets/DefaultTheme/images/about/sj5.png') }}" alt="team"
                                class="rounded-3 img-fluid" />
                        </figure>
                        <div class="mb-4">
                            <h4 class="mb-1"><a class="text-reset">Justice Miss Aalia Neelum </a></h4>
                            <span class="fs-6">Lahore High Court Judge</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Behind the block end-->


        

    </main>

   
@endsection
