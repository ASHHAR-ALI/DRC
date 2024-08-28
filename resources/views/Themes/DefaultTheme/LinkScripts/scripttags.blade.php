



<!--  Bootstrap  -->
<script src="{{ asset('/allassets/BootstrapV5/js/bootstrap.bundle.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<!--  Downloaded Resources of DataTables Files Included -->
<script src="{{ asset('/allassets/DataTables/datatables.js') }}"></script>
<script src="{{ asset('/allassets/DataTables/datatables.min.js') }}"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>




















<!--  Jquery-3.7.0  --> <!-- Jquery already used in the head section  -->
{{-- <!--  Script tag for Jquery-3.7.0    -->
    <script src="{{ asset('/allassets/Jquery/jquery-3.7.0.js') }}"></script> --}}
{{-- <!--  Script tag for Jquery-3.7.1    -->
    <script src="{{ asset('/allassets/Jquery/jquery-3.7.1.js') }}"></script> --}}



<!--  -------------------------------------All the CDN Links If You Want to Use-------------------------------------   -->

{{--   <!-- CDN Link for Bootstrap Javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script> --}}

{{-- <!-- CDN Link for Jquery-3.7.1  -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}

{{-- <!--   Complete Datatables JS CDN Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script
        src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.11.0/r-2.5.0/rg-1.4.1/rr-1.4.1/sc-2.3.0/sb-1.6.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.js">
    </script> --}}


{{-- <script>
        function readURL(input) {
           if (input.files && input.files[0]) {
               let reader = new FileReader();
               reader.onload = function (e) {
                   $('.slider-preview-image')
                       .removeClass('hidden')
                       .attr('src', e.target.result)
                       .width(120)
                       .height(80)
                       .css('borderRadius', '0.275rem');
               };
               reader.readAsDataURL(input.files[0]);
           }
        }
    </script> --}}


{{-- @include('Theme.DefaultTheme.FlashMessage.toaster') --}}
