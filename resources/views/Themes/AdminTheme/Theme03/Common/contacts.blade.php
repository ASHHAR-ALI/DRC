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


@section('title', 'Contact Us')

@section('content')




    {{-- background color for this pages   rgb(2, 6, 23) --}}


    <main>
        <div class="pattern-square"></div>
        <!--Pageheader start-->
        <section class="col-12 py-5 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                        <h1 class="mb-3">Contact us</h1>
                        <p class="mb-0 lead">Please reach out to us if you have questions about our enterprise offerings, or
                            anything else.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->

        <!--Contact us start-->
        <section class="mb-xl-9 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="row g-xl-7 gy-5">
                            <div class="col-md-12 col-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <form class="row g-3 needs-validation" action="{{ url('/contactemail') }}" method="POST">
                                            @csrf
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactFirstNameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="fname" class="form-control" id="contactFirstNameInput"
                                                    required />
                                                <div class="invalid-feedback">Please enter firstname.</div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactLastNameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="lname" class="form-control" id="contactLastNameInput"
                                                    required />
                                                <div class="invalid-feedback">Please enter lastname.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" name="email" class="form-control" id="contactEmailInput"
                                                    required />
                                                <div class="invalid-feedback">Please enter email.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactPhoneInput" class="form-label">Phone</label>
                                                <input type="tel" name="phone" class="form-control" id="contactPhoneInput"
                                                    required />
                                                <div class="invalid-feedback">Please enter phone.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactTextarea" class="form-label">Message</label>
                                                <textarea class="form-control" name="contact_text" id="contactTextarea" placeholder="Write to us" rows="4" required></textarea>
                                                <div class="invalid-feedback">Please enter a message.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            {{-- <!-- <div class="col-md-5 col-12">
                                <div class="mb-7">
                                    <div class="icon-shape bg-primary bg-opacity-10 rounded icon-md mb-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-headset text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Technical support</h4>
                                        <p class="mb-0">
                                            Found a persistent bug, or need help setting a new team member up? Can’t crack a
                                            feature?
                                            <a href="#" class="text-primary">Let us know!</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-7">
                                    <div class="icon-shape bg-primary bg-opacity-10 rounded icon-md mb-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chat-dots text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            <path
                                                d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>General chat</h4>
                                        <p class="mb-0">
                                            Billing issues, customizations, plan changes--anything that doesn’t fit in the
                                            other two brackets, goes here.
                                            <a href="#" class="text-primary">Start Chat</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-7">
                                    <div class="icon-shape bg-primary bg-opacity-10 rounded icon-md mb-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-newspaper text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                            <path
                                                d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Help Center</h4>
                                        <p class="mb-0">
                                            Want to share feedback on an existing feature or suggest a new one? Talk to us!
                                            <a href="#" class="text-primary">Visit Help Center</a>
                                        </p>
                                    </div>
                                </div>
                            </div>  --> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact us end-->
        <!--Location start-->
        <section class="mb-xl-9 my-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h2 class="mb-lg-7">Our offices around the Pakistan</h2>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3 class="mb-3">Islamabad</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{ asset('/allassets/images/contact/sp1.png') }}" alt="location"
                                class="img-fluid rounded-3" />
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>Constitution Avenue, G-5/2 Islamabad, Pakistan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3 class="mb-3">Lahore</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{ asset('/allassets/images/contact/lh1.png') }}" alt="location"
                                class="img-fluid rounded-3" />
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>Lahore High Court Shahra-e-Quaid-e-Azam, Lahore, Pakistan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3 class="mb-3">Lahore</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{ asset('/allassets/images/contact/lh2.png') }}" alt="location"
                                class="img-fluid rounded-3" />
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>Lahore High Court Shahra-e-Quaid-e-Azam, Lahore, Pakistan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3 class="mb-3">Sindh</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{ asset('/allassets/images/contact/sh1.png') }}" alt="location"
                                class="img-fluid rounded-3" />
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>20, Block-4-A, Sindh Secretariat, Court Road, Karachi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Location end-->
    </main>
@endsection
