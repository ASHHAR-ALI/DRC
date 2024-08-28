



<!-- -------------------------------------------Modal for View the Details of the Records ------------------------------------------- -->
<div class="modal fade" id="viewDateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="viewDateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            
            <div class="modal-header justify-content-center text-center bg-dark">
                <h5 class="modal-title text-center" id="viewDateModalLabel">Assigned Date</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>

            <div class="modal-body" style="background-image: url('{{ asset('/allassets/images/background/fp12.jpg') }}') ">
                <div class="container">
                    <!-- <div class="text-center mt-4 name">Details</div> -->
                    <div class="col-md-12 col-12">
                        <div class="card shadow-sm">
                            <div class="card-body tablebg">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <p><strong>Date: </strong><span id="assigned_date"></span></p>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">
                                        CLOSE
                                    </button>
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
    // JavaScript function to display assigned date in modal
    function showAssignedDate(date) {
        // Set the assigned date in the modal span element
        document.getElementById('assigned_date').textContent = date;

        // Show the Bootstrap modal
        var myModal = new bootstrap.Modal(document.getElementById('viewDateModal'));
        myModal.show();
    }
</script>






{{-- <script>
    function showAssignedDate(date) {
        alert('Assigned Date: ' + date);
    }
</script> --}}