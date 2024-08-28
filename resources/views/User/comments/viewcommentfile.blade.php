@extends('welcome')

@section('title', 'Add Comment')

@section('content')

    <div class="container">
        <div class="wrapper">
            <div class="logo"></div>

            <div class="text-center mt-4 name"> Add Comment </div>

            <!--  --------------------- Add Comment to Dispute ---------------------    -->
            <form class="p-3 mt-1" action="{{ route('addcommentbydisputer', ['id' => $dispute->id]) }}" method="post">
                @csrf
                <input type="hidden" name="dispute_id" value="{{ $dispute->id }}">
                <input type="hidden" name="disputer_id" value="{{ $dispute->disputer_id }}">

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="fw-bold">Your Comment</label>
                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="7"
                            placeholder="Write your Comment"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-2" name="submit">SUBMIT</button>
                <a type="button" class="btn btn-secondary mt-2" href="javascript:history.back()">RETURN BACK</a>
            </form>

        </div>
    </div>

@endsection
