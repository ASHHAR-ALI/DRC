@extends('Admin.dispute')


@section('title', 'All Disputes')

@section('disputetitle', 'All Disputes')

@section('dispute')

    <div class="container-fluid">
        <div class="col-12">

            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="text-center mt-1 mb-4 name">
                        <h2>All Disputes</h2>
                    </div>
                    <table id="disputedataTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Dispute Type</th>
                                <th>Dispute Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($disputes as $dispute)
                                <tr>
                                    <td>{{ $dispute->dispute_person_name }}</td>
                                    <td>{{ $dispute->dispute_person_father_name }}</td>
                                    <td>{{ $dispute->dispute_person_contact_number }}</td>
                                    <td>{{ $dispute->dispute_person_address }}</td>
                                    <td>{{ optional($dispute->disputestype)->dispute_type_name }}</td>

                                    <td class="align-middle">
                                        @if ($dispute->members->isEmpty() && $dispute->dispute_status === 0 && $dispute->assigned_date === null)
                                            <form action="{{ route('assignmember', ['dispute_id' => $dispute->id]) }}"
                                                method="post" class="d-flex">
                                                @csrf
                                                <select class="form-control selectpicker bg-dark text-small"
                                                    name="member_id[]" id="disputetype" multiple="multiple">
                                                    @foreach ($members as $member)
                                                        <option class="text-small" value="{{ $member->id }}">
                                                            {{ $member->name }}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 1 && $dispute->assigned_date === null)
                                            <label class="btn btn-warning btn-sm">Member Assigned</label>
                                        @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 2 && $dispute->assigned_date !== null)
                                            <label onclick="showAssignedDate('{{ $dispute->assigned_date }}');"
                                                class="btn btn-secondary btn-sm" title="Click to view assigned date">Date
                                                Assigned</label>
                                        @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                            <label class="btn btn-secondary btn-sm">Progress</label>
                                            <a href="{{ route('viewcommentstoadmin', $dispute->id) }}"
                                                class="btn btn-secondary btn-sm" title="View Comments">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                            <label class="btn btn-success btn-sm">Completed</label>
                                            <a href="{{ route('viewcommentstoadmin', $dispute->id) }}"
                                                class="btn btn-success btn-sm" title="View Comments">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        @endif
                                    </td>

                                    <td class="text-left">
                                        <a class="btn btn-info btn-sm m-1" id="show-detail" title="View Details"
                                            data-url="{{ route('alldisputedetails', $dispute->id) }}">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Dispute Type</th>
                                <th>Dispute Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div> <!-- Closing Div for .row class -->

        </div> <!-- Closing Div for .col-12 class -->
    </div> <!-- Closing Div for .container class -->




    <script>
        $(document).ready(function() {
            $('#admindisputedataTable').DataTable();
        })
    </script>





@endsection
