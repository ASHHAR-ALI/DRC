<!-- -------------------------------------------Modal for Them Creation Form By ------------------------------------------- -->
<div class="modal fade" id="addDisputeTypeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addDisputeTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            {{-- <div class="modal-header justify-content-center text-center">
                <h5 class="modal-title text-center" id="addDisputeTypeModalLabel">Add The New Dispute Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body" style="background-image: url('{{ asset('/allassets/images/background/fp12.jpg') }}') ">
                <div class="container">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <!-- <div class="text-center mt-1 name text-danger"> Add The New Dispute Type </div> -->
                        <!-- <img src="{{ asset('/allassets/images/DRC.png') }}"
                            class="rounded mx-auto d-block" style="height: 80px; width: 150px; margin: auto;"> -->
                        <div class="text-center mt-4 name"> Add The New Dispute Type </div>
                        <div class="col-md-12 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body  bg-dark">

                                    <form class="row g-3" action="{{ asset('/addDisputeType') }}" method="post">
                                        @csrf
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-fields input-container ">
                                                <input type="text" class="form-control mb-4" name="dispute_type_name[]"
                                                    placeholder="Enter Dispute Type Name" />
                                            </div>

                                            <button id="add-more-field" class="btn btn-secondary btn-sm mt-3">Add More
                                                Types</button>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-success mt-2"
                                                    name="submit">SUBMIT</button>
                                                <button type="button" class="btn btn-secondary mt-2"
                                                    data-bs-dismiss="modal">CLOSE</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(function() {
        var i = 0; // Initialize counter

        $('#add-more-field').on('click', function(e) {
            e.preventDefault();
            var more_fields = `
                <div class="input-fields input-group">
                    <input type="text" class="form-control" name="dispute_type_name[]" placeholder="Enter Dispute Type Name" />
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger btn_remove"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div> 
                </div>
            `;
            $(".input-container").append(more_fields);
            i++; // Increment counter
        });

        $(document).on('click', '.btn_remove', function() {
            $(this).closest('.input-fields').remove();
        });
    });
</script>

