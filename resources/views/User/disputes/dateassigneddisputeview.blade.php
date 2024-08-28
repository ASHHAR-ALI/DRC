@section('title', 'Date Assigned Disputes') <!-- Web browser Tab Title -->
@section('disputetitle', 'Date Assigned Disputes') <!-- Setting Page Title -->
@section('dispute')





    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-12 mx-auto mt-4 text-center">
                <table id="userdisputedataTable" class="table table-striped table-bordered table-hover table-dark ">
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
                        @foreach ($dateassigneddisputes as $dispute)
                            <tr class="text-center">
                                <td>{{ $dispute->dispute_person_name }}</td>
                                <td>{{ $dispute->dispute_person_father_name }}</td>
                                <td>{{ $dispute->dispute_person_contact_number }}</td>
                                <td>{{ $dispute->dispute_person_address }}</td>
                                <td>{{ $dispute->disputestype->dispute_type_name }}</td>
                                <td>

                                    @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 2 && $dispute->assigned_date !== null)


                                    
                                        <label onclick="showAssignedDate('{{ $dispute->assigned_date }}');"
                                            class="btn btn-secondary btn-sm" title="Click to view assigned date">Date
                                            Assigned</label>
                                            
                                    @else
                                        N/A
                                    @endif

                                </td>

                                <td>
                                    <a class="btn btn-info btn-sm m-1" id="show-detail"
                                        data-url="{{ route('alldisputedetails', $dispute->id) }}">
                                        </span> <i class="fa fa-info-circle"></i>
                                    </a>

                                    {{-- <!-- <a class="btn btn-warning btn-sm m-1"
                                        href="{{ asset('/editalldispute/' . $dispute->id) }}">
                                        
                                        </span> <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="btn btn-danger btn-sm m-1"
                                        href="{{ asset('/deletealldispute/' . $dispute->id) }}">
                                        </span> </span> <i class="fa fa-trash"></i>
                                    </a> --> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    {{-- <p>This Record is the email to which the DRC Contact-Us Queries will be send.</p> --}}
                </table>
                {{-- @endif --}}
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
                    $('#disputer-name').text(data.disputer.name);
                    $('#disputer-fathername').text(data.disputer.fathername);
                    $('#disputer-email').text(data.disputer.email);
                    $('#disputer-cnic').text(data.disputer.cnic);
                    $('#disputer-contact').text(data.disputer.contact);
                    $('#disputer-address').text(data.disputer.address);

                    $('#member-name').text(data.members.name);
                    $('#member-fathername').text(data.members.fathername);
                    $('#member-email').text(data.members.email);
                    $('#member-cnic').text(data.members.cnic);
                    $('#member-contactnumber').text(data.members.contactnumber);
                    $('#member-address').text(data.members.address);


                    // For Disputer Image -------------------------------------------

                    var disputerImageUrl = data.disputer.disputerimage ?
                        '{{ asset('allassets/images/ActorsDetails/disputers/') }}/' +
                        data.disputer.disputerimage :
                        '{{ asset('allassets/images/d1.jpeg') }}';
                    console.log('Disputer Image URL:', disputerImageUrl); // Log the disputer image URL
                    $('#disputerImage').attr('src', disputerImageUrl);


                    // For Member Image -------------------------------------------
                    var memberimageUrl = data.members.memberimage ?
                        '{{ asset('allassets/images/ActorsDetails/members/') }}/' +
                        data.members.memberimage :
                        '{{ asset('allassets/images/d1.jpeg') }}';
                    $('#memberimage').attr('src', memberimageUrl);


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




@include('User.dispute')
