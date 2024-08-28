<!-- The below code is working properly -->
<div class="container">
    <div class="row mt-3 mb-0">
        <div class="col-12">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    @if (session()->has('flash_message'))
                        <div class="alert alert-success text-center" id="flashMessage">
                            {!! session('flash_message') !!}
                        </div>
                    @endif

                    @if (session()->has('fail_message'))
                        <div class="alert alert-danger text-center" id="failMessage">
                            {!! session('fail_message') !!}
                        </div>
                    @endif
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
</div>


<script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('slow');
    }, 3000);

    setTimeout(function() {
        $('#failMessage').fadeOut('slow');
    }, 3000);
</script>








{{-- <div class="row mt-4">
    @if (Session::has('flash_message'))
        <div class="alert alert-success text-center" id="flashMessage">
            {!! Session::get('flash_message') !!}
        </div>
    @endif

    @if (Session::has('fail_message'))
        <div class="alert alert-danger text-center" id="failMessage">
            {!! Session::get('fail_message') !!}
        </div>
    @endif
</div> --}}
