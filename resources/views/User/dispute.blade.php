@extends('welcome')

@section('title', 'Disputes')

@section('content')

    <div class="container">

        <div class="row">
            <h1 class="text-center mt-3">Disputes</h1>
        </div>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">

                    <div class="row">
                        <div class="col-2">
                            <a href="javascript:history.back()" class="btn btn-secondary text-left">Return Back</a>
                        </div>
                        <div class="col-2">
                            <a href="{{ asset('/') }}" class="btn btn-warning text-left">Return Home</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2 pt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-condensed text-center table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Dispute</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a class="text-decoration-none text-success"
                                                    href="{{ asset('/disputedetailview') }}">All Disputes</td></a>
                                        </tr>
                                        <tr>
                                            <td><a class="text-decoration-none text-success"
                                                    href="{{ asset('/pendingdisputeview') }}">Pending Disputes</td></a>
                                        </tr>

                                        <tr>
                                            <td><a class="text-decoration-none text-success"
                                                    href="{{ asset('/assigneddisputeview') }}">Assigned Disputes</td></a>
                                        </tr>

                                        <tr>
                                            <td><a class="text-decoration-none text-success"
                                                    href="{{ asset('/dateassigneddisputeview') }}">Date Assigned Disputes
                                            </td></a>
                                        </tr>

                                        <tr>
                                            <td><a class="text-decoration-none text-success"
                                                    href="{{ asset('/inprogressdisputeview') }}">In Progress Disputes</td>
                                            </a>
                                        </tr>

                                        <tr>
                                            <td><a class="text-decoration-none text-success"
                                                    href="{{ asset('/completeddisputeview') }}">Completed Disputes</td></a>
                                        </tr>
                                        <tr>
                                            <td><a class="text-decoration-none text-success" data-bs-toggle="modal"
                                                    data-bs-target="#addDisputeModal">New Dispute</td></a>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- /col-2 -->


                        <div class="col-10 pt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-condensed text-center table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col"> @yield('disputetitle')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>@yield('dispute') </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div> <!--/. row -->
                </div> <!-- /col-12 -->
            </div> <!--/. container-fluid -->
        </section>
    </div>















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
                                    <h4 class="text-center">The Dispute</h4>
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
                                            <th scope="row">Email:</th>
                                            <td><span id="email"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Contact Number:</th>
                                            <td><span id="contact"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">CNIC:</th>
                                            <td><span id="cnic"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td><span id="address"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Image:</th>
                                            <td><img id="againstdisputerImage" src="" alt="Against Disputer Image"
                                                    height="100px" width="100px" style="border-radius: 0.275rem;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered table-dark table-striped table-hover">
                                    <h4 class="text-center">The Disputer</h4>
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
                                    <h4 class="text-center">The Member</h4>
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
            $('body').on('click', '#show-detail', function() {
                var disputeUrl = $(this).data('url');
                $.get(disputeUrl, function(data) {
                    $('#viewDetailsModal').modal('show');
                    $('#id').text(data.id);
                    $('#name').text(data.dispute_person_name);
                    $('#fathername').text(data.dispute_person_father_name);
                    $('#contact').text(data.dispute_person_contact_number);
                    $('#address').text(data.dispute_person_address);
                    $('#email').text(data.email);
                    $('#cnic').text(data.dispute_person_cnic);
                    $('#disputer-name').text(data.disputer.name);
                    $('#disputer-fathername').text(data.disputer.fathername);
                    $('#disputer-email').text(data.disputer.email);
                    $('#disputer-cnic').text(data.disputer.cnic);
                    $('#disputer-contact').text(data.disputer.contact);
                    $('#disputer-address').text(data.disputer.address);

                    // Clear existing members' information
                    $('#members-details').empty();

                    // Loop through each member and append their details
                    data.members.forEach(function(member) {
                        var memberDetails = `
                            <tr>
                                <th scope="row">Member Name:</th>
                                <td>${member.name}</td>
                            </tr>
                            <tr>
                                <th scope="row">Member Father's Name:</th>
                                <td>${member.fathername}</td>
                            </tr>
                            <tr>
                                <th scope="row">Member Email:</th>
                                <td>${member.email}</td>
                            </tr>
                            <tr>
                                <th scope="row">Member CNIC:</th>
                                <td>${member.cnic}</td>
                            </tr>
                            <tr>
                                <th scope="row">Member Contact Number:</th>
                                <td>${member.contactnumber}</td>
                            </tr>
                            <tr>
                                <th scope="row">Member Address:</th>
                                <td>${member.address}</td>
                            </tr>
                            <tr>
                                <th scope="row">Image:</th>
                                <td>
                                    <img src="${member.memberimage ? '{{ asset('allassets/images/ActorsDetails/members/') }}/' + member.memberimage : '{{ asset('allassets/images/d1.jpeg') }}'}" alt="Member Image" height="100px" width="100px" style="border-radius: 0.275rem;">
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr/></td></tr>
                        `;
                        $('#members-details').append(memberDetails);
                    });

                    // Set the disputer's image
                    var disputerImageUrl = data.disputer.disputerimage ?
                        `{{ asset('allassets/images/ActorsDetails/disputers/') }}/${data.disputer.disputerimage}` :
                        `{{ asset('allassets/images/d1.jpeg') }}`;
                    $('#disputerImage').attr('src', disputerImageUrl);

                    // Set the againstdisputer's image
                    var againstdisputerImageUrl = data.againstdisputerimage ?
                        `{{ asset('allassets/images/ActorsDetails/againstdisputers/') }}/${data.againstdisputerimage}` :
                        `{{ asset('allassets/images/d1.jpeg') }}`;
                    $('#againstdisputerImage').attr('src', againstdisputerImageUrl);

                });
            });
        });
    </script>



@endsection
