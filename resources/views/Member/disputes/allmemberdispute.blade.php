@section('title', 'My All Disputes') <!-- Web browser Tab Title -->
@section('disputetitle', 'My Disputes') <!-- Setting Page Title -->
@section('dispute')




    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-12 mx-auto mt-4 text-center">
                <table id="memberdisputedataTable" class="table table-striped table-bordered table-hover table-dark ">
                    <thead>
                        <tr class="text-center">
                            <th>Dispute Person Name</th>
                            <th>Dispute Person Father Name</th>
                            <th>Dispute Person Contact</th>
                            <th>Dispute Person Address</th>
                            <th>Dispute Type</th>
                            <th>Dispute Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allmemberdisputes as $dispute)
                            <tr class="text-center">
                                <td>{{ $dispute->dispute_person_name }}</td>
                                <td>{{ $dispute->dispute_person_father_name }}</td>
                                <td>{{ $dispute->dispute_person_contact_number }}</td>
                                <td>{{ $dispute->dispute_person_address }}</td>
                                <td>{{ $dispute->disputestype->dispute_type_name }}</td>

                                <td>
                                    @if ($dispute->members->isEmpty() && $dispute->dispute_status === 0 && $dispute->assigned_date === null)
                                        <label class="btn btn-warning btn-sm">Pending</label>
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 1 && $dispute->assigned_date === null)
                                        <form action="{{ route('assigndate', ['dispute_id' => $dispute->id]) }}"
                                            method="post" class="d-flex">
                                            @csrf
                                            <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">
                                            <input type="date" name="assigned_date" id="assigned_date"
                                                class="form-control" required>
                                            <hr>
                                            <button type="submit" class="btn btn-success pr-1"> <i
                                                    class="fa fa-paper-plane"></i></button>
                                        </form>
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 2 && $dispute->assigned_date !== null)
                                        @php
                                            $assignedDate = new DateTime($dispute->assigned_date);
                                            $currentDate = new DateTime();
                                            $assignedDateIsTodayOrPast = $assignedDate <= $currentDate;
                                        @endphp

                                        <label onclick="showAssignedDate('{{ $dispute->assigned_date }}');"
                                            class="btn btn-secondary btn-sm" title="Click to view assigned date">
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
                                                <a href="{{ route('viewcomments', $dispute->id) }}"
                                                    class="btn btn-secondary btn-sm mt-2" title="View Comment">
                                                    <label class="btn btn-secondary btn-sm"><i
                                                            class="fa fa-eye"></i></label>
                                                </a>
                                            @endif
                                        @endif
                                        
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                        <label class="btn btn-secondary btn-sm mt-1">In Progress</label>
                                        <a href="{{ route('viewcomments', $dispute->id) }}"
                                            class="btn btn-secondary btn-sm mt-1" title="View Comment">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                        <label class="btn btn-success btn-sm mb-1">Completed</label>
                                        <a href="{{ route('viewcomments', $dispute->id) }}" class="btn btn-success btn-sm"
                                            title="View Comments">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @endif
                                </td>

                                <td>
                                    <a class="btn btn-info btn-sm m-1" id="show-detail"
                                        data-url="{{ route('alldisputedetails', $dispute->id) }}">
                                        </span> <i class="fa fa-info-circle"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <script>
        $(document).ready(function() {
            $('#memberdisputedataTable').DataTable();
        })
    </script>


@endsection




@include('Member.dispute')
