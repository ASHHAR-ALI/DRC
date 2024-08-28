@extends('welcome')


@section('title', 'All Users')


@section('content')

    @include('Themes.DefaultTheme.Include.nav2disputer')
    <div class="container-fluid">

        <div class="col-12">
            <div class="row">
                <div class="col-10 mx-auto">
                    <!-- <div class="wrapper"> -->
                    <div class="text-center mt-1 mb-4 name">
                        <h2>All Disputers</h2>
                    </div>
                    <div class="tablebg">
                    <table id="disputerdataTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($disputers as $disputer)
                                <tr>
                                    <td>{{ $disputer->name }}</td>
                                    <td>{{ $disputer->fathername }}</td>
                                    <td>{{ $disputer->email }}</td>
                                    <td>{{ $disputer->contact }}</td>
                                    {{-- <td>{{ optional($disputer->disputeType)->dispute_type_name }}</td> --}}

                                    {{-- <td>

                                        @if ($disputer->disputerimage)
                                            <img src="{{ asset('/allassets/DefaultTheme/images/ActorsDetails/disputers/' . $disputer->disputerimage) }}"
                                                height="40px" width="40px" style="border-radius: 0.275rem;">
                                        @else
                                            <img src="{{ asset('/allassets/DefaultTheme/images/d1.jpeg') }}" height="40px"
                                                width="40px" style="border-radius: 0.275rem;">
                                        @endif

                                    </td> --}}

                                    <td class="text-left">


                                        <a class="btn btn-info btn-sm m-1" id="show-detail"
                                            data-url="{{ route('disputersdetails', $disputer->id) }}">
                                            </span> <i class="fa fa-info-circle"></i>
                                        </a>


                                        <a class="btn btn-warning btn-sm m-1"
                                            href="{{ asset('/editdisputer/' . $disputer->id) }}">
                                            </span> <i class="fa fa-edit"></i>
                                        </a>

                                        <a class="btn btn-danger btn-sm m-1"
                                            href="{{ asset('/deletedisputer/' . $disputer->id) }}">
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







    <!-- -------------------------------------------Modal for View the Details of the Records ------------------------------------------- -->
    <div class="modal fade" id="viewDetailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header justify-content-center text-center">
                    <!-- <h5 class="modal-title text-center" id="viewDetailsModalLabel">Details</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
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
                                            <td><img id="disputerImage" src="" alt="Disputer Image" height="100px"
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
                                            <td><span id="contact"></span></td>
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
                                        <p><strong>Phone: </strong><span id="contact"></span></p>
                                        <p><strong>CNIC: </strong><span id="cnic"></span></p>
                                        <p><strong>Address: </strong><span id="address"></span></p>
                                        <p><strong>Total Disputes:</strong> <span id="totalDisputes"></span></p>
                                        <img id="disputerImage" src="" alt="Disputer Image" height="120px"
                                            width="120px" style="border-radius: 0.275rem;">
                                    </div>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-secondary mt-2"
                                            data-bs-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function() {
            $('body').on('click', '#show-detail', function() {
                var disputerUrl = $(this).data('url');
                $.get(disputerUrl, function(data) {
                    $('#viewDetailsModal').modal('show');
                    $('#id').text(data.id);
                    $('#name').text(data.name);
                    $('#fathername').text(data.fathername);
                    $('#email').text(data.email);
                    $('#contact').text(data.contact);
                    $('#cnic').text(data.cnic);
                    $('#address').text(data.address);
                    $('#totalDisputes').text(data.disputes.length);

                    var disputerImageUrl = data.disputerimage ?
                        '{{ asset('allassets/images/ActorsDetails/disputers/') }}/' +
                        data
                        .disputerimage :
                        '{{ asset('allassets/images/d1.jpeg') }}';
                    // console.log('Disputer Image URL:', disputerImageUrl); // Log the disputer image URL
                    $('#disputerImage').attr('src', disputerImageUrl);


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
    </script>




    <script>
        $(document).ready(function() {
            $('#disputerdataTable').DataTable();
        })
    </script>

@endsection





{{-- <script>
    $(document).ready(function() {
        $('.btn-show-details').click(function() {
            var disputerId = $(this).data('disputer-id'); // Assuming 'disputer-id' is stored in data attribute

            $.ajax({
                url: '/viewdetailsofdisputer',
                type: 'POST',
                data: { disputer_id: disputerId },
                success: function(response) {
                    $('.modal-body .name').text(response.name);
                    $('.modal-body .fathername').text(response.father_name);
                    $('.modal-body .contact').text(response.phone);
                    $('.modal-body .email').text(response.email);
                    $('.modal-body .dispute_type').text(response.dispute_type);

                    $('#viewDetailsModal').modal('show');
                },
                error: function(xhr) {
                    // Handle error
                }
            });
        });
    });
</script> --}}
