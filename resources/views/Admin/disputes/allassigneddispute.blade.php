@extends('Admin.dispute')


@section('title', 'All Assigned Disputes')


@section('disputetitle', 'All Assigned Disputes')

@section('dispute')

    <div class="container-fluid">

        <div class="col-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="text-center mt-1 mb-4 name">
                        <h2>All Assigned Disputes</h2>
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
                            @foreach ($assignedDisputes as $dispute)
                                <tr>
                                    <td>{{ $dispute->dispute_person_name }}</td>
                                    <td>{{ $dispute->dispute_person_father_name }}</td>
                                    <td>{{ $dispute->dispute_person_contact_number }}</td>
                                    <td>{{ $dispute->dispute_person_address }}</td>
                                    <td>{{ optional($dispute->disputestype)->dispute_type_name }}</td>

                                    <td>
                                        @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 1 && $dispute->assigned_date === null)
                                            <label class="btn btn-warning btn-sm">Member Assigned </label>
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







    <!-- -------------------------------------------Modal for View the Details of the Records ------------------------------------------- -->
    <div class="modal fade" id="viewDetailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                {{-- <div class="modal-header justify-content-center text-center">
                    <h5 class="modal-title text-center" id="viewDetailsModalLabel">Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}
                <div class="modal-body tablebg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-bordered table-dark table-striped table-hover">
                                    <h4>The Dispute</h4>
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID:</th>
                                            <td><span id="id"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Name:</th>
                                            <td><span id="name"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Father Name:</th>
                                            <td><span id="fathername"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Contact Number:</th>
                                            <td><span id="contact"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td><span id="address"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered table-dark table-striped table-hover">
                                    <h4>
                                        The Disputer
                                    </h4>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Disputer Name:</th>
                                            <td><span id="disputer-name"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Disputer Father Name:</th>
                                            <td><span id="disputer-fathername"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Disputer Email:</th>
                                            <td><span id="disputer-email"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Disputer CNIC:</th>
                                            <td><span id="disputer-cnic"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Disputer Contact:</th>
                                            <td><span id="disputer-contact"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Disputer Address:</th>
                                            <td><span id="disputer-address"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Image:</th>
                                            <td><img id="disputerImage" src="" alt="Disputer Image" height="100px"
                                                    width="100px" style="border-radius: 0.275rem;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered table-dark table-striped table-hover">
                                    <h4>
                                        The Member
                                    </h4>
                                    <tbody id="members-details"></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#admindisputedataTable').DataTable();
        })
    </script>
@endsection
