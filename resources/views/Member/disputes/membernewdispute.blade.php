@section('title', 'New Disputes') <!-- Web browser Tab Title -->
@section('disputetitle', 'New Disputes') <!-- Setting Page Title -->
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
                            <th class="p-3">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($membernewdisputes as $dispute)
                            <tr class="text-center">
                                <td>{{ $dispute->dispute_person_name }}</td>
                                <td>{{ $dispute->dispute_person_father_name }}</td>
                                <td>{{ $dispute->dispute_person_contact_number }}</td>
                                <td>{{ $dispute->dispute_person_address }}</td>
                                <td>{{ $dispute->disputestype->dispute_type_name }}</td>

                                <td>
                                    @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 1 && $dispute->assigned_date === null)
                                        <!-- <label class="btn btn-warning btn-sm">New Dispute</label> -->
                                        <form action="{{ route('assigndate', ['dispute_id' => $dispute->id]) }}"
                                            method="post" class="d-flex">
                                            @csrf
                                            <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">
                                            <input type="date" name="assigned_date" id="assigned_date"
                                                class="form-control" required>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>
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
