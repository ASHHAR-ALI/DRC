{{-- @section('title', 'Theme Setting') <!-- Web browser Tab Title --> --}}
@section('settingtitle', 'Dispute Type Setting') <!-- Web browser Tab Title -->
@section('setting')

    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">


                <div class="col-12">
                    <div class="card shadow-sm bg-dark">
                        <div class="card-body bg-dark">
                            <h5 class="card-title text-light">Want to Add The New Dispute Types</h5>
                            <label class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#addDisputeTypeModal">Add</label>
                        </div>

                        <div class="card-body bg-dark mx-auto my-3">
                            <form class="row" action="{{ asset('/disputetypenamesetting') }}" method="post">
                                @csrf


                                <div class="row">
                                    <table class="table table-bordered table-hover table-condensed text-center table-dark">
                                        <thead>
                                            <tr class="text-center">
                                                <th>All Disputes Types</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($disputetypesettings as $disputetypesetting)
                                                <tr class="text-center">
                                                    <td>{{ $disputetypesetting->dispute_type_name }}</td>
                                                    <td><a class="btn btn-danger btn-sm m-1"
                                                            href="{{ asset('/deleteDisputeType/' . $disputetypesetting->id) }}">
                                                            <span class="" type="button" title="Delete">
                                                            </span> Delete
                                                        </a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end row -->

                            </form>
                        </div>
                    </div>
                </div>



            </div>
            <div class="mt-2"></div>


            {{-- <div class="col-12 col-lg-6 mx-auto mt-4 text-center">
                <table class="table table-striped table-bordered table-hover table-dark ">
                    <thead>
                        <tr class="text-center">
                            <th>Create New Themes</th>
                            <th class="p-3">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($disputetypesettings as $disputetypesetting)
                            <tr class="text-center">
                                <td>{{ $disputetypesetting->dispute_type_name }}</td>
                                <td><a class="btn btn-danger btn-sm m-1"
                                        href="{{ asset('/deleteDisputeType/' . $disputetypesetting->id) }}">
                                        <span class="" type="button" title="Delete">
                                        </span> Delete
                                    </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}


        </div>
    </div>
@endsection




@include('Admin.setting')
