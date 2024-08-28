@section('title', 'Contact Configuration') <!-- Web browser Tab Title -->
@section('settingtitle', 'Contact Setting')  <!-- Setting Page Title -->
@section('setting')

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            @if (!$contactusemails)
                <div class="col-md-12 col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form class="row g-3" action="{{ asset('/contactmainsetting') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label for="contactusReceiverInput" class="form-label">
                                        Contact Us Receiver Input Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="contact_reciever_email" class="form-control"
                                        id="contactusReceiverInput" required />
                                    <div class="invalid-feedback">Please enter Name.</div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-sm mt-3 mb-3"
                                        name="submit">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="mt-2"></div>
        <div class="col-12 col-lg-6 mx-auto mt-4 text-center">
            @if ($contactusemails)
                <table class="table table-striped table-bordered table-hover table-dark ">
                    <thead>
                        <tr class="text-center">
                            <th>Contact-Us Receiver Email</th>
                            <th class="p-3">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>{{ $contactusemails->contact_reciever_email }}</td>
                            <td>
                                <a class="btn btn-danger btn-sm m-1"
                                    href="{{ asset('/deletecontactusemail/' . $contactusemails->id) }}">
                                    <span class="" type="button" title="Delete">
                                    </span> Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <p>This Record is the email to which the DRC Contact-Us Queries will be send.</p>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
    


@include('Admin.setting')