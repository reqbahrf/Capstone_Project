<style>
  .nav-tabs .nav-link.tab-Nav.active {
    background-color: #318791 !important;
    font-weight: bold;
    color: white;
    border-top: 6px solid;
    border-top-right-radius: 10px;
    /* Adjust the radius value as needed */
    border-top-left-radius: 10px;
  }

  .nav-tabs .nav-link.tab-Nav {
    background-color: white;
    /* Your desired color */
    color: black;
    /* Adjust text color accordingly */
    border: 1px solid #318791;
    /* Adjust border color */
    border-bottom: none;
  }

  .nav-tabs .nav-link.tab-Nav:hover {
    background-color: #318791;
    /* Hover state color */
    color: white;
  }

  .nav-link.tab-Nav:disabled {
  opacity: 0.5; /* Reduce opacity for disabled buttons */
  cursor: not-allowed; /* Change cursor to not-allowed */
  /* Add any other custom styles you want for disabled buttons */
}

  /* Change the background color of the progress bar */
</style>
<div class="p-3">
  <h4>Requirements</h4>
</div>
<div class="g-3 mt-sm-2 ms-sm-2 me-sm-2 mb-sm-2 p-sm-2 bg-white rounded-5">
  <div class=" bg-white p-3">
    <div class="form-check form-check-lg">
      <input class="form-check-input" type="checkbox" name="requirements[]" value="TNA" id="tna">
      <label class="form-check-label" for="tna">TNA</label>
    </div>
    <div class="form-check form-check-lg">
      <input class="form-check-input" type="checkbox" name="requirements[]" value="Project Deliberation Approval" id="pda">
      <label class="form-check-label" for="pda">Project Deliberation Approval</label>
    </div>
    <div class="form-check form-check-lg">
      <input class="form-check-input" type="checkbox" name="requirements[]" value="PDC-post Dated Cheque" id="pdc">
      <label class="form-check-label" for="pdc">PDC-post Dated Cheque</label>
    </div>
    <div class="form-check form-check-lg">
      <input class="form-check-input" type="checkbox" name="requirements[]" value="Fund release" id="fr">
      <label class="form-check-label" for="fr">Fund release</label>
    </div>
  </div>
  <!-- Upload receipt modal -->
  <div class="modal fade" id="expenseReceiptModal" tabindex="-1" aria-labelledby="expenseReceiptModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title" id="expenseReceiptModalLabel">Expense Receipt</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <fieldset>
            <legend class="w-auto">Receipt</legend>
            <form>
              <div class="mb-3">
                <label for="expenseReceipt" class="form-label">Expense Receipt</label>
                <input type="file" class="form-control" id="expenseReceipt" name="expenseReceipt">
              </div>
            </form>
          </fieldset>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <div class="text-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#expenseReceiptModal">Upload Receipt</button>
  </div>
  <div>
    <div class="mt-4">
      <fieldset>
        <legend class="w-auto">
          Quarterly Reports:
        </legend>

        <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
          <button class="nav-link tab-Nav active" id="nav-quarter1-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter1" type="button" role="tab" aria-controls="nav-quarter1" aria-selected="true">Quarter 1</button>
          <button class="nav-link tab-Nav" id="nav-quarter2-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter2" type="button" role="tab" aria-controls="nav-quarter2" aria-selected="false" disabled>Quarter 2</button>
          <button class="nav-link tab-Nav" id="nav-quarter3-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter3" type="button" role="tab" aria-controls="nav-quarter3" aria-selected="false" disabled>Quarter 3</button>
          <button class="nav-link tab-Nav" id="nav-quarter4-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter4" type="button" role="tab" aria-controls="nav-quarter4" aria-selected="false" disabled>Quarter 4</button>
        </div>

        <div class="tab-content">
          <div class="tab-pane fade show active w-auto" id="nav-quarter1" role="tabpanel" aria-labelledby="nav-quarter1-tab" tabindex="0">
            
          </div>
          <div class="tab-pane fade" id="nav-quarter2" role="tabpanel" aria-labelledby="nav-quarter2-tab" tabindex="0">

          </div>
          <div class="tab-pane fade" id="nav-quarter3" role="tabpanel" aria-labelledby="nav-quarter3-tab" tabindex="0">

          </div>
          <div class="tab-pane fade" id="nav-quarter4" role="tabpanel" aria-labelledby="nav-quarter4-tab" tabindex="0">

          </div>
        </div>
      </fieldset>

    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
   // Example AJAX request to load content into Quarter 1 tab
$.ajax({
  url: 'outputs/quarterlyReport.php',
  type: 'GET',
  success: function(response) {
    $('#nav-quarter1').html(response); // Update the content of Quarter 1 tab with the response
  },
  error: function(xhr, status, error) {
    console.error(error);
  }
});
  });
</script>
