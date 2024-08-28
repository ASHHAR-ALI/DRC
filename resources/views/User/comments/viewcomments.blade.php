@extends('welcome')

@section('title', 'View Comment')

@section('content')


    <div class="container">

        <div class="row mb-3 text-center">
            <div class="col-12 p-3 top-0 start-0 ">
                <a href="javascript:history.back()" class="btn btn-secondary btn-sm">Return Back</a>


                <a href="{{ asset('/') }}" class="btn btn-warning btn-sm">Return to Home</a>


                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status == 4 && $dispute->assigned_date == 4)
                    <a class="btn btn-info btn-sm m-1" id="show-detail"
                        data-url="{{ route('reviewfinaldecision', $dispute->id) }}">
                        View Decision
                        <!-- <i class="fa fa-info-circle"></i> -->
                    </a>
                @else
                    <a class="btn btn-primary btn-sm text-white bg-dark mx-auto" data-bs-toggle="modal"
                        data-bs-target="#addCommentByDisputerModal">Add New Comment</a>
                @endif



            </div>
        </div>

        <div class="wrapper">

            <div class="text-center mb-2 name text-success">Comments</div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-10">
                    <div class="card mb-4">
                        <div class="card-body tablebg">
                            <h5 class="card-title text-center text-success">Dispute Details</h5>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p><strong>Disputer Name:</strong> {{ $dispute->disputer->name }}</p>
                                    @foreach ($dispute->members as $member)
                                        <p><strong>Member Name:</strong> {{ $member->name }}</p>
                                    @endforeach
                                    <p><strong>Dispute Person Name:</strong> {{ $dispute->dispute_person_name }}</p>
                                </div>
                                <div class="col-6">

                                    <p><strong>Dispute Type:</strong> {{ $dispute->disputestype->dispute_type_name }}</p>


                                    <div class="row text-center justify-content-center">
                                        @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                            <a href="{{ route('downloadreport', ['disputeId' => $dispute->id]) }}"
                                                class="btn btn-success btn-sm mb-2"
                                                style="box-shadow: none; border-radius: none;"><strong>
                                                    Download Final
                                                    Report</strong> </a>
                                        @else
                                            <p><strong>Assigned Date:</strong> {{ $dispute->assigned_date }}</p>
                                        @endif
                                    </div>


                                    <div class="row">
                                        @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                            <label>
                                                <p><strong>Status:</strong> In progress </p>
                                            </label>
                                        @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status == 4 && $dispute->assigned_date == 4)
                                            <label>
                                                <p><strong>Status:</strong> Completed </p>
                                            </label>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($comments->sortBy('created_at') as $comment)
                    <div class="d-flex mb-4">
                        @if ($comment->member_id)
                            <!-- Display member's comment on the left -->

                            @if ($comment->memberUser->memberimage)
                                <img src="{{ asset('/allassets/images/ActorsDetails/members/' . $comment->memberUser->memberimage) }}"
                                    class="rounded-circle shadow me-3" width="65" height="65">
                            @else
                                <img src="{{ asset('/allassets/images/d1.jpeg') }}" class="rounded-circle shadow me-3"
                                    width="65" height="65">
                            @endif

                            <div class="card w-100" style="background-color: rgb(102, 0, 255)">
                                <div class="card-body p-4 ">
                                    <div>
                                        <h5>{{ $comment->memberUser->name }}</h5>
                                        <p class="small">{{ $comment->created_at->diffForHumans() }}</p>
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            </div>
                        @elseif ($comment->disputer_id)
                            <!-- Display disputer's comment on the right -->
                            <div class="card w-100" style="background-color: green">
                                <div class="card-body p-4 ">
                                    <div>
                                        <h5 class="d-flex justify-content-end">{{ $comment->disputerUser->name }}</h5>
                                        <p class="small d-flex justify-content-end">
                                            {{ $comment->created_at->diffForHumans() }}</p>
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            </div>
                            @if ($comment->disputerUser->disputerimage)
                                <img src="{{ asset('/allassets/images/ActorsDetails/disputers/' . $comment->disputerUser->disputerimage) }}"
                                    class="rounded-circle shadow me-3" width="65" height="65">
                            @else
                                <img src="{{ asset('/allassets/images/d1.jpeg') }}" class="rounded-circle shadow me-3"
                                    width="65" height="65">
                            @endif
                        @endif
                    </div>
                @endforeach


            </div>
        </div>


        <div class="row mb-3 text-end">
            <div class="col-12 p-3">
                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status == 4 && $dispute->assigned_date == 4)
                @else
                    <input class="justify-content-end" type="text" placeholder="Write comments" data-bs-toggle="modal"
                        data-bs-target="#addCommentByDisputerModal">
                    <!-- <a class="btn btn-primary btn-sm text-white bg-dark mx-auto" data-bs-toggle="modal"
                                    data-bs-target="#addCommentByDisputerModal">Add New Comment</a> -->
                @endif
            </div>
        </div>


    </div>
    </div>




























    <!-- ------------------------The Bootstrap Modal for Adding the Comment Form By Disputer ------------------------ -->


    <!-- -------------------------------------------Modal for View the Details of the Records ------------------------------------------- -->
    <div class="modal fade" id="addCommentByDisputerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addCommentByDisputerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                {{-- <div class="modal-header justify-content-center text-center">
                    <h5 class="modal-title text-center" id="addCommentByDisputerModalLabel">Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}

                <div class="modal-body tablebg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center mt-4 name"> Add Comment </div>

                                <!--  --------------------- Add Comment to Dispute ---------------------    -->
                                <form class="p-3 mt-1" action="{{ route('addcommentbydisputer', ['id' => $dispute->id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="member_id" value="{{ $dispute->member_id }}">
                                    <input type="hidden" name="disputer_id" value="{{ $dispute->disputer_id }}">
                                    <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="fw-bold">Your Comment</label>
                                            <textarea class="form-control" name="comment" id="comment" cols="30" rows="7"
                                                placeholder="Write your Comment"></textarea>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success mt-2" name="submit">SUBMIT</button>
                                </form>

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




    <!-- ------------------------The Bootstrap Modal for Adding the Comment Form By Disputer ------------------------ -->


    <!-- -------------------------------------------Modal for View the Details of the Records ------------------------------------------- -->
    <div class="modal fade" id="finalReviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="finalReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                {{-- <div class="modal-header justify-content-center text-center">
                    <h5 class="modal-title text-center" id="finalReviewModalLabel">Dispute Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}

                <div class="modal-body tablebg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="text-center mt-4 name"> Dispute Details </div> -->
                                <div class="card mb-4 bg-dark">
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title text-center">Dispute Details</h5>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <p><strong>Dispute ID:</strong> {{ $dispute->id }}</p>
                                                <p><strong>Dispute Type:</strong>
                                                    {{ $dispute->disputestype->dispute_type_name }}</p>
                                            </div>
                                            <div class="col-6">

                                                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                                    <a href="{{ route('downloadreport', ['disputeId' => $dispute->id]) }}"
                                                        class="btn btn-success mb-2"><strong> Download Final
                                                            Report</strong> </a>
                                                @else
                                                    <p><strong>Assigned Date:</strong> {{ $dispute->assigned_date }}</p>
                                                @endif


                                                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                                    <p><strong>Status:</strong> In progress </p>
                                                @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                                    <p><strong>Status:</strong> Completed </p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 bg-dark text-white">
                                    <div class="row text-center mt-4">
                                        <h5 class="card-title text-center text-decoration-underline">Final Review</h5>
                                        <div class="col-10 mx-auto">
                                            <p>{{ $dispute->final_review }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary mt-2"
                                        data-bs-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer bg-dark text-white">
                    <div class="d-grid">
                        <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>











    <script>
        $(document).ready(function() {
            $('body').on('click', '#show-detail', function() {
                var disputeUrl = $(this).data('url');
                $.get(disputeUrl, function(data) {
                    $('#finalReviewModal').modal('show');
                    $('#id').text(data.id);
                    $('#final_review').text(data.final_review);



                    // For Disputer Image -------------------------------------------

                    var disputerImageUrl = data.disputer.disputerimage ?
                        '{{ asset('allassets/images/ActorsDetails/disputers/') }}/' +
                        data.disputer.disputerimage :
                        '{{ asset('allassets/images/d1.jpeg') }}';
                    console.log('Disputer Image URL:',
                        disputerImageUrl); // Log the disputer image URL
                    $('#disputerImage').attr('src', disputerImageUrl);


                    // For Member Image -------------------------------------------
                    var memberimageUrl = data.members.memberimage ?
                        '{{ asset('allassets/images/ActorsDetails/members/') }}/' +
                        data.members.memberimage :
                        '{{ asset('allassets/images/d1.jpeg') }}';
                    $('#memberimage').attr('src', memberimageUrl);

                });
            });
        });
    </script>




@endsection



























































{{-- <!-- <section style="background-color: #eee;">
                    <div class="container my-5 py-5"> -->
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <!-- <img class="rounded-circle shadow me-3"
                                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                                    width="60" height="60" style="object-fit: cover;" /> -->
                                <div>
                                    <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                    <p class="text-muted small mb-0">
                                        Shared publicly - Jan 2020
                                    </p>
                                </div>
                            </div>

                            <p class="mt-3 mb-4 pb-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                            </p>
                        </div>
                        <div class="card-footer py-3" style="background-color: #f8f9fa;">
                            <form class="p-3 mt-1" action="{{ route('addcomment', ['id' => $dispute->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="member_id" value="{{ $dispute->member_id }}">
                                <input type="hidden" name="disputer_id" value="{{ $dispute->disputer_id }}">
                                <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">
                                <div class="d-flex w-100">
                                    <!-- <img class="rounded-circle shadow me-3"
                                                    src="" alt="avatar"
                                                    width="40" height="40" style="object-fit: cover;" /> -->
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" id="commentAreaText" name="comment" rows="4" placeholder="Write your Comment"
                                            style="background: #fff;"></textarea>
                                        <!--  <label class="form-label" for="commentAreaText">Add Comment</label> -->
                                    </div>
                                </div>
                                <div class="float-end mt-2">
                                    <button type="button" class="btn btn-primary btn-sm" name="submit">Post
                                        comment</button>
                                    <!-- <button type="button" class="btn btn-outline-primary btn-sm ms-2">Cancel</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--  </div>
                </section> --> --}}





















{{-- <!-- Template Code -->

     <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-10">
                    <div class="d-flex mb-4">
                        <img class="rounded-circle shadow me-3" src="{{ asset('/allassets/images/d1.jpeg') }}"
                            alt="avatar" width="65" height="65" />
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <div>
                                    <h5>Johny Cash</h5>
                                    <p class="small">3 hours ago</p>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                        Donec lacinia congue felis in faucibus ras purus odio, vestibulum in
                                        vulputate at, tempus viverra turpis.
                                    </p>

                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#addCommentModal"
                                            class="text-muted"><i class="fas fa-reply me-1"></i>
                                            Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <img class="rounded-circle shadow me-3" src="{{ asset('/allassets/images/d1.jpeg') }}"
                            alt="avatar" width="65" height="65" />
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <div>
                                    <h5>Mindy Campbell</h5>
                                    <p class="small">5 hours ago</p>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                                        cumque doloribus dolorum dolor repellat nemo animi at iure autem fuga
                                        cupiditate architecto ut quam provident neque, inventore nisi eos quas?
                                    </p>

                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#addCommentModal"
                                            class="text-muted"><i class="fas fa-reply me-1"></i>
                                            Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}






{{-- <!-- Display All the Comments Associated with the dispute duplicate -->
                <div class="container">
        <div class="wrapper">
            <div class="row mb-3">
                <div class="col-3">
                    <a href="javascript:history.back()" class="btn btn-secondary text-left">Return Back</a>
                </div>
                <div class="col-3">
                    <a href="{{ asset('/') }}" class="btn btn-warning text-left">Return to Home</a>
                </div>
            </div>
            <!-- Loop through comments -->
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-10">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Dispute Details</h5>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p><strong>Dispute ID:</strong> {{ $dispute->id }}</p>
                                    <p><strong>Dispute Type:</strong> {{ $dispute->disputestype->dispute_type_name }}</p>
                                </div>
                                <div class="col-6">

                                    @if ($dispute->member_id !== null && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                        <label>
                                            <p><strong>Status:</strong> In Progress</p>
                                        </label>
                                    @elseif ($dispute->member_id !== null && $dispute->dispute_status === 4 && $dispute->assigned_date !== null)
                                        <label>
                                            <p><strong>Status:</strong> In Progress</p>
                                        </label>
                                    @endif

                                    <p><strong>Assigned Date:</strong> {{ $dispute->assigned_date }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($dispute->comments->sortBy('created_at') as $comment)
                        <div class="d-flex mb-4">

                            <img class="rounded-circle shadow me-3"
                                src="{{ asset('/allassets/images/d1.jpeg') }}" alt="avatar" width="65"
                                height="65" />


                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <h5>{{ $comment->memberUser ? $comment->memberUser->name : $comment->disputerUser->name }}
                                    </h5>
                                    <p class="small">{{ $comment->created_at->diffForHumans() }}</p>
                                    <p>{{ $comment->comment }}</p>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="" class="text-muted"><i class="fas fa-reply me-1"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
