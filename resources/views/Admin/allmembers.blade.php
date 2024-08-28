@extends('welcome')

@section('title', 'All Members')

@section('content')

    @include('Themes.DefaultTheme.Include.nav2member')

    <div class="container-fluid">

        <div class="col-12">
            <div class="row">
                <div class="col-10 mx-auto">
                    <!-- <div class="wrapper"> -->
                    <div class="text-center mt-1 mb-4 name">
                        <h2>All Members</h2>
                    </div>
                    <div class="tablebg">
                        <table id="memberdataTable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    {{-- <th>Image</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->fathername }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->contactnumber }}</td>

                                        {{-- <td>
                                            @if ($member->memberimage)
                                                <img src="{{ asset('/allassets/DefaultTheme/images/ActorsDetails/members/' . $member->memberimage) }}"
                                                    height="40px" width="40px" style="border-radius: 0.275rem;">
                                            @else
                                                <img src="{{ asset('/allassets/DefaultTheme/images/d1.jpeg') }}" height="40px" width="40px"
                                                    style="border-radius: 0.275rem;">
                                            @endif 
                                        </td> --}}
                                        <td class="text-left">

                                            <a class="btn btn-info btn-sm m-1 btn-show-details" id="show-detail"
                                                data-url="{{ route('membersdetails', $member->id) }}">
                                                <span class="" type="button" title="Edit">
                                                </span> <i class="fa fa-info-circle"></i>
                                            </a>

                                            <a class="btn btn-warning btn-sm m-1"
                                                href="{{ asset('/editmember/' . $member->id) }}">
                                                </span> <i class="fa fa-edit"></i>
                                            </a>

                                            <a class="btn btn-danger btn-sm m-1"
                                                href="{{ asset('/deletemember/' . $member->id) }}">
                                                {{-- <span class="" type="button" title="Delete"> --}}
                                                </span> </span> <i class="fa fa-trash"></i>
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
                                    {{-- <th>Image</th> --}}
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>

    </div> <!-- Closing Div for .container class -->





    <div class="modal fade" id="viewDetailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header justify-content-center text-center">
                    <!-- <h5 class="modal-title text-center" id="viewDetailsModalLabel">Details</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID:</th>
                                            <td><span id="id"></span></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Image:</th>
                                            <td><img id="memberImage" src="" alt="Member Image" height="100px"
                                                    width="100px" style="border-radius: 0.275rem;"></td>
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
                                            <td><span id="contactnumber"></span></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td><span id="address"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">CNIC:</th>
                                            <td><span id="cnic"></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Disputes:</th>
                                            <td><span id="totalDisputes"></span></td>
                                        </tr>
                                        <!-- Add more rows for additional member details as needed -->

                                    </tbody>
                                </table>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-secondary mt-2"
                                        data-bs-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-body">
                    <div class="container">
                        <!-- <div class="text-center mt-4 name">Details</div> -->
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <p><strong>Name: </strong><span id="name"></span></p>
                                        <p><strong>Father Name: </strong><span id="fathername"></span></p>
                                        <p><strong>Email: </strong><span id="email"></span></p>
                                        <p><strong>Contact Number: </strong><span id="contactnumber"></span></p>
                                        <p><strong>CNIC: </strong><span id="cnic"></span></p>
                                        <p><strong>Address: </strong><span id="address"></span></p>
                                        <p><strong>Total Disputes Assigned:</strong> <span id="totalDisputes"></span></p>
                                        <img id="memberImage" src="" alt="Member Image" height="120px"
                                            width="120px" style="border-radius: 0.275rem;">

                                    </div>

                                    <!-- <div class="col-lg-12 col-md-12 text-center" id="dispute_details"></div> -->

                                    <div class="d-grid">
                                        <button type="button" class="btn btn-secondary mt-2"
                                            data-bs-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
    </div>



    <script>
        $(document).ready(function() {
            $('body').on('click', '#show-detail', function() {
                var memberUrl = $(this).data('url');
                $.get(memberUrl, function(data) {
                    $('#viewDetailsModal').modal('show');
                    $('#id').text(data.id);
                    $('#name').text(data.name);
                    $('#fathername').text(data.fathername);
                    $('#email').text(data.email);
                    $('#contactnumber').text(data.contactnumber);
                    $('#address').text(data.address);
                    $('#cnic').text(data.cnic);
                    $('#totalDisputes').text(data.dispute.length);

                    // Set Member Image URL using asset() function
                    var memberImageUrl = data.memberimage ?
                        '{{ asset('allassets/images/ActorsDetails/members/') }}/' +
                        data
                        .memberimage :
                        '{{ asset('allassets/images/d1.jpeg') }}';

                    // console.log('Member Image URL:', memberImageUrl); // Log the member image URL

                    // Update the image source
                    $('#memberImage').attr('src', memberImageUrl);
                });
            });
        });
    </script>




    {{-- <script>
        $(document).ready(function() {
            $('body').on('click', '#show-detail', function() {
                var memberUrl = $(this).data('url');
                $.get(memberUrl, function(data) {
                    $('#viewDetailsModal').modal('show');
                    $('#id').text(data.id);
                    $('#name').text(data.name);
                    $('#fathername').text(data.fathername);
                    $('#email').text(data.email);
                    $('#contactnumber').text(data.contactnumber);
                    $('#cnic').text(data.cnic);
                    $('#address').text(data.address);
                    $('#totalDisputes').text(data.dispute.length);
                    // Set Member Image
                    var memberImageUrl = data.memberimage ?
                        '/public/allassets/DefaultTheme/images/ActorsDetails/members/' + data.memberimage :
                        'public/allassets/DefaultTheme/images/d1.jpeg';
                    $('#memberImage').attr('src', memberImageUrl);

                    // $('#dispute_details').empty();
                    // // Append dispute details
                    // if (data.dispute.length > 0) {
                    //     data.dispute.forEach(function(dispute) {
                    //         var disputeType = dispute
                    //         .dispute_type; // Assuming this is the type name
                    //         var disputePersonName = dispute.dispute_person_name;
                    //         var disputeStatus = dispute.dispute_status;

                    //         // Append dispute details to modal
                    //         $('#dispute_details').append(
                    //             '<p><strong>Dispute Type:</strong> ' + disputeType +
                    //             '</p>');
                    //         $('#dispute_details').append(
                    //             '<p><strong>Dispute Person Name:</strong> ' +
                    //             disputePersonName + '</p>');
                    //         $('#dispute_details').append(
                    //             '<p><strong>Dispute Status:</strong> ' + disputeStatus +
                    //             '</p>');
                    //     });
                    // } else {
                    //     $('#dispute_details').text('No disputes found.');
                    // }
                });
            });
        });
    </script> --}}



    <script>
        $(document).ready(function() {
            $('#memberdataTable').DataTable();
        })
    </script>


@endsection




{{-- <script>
    $(document).ready(function() {
        // Event handler for clicking the "View All Details" button
        $('.btn-view-details').click(function() {
            var memberId = $(this).data('member_id');



            // AJAX request to fetch member details
            $.ajax({
                url: '/viewdetails/' + memberId,
                method: 'GET',
                success: function(response) {
                    // Populate modal fields with fetched data
                    $('.modal-title').text('Details for ' + response.name);
                    $('.name').text(response.name);
                    $('.fathername').text(response.fathername);
                    $('.email').text(response.email);
                    $('.password').text(response.password);
                    $('.contactnumber').text(response.contact_number);
                    
                    $('.cnic').text(response.cnic);
                    $('.dispute_type').text(response.dispute_type);

                    // Show the modal
                    $('#viewDetailsModal').modal('show');
                },
                error: function() {
                    alert('Failed to fetch member details.');
                }
            });
        });
    });
</script> --}}



















































{{-- <script>
    $(document).ready(function() {
        $('.btn-show-details').click(function() {
            var memberId = $(this).data('member-id'); // Assuming 'member-id' is stored in data attribute

            $.ajax({
                url: '/viewdetails',
                type: 'POST',
                data: { member_id: memberId },
                success: function(response) {
                    $('.modal-body .name').text(response.name);
                    $('.modal-body .fathername').text(response.fathername);
                    $('.modal-body .email').text(response.email);
                    $('.modal-body .contactnumber').text(response.contactnumber);
                    $('.modal-body .cnic').text(response.cnic);
                    $('.modal-body .address').text(response.address);
                    $('.modal-body .dispute_type').text(response.dispute_type);

                    $('#viewDetailsModal').modal('show');
                },
                error: function(xhr) {
                    // Handle error
                    return 404;
                }
            });
        });
    });
</script> --}}



{{-- <script>
    //todo:slug generate
    $(document).on('click', '.btn-show-details', function (e) {
        let name = $(this).data('name');
        let fathername = $(this).data('fathername');
        let contact = $(this).data('contact');
        let email = $(this).data('email');
        let dispute_type = $(this).data('dispute_type');

        $('.name').text(name);
        $('.fathername').text(fathername);
        $('.contact').text(contact);
        $('.email').text(email);
        $('.dispute_type').text(dispute_type);
    });
</script> --}}
