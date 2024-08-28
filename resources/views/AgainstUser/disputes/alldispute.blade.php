@section('title', 'My All Disputes') <!-- Web browser Tab Title -->
@section('disputetitle', 'My Disputes') <!-- Setting Page Title -->
@section('dispute')



    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-12 mx-auto mt-4 text-center">
                <table id="userdisputedataTable" class="table table-striped table-bordered table-hover table-dark">
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
                        @foreach ($alldisputes as $dispute)
                            <tr class="text-center">
                                <td>{{ $dispute->disputer->name ?? 'N/A'}}</td>
                                <td>{{ $dispute->disputer->fathername }}</td>
                                <td>{{ $dispute->disputer->contact }}</td>
                                <td>{{ $dispute->disputer->address }}</td>
                                <td>{{ $dispute->disputestype->dispute_type_name }}</td>
                                <td>
                                    @if ($dispute->members->isEmpty() && $dispute->dispute_status === 0 && $dispute->assigned_date === null)
                                        <label class="btn btn-warning btn-sm">Pending</label>
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 1 && $dispute->assigned_date === null)
                                        <label class="btn btn-warning btn-sm">Member Assigned</label>
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 2 && $dispute->assigned_date !== null)
                                        @php
                                            $assignedDate = new DateTime($dispute->assigned_date);
                                            $currentDate = new DateTime();
                                            $assignedDateIsTodayOrPast = $assignedDate <= $currentDate;
                                        @endphp

                                        <label onclick="showAssignedDate('{{ $dispute->assigned_date }}');"
                                            class="btn btn-secondary btn-sm mb-1" title="Click to view assigned date">
                                            Date Assigned
                                        </label>

                                        @if ($assignedDateIsTodayOrPast)
                                            <a href="{{ route('viewcommentfile', $dispute->id) }}"
                                                class="btn btn-secondary btn-sm mt-2" title="Add Comment">
                                                Add Comment
                                            </a>

                                            @php
                                                $commentsExist = $dispute->comments()->exists();
                                            @endphp

                                            @if ($commentsExist)
                                                <a href="{{ route('viewcommentsfordisputer', $dispute->id) }}"
                                                    class="btn btn-secondary btn-sm" title="View Comment">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            @endif
                                        @endif
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                        <label class="btn btn-secondary btn-sm">In Progress</label>
                                        <a href="{{ route('viewcommentsfordisputer', $dispute->id) }}"
                                            class="btn btn-secondary btn-sm mt-2" title="View Comment">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                        <label class="btn btn-success btn-sm mb-1">Completed</label>
                                        <a href="{{ route('viewcommentsfordisputer', $dispute->id) }}"
                                            class="btn btn-success btn-sm" title="View Comment">
                                            <i class="fa fa-eye"></i>
                                        </a>
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
