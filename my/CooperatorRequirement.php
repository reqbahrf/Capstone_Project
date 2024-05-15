<style>
  .nav-tabs .nav-link.tab-Nav.active {
    background-color: #318791 !important; 
    font-weight: bold;
    color: white;
    border-top: 6px solid;
    border-top-right-radius: 10px; /* Adjust the radius value as needed */
    border-top-left-radius: 10px;
}

.nav-tabs .nav-link.tab-Nav {
    background-color: white; /* Your desired color */
    color: black; /* Adjust text color accordingly */
    border: 1px solid #318791; /* Adjust border color */
    border-bottom: none;
}

.nav-tabs .nav-link.tab-Nav:hover {
    background-color: #318791; /* Hover state color */
    color: white;
}

/* Change the background color of the progress bar */

:root{
    --sw-toolbar-btn-background-color:  #318791;
    --sw-anchor-default-primary-color:  #f8f9fa;
    --sw-anchor-active-primary-color:  #318791;
    --sw-anchor-active-secondary-color:  #ffffff;
    --sw-anchor-done-primary-color:  #48C4D3;
    --sw-anchor-error-primary-color:  #dc3545;
    --sw-anchor-error-secondary-color:  #ffffff;
    --sw-anchor-warning-primary-color:  #ffc107;
    --sw-anchor-warning-secondary-color:  #ffffff;
    --sw-progress-color:  #318791;
    --sw-progress-background-color:  #f8f9fa;
    --sw-loader-color:  #318791;
    --sw-loader-background-color:  #f8f9fa;
    --sw-loader-background-wrapper-color:  rgba(255, 255, 255, 0.7);
}


</style>
<div class="p-3">
  <h4 >Requirements</h4>
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
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#expenseReceiptModal">Upload Receipt</button>
  </div>
  <div>
    <div class="mt-4">
      <fieldset>
        <legend class="w-auto">
          Quarterly Reports:
        </legend>
  
          <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
            <button class="nav-link tab-Nav active" id="nav-quarter1-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter1" type="button" role="tab" aria-controls="nav-quarter1" aria-selected="true">Quarter 1</button>
            <button class="nav-link tab-Nav" id="nav-quarter2-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter2" type="button" role="tab" aria-controls="nav-quarter2" aria-selected="false" >Quarter 2</button>
            <button class="nav-link tab-Nav" id="nav-quarter3-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter3" type="button" role="tab" aria-controls="nav-quarter3" aria-selected="false" >Quarter 3</button>
            <button class="nav-link tab-Nav" id="nav-quarter4-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter4" type="button" role="tab" aria-controls="nav-quarter4" aria-selected="false" >Quarter 4</button>
          </div>
  
        <div class="tab-content">
          <div class="tab-pane fade show active w-auto" id="nav-quarter1" role="tabpanel" aria-labelledby="nav-quarter1-tab" tabindex="0">
            <h5 class="my-5">Quarter 1</h5>
            <div id="smartwizard">
              <ul class="nav nav-progress">
                <li class="nav-item">
                  <a class="nav-link default active z-3" href="#step-1">
                    <div class="num">1</div>
                    Assets
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link default z-3" href="#step-2">
                    <span class="num">2</span>
                    Total Employment
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link default z-3" href="#step-3">
                    <span class="num">3</span>
                    Production and Sales
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link default z-3" href="#step-4">
                    <span class="num">4</span>
                    Market Outlets
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                <fieldset class="">
                <legend class="w-auto">
                  <h4>1.0 ASSETS</h4>
                </legend>
                <div class="row ms-md-4 mb-3">
                  <div class="col-12 col-sm-6 col-md-4">
                    <label for="BuildingAsset">Building:</label>
                    <input type="text" class="form-control" id="BuildingAsset" name="Building" placeholder="">
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <label for="Equipment">Equipment:</label>
                    <input type="text" class="form-control" id="Equipment" name="Equipment" placeholder="">
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <label for="WorkingCapital">Working Capital:</label>
                    <input type="text" class="form-control" id="WorkingCapital" name="WorkingCapital" placeholder="">
                  </div>
                </div>
              </fieldset>
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                <fieldset class="mt-4">
                <legend class="w-auto">
                  <h4>2.0 TOTAL EMPLOYMENT FOR THE QUARTER</h4>
                </legend>
                <div class="row ms-2 mb-3">
                  <div class="col-sm-12 col-md-6">
                    <h5>2.1 Direct Labor(Production)</h5>
                    <div class="row ms-md-2">
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.1a Direct Labor</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="maleInput">Male:</label>
                          <input type="text" class="form-control" id="maleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="femaleInput">Female:</label>
                          <input type="text" class="form-control" id="femaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="workdayInput">Workday:</label>
                          <input type="text" class="form-control" id="workdayInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.1b Part-time</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="parttimeMaleInput">Male:</label>
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeFemaleInput">Female:</label>
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeWorkdayInput">Workday:</label>
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="">
                        </div>
                        <div class="mb-3">:
                          <p>{Total}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <h5>2.2 Indirect Labor(Admin and Marketing)</h5>
                    <div class="row ms-md-2">
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.2a Regular</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="regularMaleInput">Male:</label>
                          <input type="text" class="form-control" id="regularMaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="regularFemaleInput">Female:</label>
                          <input type="text" class="form-control" id="regularFemaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="regularWorkdayInput">Workday:</label>
                          <input type="text" class="form-control" id="regularWorkdayInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.2b Part-time</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="parttimeMaleInput">Male:</label>
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeFemaleInput">Female:</label>
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeWorkdayInput">Workday:</label>
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
                </div>
                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                <fieldset class="mt-4">
                <legend class="w-auto">
                  <h4>3.0 PRODUCTION AND SALES DATA FOR THE QUARTER</h4>
                </legend>
                  <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                      <fieldset class="mt-4">
                        <!-- Your first fieldset content here -->
                        <legend class="w-auto px-2">
                          <h5 class="ms-2">3.1 Export Market</h5>
                        </legend>
                        <!-- FIXME: Improve the textfield format -->
                        <div id="productExport" class="productExport">
                          <div class="row ms-4">
                            <hr>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="productName">Name of Product:</label>
                                <input type="text" class="form-control" id="productName" name="productName">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="packingDetails">Packing Details:</label>
                                <textarea class="form-control" id="packingDetails" name="packingDetails"></textarea>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="volumeOfProduction">Volume of Production:</label>
                                <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="grossSales">Gross Sales:</label>
                                <input type="text" class="form-control" id="grossSales" name="grossSales">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                                <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction">
                              </div </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="netSales">Net Sales:</label>
                                  <input type="text" class="form-control" id="netSales" name="netSales">
                                </div>
                              </div>
                              <hr>
                            </div>
                            <div class="col-12">
                              <button type="button" class="btn btn-danger deleteButtonExport">Delete</button>
                            </div>
                          </div>
                          <div class="mt-2">
                            <button id="addButtonExport" class="btn btn-primary">Add</button>
                          </div>
                      </fieldset>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <fieldset class="mt-4">
                        <!-- Your second fieldset content here -->
                        <legend class="w-auto px-2">
                          <h5 class="ms-2">3.2 Local Market</h5>
                        </legend>
                        <!-- FIXME: Improve the textfield format -->
                        <div id="productLocal" class="productLocal">
                          <div class="row ms-4">
                            <hr>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="productName">Name of Product:</label>
                                <input type="text" class="form-control" id="productName" name="productName">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="packingDetails">Packing Details:</label>
                                <textarea class="form-control" id="packingDetails" name="packingDetails"></textarea>
                              </div </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="volumeOfProduction">Volume of Production:</label>
                                  <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="grossSales">Gross Sales:</label>
                                  <input type="text" class="form-control" id="grossSales" name="grossSales">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                                  <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="netSales">Net Sales:</label>
                                  <input type="text" class="form-control" id="netSales" name="netSales">
                                </div>
                              </div>
                              <hr>
                            </div>
                            <div class="col-12">
                              <button type="button" class="btn btn-danger deleteButtonLocal">Delete</button>
                            </div>
                          </div>
                          <div class="mt-2">
                            <button id="addButtonLocal" class="btn btn-primary">Add</button>
                          </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
                <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                  <fieldset class="mt-4 h-100">
                    <legend class="w-auto">
                      <h4>4.0 MARKET OUTLETS</h4>
                    </legend>
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <h5 class="ms-2">4.1 Export</h5>
                        <div class="form-floating ms-4">
                          <textarea class="form-control h-100" placeholder="Export" id="exportTextarea"></textarea>
                          <label for="exportTextarea">Export</label>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <h5 class="ms-2">4.2 Local</h5>
                        <div class="form-floating ms-4">
                          <textarea class="form-control h-100" placeholder="Local" id="localTextarea"></textarea>
                          <label for="localTextarea">Local</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>

              
            </div>


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
    $('#smartwizard').smartWizard({
      selected: 0,
      theme: 'dots',
      transition: {
        animation: 'slideHorizontal'
      },
      toolbar: {
        showNextButton: true, // show/hide a Next button
        showPreviousButton: true, // show/hide a Previous button
        position: 'both buttom', // none/ top/ both bottom
        extraHtml: `<button class="btn btn-success" onclick="onFinish()">Submit</button>
                              <button class="btn btn-secondary" onclick="onCancel()">Cancel</button>`
      },
    });
    $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
      var totalSteps = $('#smartwizard').find('ul li').length;
      // console.log("Step: ", stepNumber);
      console.log("Total Steps:", totalSteps);

      if (stepIndex === totalSteps - 1 && stepPosition === 'last') {
        console.log("Arriving at Last Step - Showing Buttons");
        $('.btn-success, .btn-secondary').show();
      } else {
        console.log("Not Arriving at Last Step - Hiding Buttons");
        $('.btn-success, .btn-secondary').hide();
      }
    });
  });
</script>