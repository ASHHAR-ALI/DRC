
@if (session()->has('flash_message'))
    <div class="modal fade" id="flashMessageModal" tabindex="-1" role="dialog" aria-labelledby="flashMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="flashMessageModalLabel">Success Message</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Session::get('flash_message') !!}
                    {{-- {{ session('flash_message') }} --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#flashMessageModal').modal('show');
            setTimeout(function () {
                $('#flashMessageModal').modal('hide');
            }, 3000);
        });
    </script>
@endif

@if (session()->has('fail_message'))
    <div class="modal fade" id="failMessageModal" tabindex="-1" role="dialog" aria-labelledby="failMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failMessageModalLabel">Error Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Session::get('fail_message') !!}
                    {{-- {{ session('fail_message') }} --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#failMessageModal').modal('show');
            setTimeout(function () {
                $('#failMessageModal').modal('hide');
            }, 3000);
        });
    </script>
@endif