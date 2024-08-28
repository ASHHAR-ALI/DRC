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

@section('title', 'FAQs')

@section('content')



    {{-- background color for this pages   rgb(2, 6, 23) --}}


    <section class="py-lg-8 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-lg-7 mb-5">

                        <div class="row align-items-center py-2 px-3">
                            <div class="col-12">
                                <h2 class="text-truncate h5 mb-0">FAQ #1</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content border-top pt-6" id="pills-tabTwoContent">
                                    <div class="tab-pane tab-example-preview fade show active" id="pills-faq-one-preview"
                                        role="tabpanel" aria-labelledby="pills-faq-one-preview-tab">

                                        <!--Have question start-->
                                        <section class="py-xl-9 py-5 bg-gray-100">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-6">
                                                        <div class="mb-7 mb-md-0 me-lg-7">
                                                            <div class="mb-4">
                                                                <h2 class="mb-5">Still have questions?</h2>
                                                                <p class="mb-0">We've answered a few FAQs to get you
                                                                    started. But please don't hesitate to reach out with
                                                                    more.</p>
                                                            </div>

                                                            <a href="{{ asset('/contacts') }}"
                                                                class="btn btn-outline-primary">Write a Message</a>
                                                            <span class="fas fa-phone"></span>
                                                            <span class="ms-2 text-primary">(000) 123-4567</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-6">
                                                        <div class="pb-4 border-bottom">
                                                            <h4 class="mb-3">What's the procedure of Disputes?</h4>
                                                            <p class="mb-0">
                                                                For Disputers who want to resolve their disputes first
                                                                Register by giving the required details required in the
                                                                form.
                                                            </p>
                                                        </div>
                                                        <div class="py-4 border-bottom">
                                                            <h4 class="mb-3">Will the dispute process be recorded for reviewing the case?</h4>
                                                            <p class="mb-0">
                                                                Yes, the process of the disputes will be recorded so that both of the disputers can go through the details and verify the authenticity of the case.
                                                            </p>
                                                        </div>
                                                        <div class="py-4 border-bottom">
                                                            <h4 class="mb-3">Will I able to See the Final Reports of the case?
                                                            </h4>
                                                            <p class="mb-0">
                                                                The Final Decision on the case will be shown to both of the disputers involved in the disputes.
                                                            </p>
                                                        </div>
                                                        <div class="py-4 border-bottom">
                                                            <h4 class="mb-3">When do i join the Case and how the case will start?</h4>
                                                         <p class="mb-0">The dispute will be start on the particular date that will be assigned by the DRC Portal Administration .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!--Have question end-->
                                    </div>
                                    <div class="tab-pane tab-example-code fade" id="pills-faq-one-code" role="tabpanel"
                                        aria-labelledby="pills-faq-one-code-tab">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>








                    {{-- <!-- <div class="mb-lg-7 mb-5">
                        <div class="row align-items-center py-2 px-3">
                            <div class=" col-12">
                                <div>
                                    <h2 class="text-truncate h5 mb-0">FAQ #2</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content border-top pt-6" id="pills-tabTwoContent">
                                    <div class="tab-pane tab-example-preview fade show active" id="pills-faq-two-preview"
                                        role="tabpanel" aria-labelledby="pills-faq-two-preview-tab">
                                        <!--asked question-->
                                        <section class="mb-xl-9 mb-4">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                                                        <div class="text-center mb-7">
                                                            <h2>Frequently asked questions</h2>
                                                            <p class="mb-0">
                                                                Can’t find any answer for your question?
                                                                <br />
                                                                Ask our
                                                                <a href="#" class="text-primary">customer
                                                                    support</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="border mb-2 rounded-3 p-3">
                                                                <h3 class="h5 mb-0">
                                                                    <a href="#"
                                                                        class="text-reset d-flex justify-content-between align-items-center"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false" aria-controls="collapseOne">
                                                                        Can I trial block before paying?
                                                                        <span class="chevron-arrow"><i
                                                                                class="bi bi-chevron-down"></i></span>
                                                                    </a>
                                                                </h3>
                                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="mt-3">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                        elit. Quae harum adipisci possimus et. Iusto
                                                                        pariatur iste nam incidunt ratione modi.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="border mb-2 rounded-3 p-3">
                                                                <h3 class="h5 mb-0">
                                                                    <a href="#"
                                                                        class="text-reset d-flex justify-content-between align-items-center"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo" aria-expanded="true"
                                                                        aria-controls="collapseTwo">
                                                                        How are additional plan billed?
                                                                        <span class="chevron-arrow"><i
                                                                                class="bi bi-chevron-down"></i></span>
                                                                    </a>
                                                                </h3>
                                                                <div id="collapseTwo"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="mt-3">
                                                                        Sed urna felis, dapibus quis leo nec, luctus auctor
                                                                        augue. Nam gravida placerat sem vitae rutrum.
                                                                        Integer accumsan, enim et facilisis
                                                                        eleifend, ante ligula ornare nulla, sed pharetra
                                                                        tortor diam eget magna.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border mb-2 rounded-3 p-3">
                                                                <h3 class="h5 mb-0">
                                                                    <a href="#"
                                                                        class="text-reset d-flex justify-content-between align-items-center"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        When should I change my plan?
                                                                        <span class="chevron-arrow"><i
                                                                                class="bi bi-chevron-down"></i></span>
                                                                    </a>
                                                                </h3>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="mt-3">
                                                                        Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Inventore tenetur cum doloremque iusto
                                                                        molestiae. Minus beatae quam cumque modi
                                                                        quidem asperiores aliquam pariatur in iste.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border mb-2 rounded-3 p-3">
                                                                <h3 class="h5 mb-0">
                                                                    <a href="#"
                                                                        class="text-reset d-flex justify-content-between align-items-center"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFour">
                                                                        What payment methods do you offer?
                                                                        <span class="chevron-arrow"><i
                                                                                class="bi bi-chevron-down"></i></span>
                                                                    </a>
                                                                </h3>
                                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="mt-3">
                                                                        Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Inventore tenetur cum doloremque iusto
                                                                        molestiae. Minus beatae quam cumque modi
                                                                        quidem asperiores aliquam pariatur in iste.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border mb-2 rounded-3 p-3">
                                                                <h3 class="h5 mb-0">
                                                                    <a href="#"
                                                                        class="text-reset d-flex justify-content-between align-items-center"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFive">
                                                                        What is your refund policy?
                                                                        <span class="chevron-arrow"><i
                                                                                class="bi bi-chevron-down"></i></span>
                                                                    </a>
                                                                </h3>
                                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="mt-3">
                                                                        Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Inventore tenetur cum doloremque iusto
                                                                        molestiae. Minus beatae quam cumque modi
                                                                        quidem asperiores aliquam pariatur in iste.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border mb-2 rounded-3 p-3">
                                                                <h3 class="h5 mb-0">
                                                                    <a href="#"
                                                                        class="text-reset d-flex justify-content-between align-items-center"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSix"
                                                                        aria-expanded="false" aria-controls="collapseSix">
                                                                        How are paid plans billed when moving other plan?
                                                                        <span class="chevron-arrow"><i
                                                                                class="bi bi-chevron-down"></i></span>
                                                                    </a>
                                                                </h3>
                                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="mt-3">
                                                                        Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Inventore tenetur cum doloremque iusto
                                                                        molestiae. Minus beatae quam cumque modi
                                                                        quidem asperiores aliquam pariatur in iste.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!--asked question-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --> --}}





                </div>
            </div>
        </div>
    </section>



@endsection
