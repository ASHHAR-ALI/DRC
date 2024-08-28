@extends('Admin.dispute')


@section('title', 'All In-Progress Disputes')


@section('disputetitle', 'All In Progress Disputes')

@section('dispute')

    <div class="container-fluid">

        <div class="col-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="text-center mt-1 mb-4 name">
                        <h2>All In Progressed Disputes</h2>
                    </div>
                    <table id="admindisputedataTable" class="display" style="width:100%">
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
                            @foreach ($inprogressDisputes as $dispute)
                                <tr>
                                    <td>{{ $dispute->dispute_person_name }}</td>
                                    <td>{{ $dispute->dispute_person_father_name }}</td>
                                    <td>{{ $dispute->dispute_person_contact_number }}</td>
                                    <td>{{ $dispute->dispute_person_address }}</td>
                                    <td>{{ optional($dispute->disputestype)->dispute_type_name }}</td>

                                    <td>
                                        @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                            <label class="btn btn-secondary btn-sm">In Progress</label>
                                            <a href="{{ route('viewcommentstoadmin', $dispute->id) }}"
                                                class="btn btn-secondary btn-sm" title="View Comments">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        @endif
                                    </td>

                                    <td class="text-left">
                                        <a class="btn btn-info btn-sm m-1" id="show-detail"
                                            data-url="{{ route('alldisputedetails', $dispute->id) }}">
                                            </span> <i class="fa fa-info-circle"></i>
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
                <div class="col-1"></div>
            </div>
        </div>
    </div> <!-- Closing Div for .container class -->




    <script>
        $(document).ready(function() {
            $('#admindisputedataTable').DataTable();
        })
    </script>



@endsection
