{{-- @section('title', 'Theme Setting') <!-- Web browser Tab Title --> --}}
@section('settingtitle', 'Theme Setting') <!-- Web browser Tab Title -->
@section('setting')

    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">

                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body bg-dark">
                            <form class="row" action="{{ asset('/themeupdatesetting') }}" method="post">
                                @csrf
                                <div class="row">
                                    @foreach ($themes as $theme)
                                        <div class="col-xl-6 col-md-6 col-sm-12 my-2">
                                            <!-- Simple card -->
                                            <div class="card card border">
                                                <iframe class="border card border border-success"
                                                    src="{{ URL::to('/') }}/{{ $theme->themeiframeurl }}" width="100%"
                                                    height="240"></iframe>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $theme->themename }}</h5>
                                                    <a class="btn btn-warning" target="_blank"
                                                        href="{{ URL::to('/') }}/{{ $theme->themeiframeurl }}">Preview</a>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    @endforeach
                                </div> <!-- end row -->

                            </form>
                        </div>

                    </div>
                </div>



            </div>
            <div class="mt-2"></div>



            <div class="col-12 mx-auto">
                {{-- @if (!$themes) --}}
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body bg-dark">
                            <div class="row">
                                <div class="col-12 my-2">
                                    <!-- Simple card -->
                                    <div class="card card border">
                                        <div class="card-body tablebg">
                                            <h5 class="card-title text-success">Change the Theme</h5>
                                            <!-- <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#changeThemeModal">Sign in</a> -->
                                            <label class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#changeThemeModal">Select Theme</label>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div> <!-- end row -->
                        </div>

                    </div>
                </div>
                {{-- @endif --}}
            </div>


        </div>
    </div>
@endsection


<!-- -------------------------------------------Modal for Them Creation Form By ------------------------------------------- -->
<div class="modal fade" id="changeThemeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="changeThemeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            {{-- <div class="modal-header justify-content-center text-center">
                <h5 class="modal-title text-center" id="changeThemeModalLabel">Select New Theme</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body tablebg">
                <div class="container">

                    <div class="logo"></div>
                    <!-- <div class="text-center mt-1 name text-danger"> update Theme </div> -->
                    <!-- <img src="{{ asset('/allassets/images/DRC.png') }}"
                            class="rounded mx-auto d-block" style="height: 80px; width: 150px; margin: auto;"> -->
                    <div class="text-center mt-4 name"> Select the Theme </div>
                    <div class="col-md-12 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body tablebg">
                                <form class="row g-3" action="{{ asset('/update-theme') }}" method="post">
                                    @csrf

                                    <div class=" col-lg-12 col-md-12">
                                        <label for="disputePersonAddressInput" class="form-label">
                                            Select Theme
                                            <span class="text-danger">*</span>
                                        </label>

                                        <select class="form-select d-flex align-items-center col tablebg"
                                            name="theme_id">
                                            @foreach ($themes as $theme)
                                                <option class="text-success" value="{{ $theme->id }}">
                                                    {{ $theme->themelayoutname }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success mt-2"
                                            name="submit">SUBMIT</button>
                                        <button type="button" class="btn btn-secondary mt-2"
                                            data-bs-dismiss="modal">CLOSE</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('Admin.setting')
