@section('title', 'Completed Disputes') <!-- Web browser Tab Title -->
@section('disputetitle', 'Completed Disputes') <!-- Setting Page Title -->
@section('dispute')



    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-12 mx-auto mt-4 text-center">
                <table id="userdisputedataTable" class="table table-striped table-bordered table-hover table-dark ">
                    <thead>
                        <tr class="text-center">
                            <th>Disputer Name</th>
                            <th>Disputer Father Name</th>
                            <th>Disputer Contact</th>
                            <th>Disputer Address</th>
                            <th>Dispute Type</th>
                            <th>Dispute Status</th>
                            <th class="p-3">Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($completeddisputes as $dispute)
                            <tr class="text-center">
                                <td>{{ $dispute->disputer->name }}</td>
                                <td>{{ $dispute->disputer->fathername }}</td>
                                <td>{{ $dispute->disputer->contact }}</td>
                                <td>{{ $dispute->disputer->address }}</td>
                                <td>{{ $dispute->disputestype->dispute_type_name }}</td>
                                <td>
                                    @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                        <label class="btn btn-success btn-sm mb-1">Completed </label>
                                        <a href="{{ route('viewcommentsforagainstdisputer', $dispute->id) }}"
                                            class="btn btn-success btn-sm" title="View Comment">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @else
                                        N/A
                                    @endif
                                </td>

                                <td>
                                    <a class="btn btn-info btn-sm m-1" id="show-detail"
                                        data-url="{{ route('alldisputedetails', $dispute->id) }}">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>













    {{-- <script>
    $(document).ready(function() {
        // Initialize DataTable with Buttons extension
        $('#userdisputedataTable').DataTable({
            dom: '<"Html5button"B>ITfgitp',
            buttons: [
                {extend: 'copy'},
                {extend: 'excel'},
                {extend: 'csv'},
                {extend: 'pdf'},
                {extend: 'print'},
                {extend: 'print',
                    customize:function (win){
                        $(win.document.body).addClass('White-bg');
                        $(win.document.body).css('font-size', '10px');
                        $(win.document.body).find('table').addClass('compact'),css('font-size', 'inherit')  ;

                    }
                }
            ]
        });
    });
</script> --}}
    <script>
        $(document).ready(function() {
            $('#userdisputedataTable').DataTable();
        })
    </script>

@endsection




@include('AgainstUser.dispute')
