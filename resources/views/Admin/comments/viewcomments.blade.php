@extends('welcome')

@section('title', 'View Comments')
@section('content')


    <div class="container">
        <div class="row mb-3 text-center">
            <div class="col-12 p-3 top-0 start-0 ">

                <a href="javascript:history.back()" class="btn btn-secondary mx-auto">Return Back</a>

                <a href="{{ asset('/') }}" class="btn btn-warning mx-auto">Return to Home</a>

                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status == 3 && $dispute->assigned_date !== null)
                    <a class="btn btn-info mx-auto">In Progress</a>
                @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status == 4 && $dispute->assigned_date == 4)
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#doFinalProcessofDispute"> Final
                        Decision</a>
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
                                    <div class="row text-center justify-content-center">
                                        @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                            <a href="{{ route('downloadreport', ['disputeId' => $dispute->id]) }}" class="btn btn-success btn-sm mb-2"
                                                style="box-shadow: none; border-radius: none;"><strong>
                                                    Download Final
                                                    Report</strong> </a>
                                        @else
                                            <p><strong>Assigned Date:</strong> {{ $dispute->assigned_date }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @foreach ($comments->sortBy('created_at') as $comment)
                            <div class="d-flex mb-4">
                                @if ($comment->member_id)
                                    <!-- Display member's comment -->
                                    @if ($comment->member->memberimage)
                                        <img src="{{ asset('/allassets/images/ActorsDetails/members/' . $comment->member->memberimage) }}"
                                            class="rounded-circle shadow me-3" width="65" height="65">
                                    @else
                                        <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                            class="rounded-circle shadow me-3" width="65" height="65">
                                    @endif

                                    <div class="card w-100" style="background-color: rgb(102, 0, 255)">
                                        <div class="card-body p-4 ">
                                            <div>
                                                <h5>{{ $comment->member->name }}</h5>
                                                <p class="small">{{ $comment->created_at->diffForHumans() }}</p>
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($comment->disputer_id)
                                    <!-- Display disputer's comment -->
                                    <div class="card w-100" style="background-color: green">
                                        <div class="card-body p-4 ">
                                            <div>
                                                <h5 class="d-flex justify-content-end">{{ $comment->disputer->name }}</h5>
                                                <p class="small d-flex justify-content-end">
                                                    {{ $comment->created_at->diffForHumans() }}</p>
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($comment->disputer->disputerimage)
                                        <img src="{{ asset('/allassets/images/ActorsDetails/disputers/' . $comment->disputer->disputerimage) }}"
                                            class="rounded-circle shadow me-3" width="65" height="65">
                                    @else
                                        <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                            class="rounded-circle shadow me-3" width="65" height="65">
                                    @endif
                                @elseif ($comment->againstdisputer)
                                    <!-- Display againstdisputer's comment -->
                                    <div class="card w-100" style="background-color: blue">
                                        <div class="card-body p-4 ">
                                            <div>
                                                <h5 class="d-flex justify-content-end">
                                                    {{ $comment->againstdisputer->dispute_person_name }}</h5>
                                                <p class="small d-flex justify-content-end">
                                                    {{ $comment->created_at->diffForHumans() }}</p>
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($comment->againstdisputer->againstdisputerimage)
                                        <img src="{{ asset('/allassets/images/ActorsDetails/againstdisputers/' . $comment->againstdisputer->againstdisputerimage) }}"
                                            class="rounded-circle shadow me-3" width="65" height="65">
                                    @else
                                        <img src="{{ asset('/allassets/images/d1.jpeg') }}"
                                            class="rounded-circle shadow me-3" width="65" height="65">
                                    @endif
                                @endif
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


    @endsection









    <!-- Model for Making the Final Decision Process -->

    <div class="modal fade" id="doFinalProcessofDispute" data-bs-backdrop="static" aria-hidden="true"
        aria-labelledby="doFinalProcessofDisputeLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h1 class="modal-title fs-5 mx-auto" id="doFinalProcessofDisputeLabel">Closing The Dispute</h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>

                <div class="modal-body bg-dark">

                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="card mb-4 tablebg">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-success">Dispute Details</h5>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <p><strong>Dispute ID:</strong> {{ $dispute->id }}</p>
                                                <p><strong>Dispute Type:</strong>
                                                    {{ $dispute->disputestype->dispute_type_name }}</p>
                                            </div>
                                            <div class="col-6">




                                                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                                                    <p><strong>Status:</strong> In progress </p>
                                                @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                                    <p><strong>Status:</strong> Completed </p>
                                                @endif


                                                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 4 && $dispute->assigned_date == 4)
                                                    <a href="{{ route('downloadreport', ['disputeId' => $dispute->id]) }}"
                                                        class="btn btn-success mb-2"><strong> Download Final
                                                            Report</strong> </a>
                                                @else
                                                    <p><strong>Assigned Date:</strong> {{ $dispute->assigned_date }}
                                                    </p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="modal-footer bg-dark text-white">

                    @if ($dispute->members->isNotEmpty() && $dispute->dispute_status === 3 && $dispute->assigned_date !== null)
                        <button class="btn btn-primary" data-bs-target="#doFinalProcessofDispute2"
                            data-bs-toggle="modal">Update the Dispute Hearing Date</button>
                    @elseif ($dispute->members->isNotEmpty() && $dispute->dispute_status == 4 && $dispute->assigned_date == 4)
                        <button class="btn btn-warning" data-bs-target="#doFinalProcessofDispute2"
                            data-bs-toggle="modal">Reopen the case</button>
                    @endif



                    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>









    <div class="modal fade" id="doFinalProcessofDispute2" data-bs-backdrop="static" aria-hidden="true"
        aria-labelledby="doFinalProcessofDisputeLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h1 class="modal-title fs-5 mx-auto" id="doFinalProcessofDisputeLabel2">Update Hearing Date</h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body bg-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center mt-4 name"> Update the Dispute Hearing Date </div>

                                <div class="col-5 mx-auto">
                                    <form action="{{ route('updateassigndate', ['dispute_id' => $dispute->id]) }}"
                                        method="post" class="d-flex">
                                        @csrf
                                        <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">
                                        <input type="hidden" name="final_decision_favor"
                                            value="{{ $dispute->id }}">
                                        <input type="date" name="assigned_date" id="assigned_date"
                                            class="form-control" required>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-dark text-white">
                    <button class="btn btn-primary" data-bs-target="#doFinalProcessofDispute"
                        data-bs-toggle="modal">Final Review</button>
                    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>




        </div>
        <div class="row mb-3 text-end">
            <div class="col-12 p-3">
                @if ($dispute->members->isNotEmpty() && $dispute->dispute_status == 4 && $dispute->assigned_date == 4)
                @else
                    <input class="justify-content-end" type="text" placeholder="Write comments"
                        data-bs-toggle="modal" data-bs-target="#addCommentByDisputerModal">
                    <!-- <a class="btn btn-primary btn-sm text-white bg-dark mx-auto" data-bs-toggle="modal"
                    data-bs-target="#addCommentByDisputerModal">Add New Comment</a> -->
                @endif
            </div>
        </div>

    </div>
