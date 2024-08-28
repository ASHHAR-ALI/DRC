




{{-- @if (Session::has('flash_message'))
<script>
    toastr.options = {
        // 'progressBar' : true,
        'closeButton' : true,
    }
    toastr.success("{{ Session::get('flash_message') }}", 'Success!', {timeOut:2000});
</script>
@endif

@if (Session::has('fail_message'))
<script>
    toastr.options = {
        // 'progressBar' : true,
        'closeButton' : true,
    }
    toastr.info("{{ Session::get('fail_message') }}", 'Failed!', {timeOut:2000});
</script>
@endif --}}