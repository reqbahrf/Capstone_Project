<style>
  .tab-Nav {
    background-color: black;
    color: white;
    /* Change the text color to white for better contrast */
  }

  .tab-Nav.active {
    background-color: white;
    color: black;
    /* Change the text color to black for better contrast */
  }
</style>
<div>
  <h1 class="row bg-dark text-white p-4 m-2">Requirments</h1>
</div>
<div class="g-3 mt-sm-3 ms-sm-3 me-sm-3 mb-sm-2 p-sm-3 bg-white">
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
  <div>
    <div class="mt-4">
      <fieldset>
        <legend class="w-auto">
          <h2>Quarterly Reports:</h2>
        </legend>
        <nav>
          <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
            <button class="nav-link tab-Nav active" id="nav-quarter1-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter1" type="button" role="tab" aria-controls="nav-quarter1" aria-selected="true">Quarter 1</button>
            <button class="nav-link tab-Nav" id="nav-quarter2-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter2" type="button" role="tab" aria-controls="nav-quarter2" aria-selected="false" >Quarter 2</button>
            <button class="nav-link tab-Nav" id="nav-quarter3-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter3" type="button" role="tab" aria-controls="nav-quarter3" aria-selected="false" >Quarter 3</button>
            <button class="nav-link tab-Nav" id="nav-quarter4-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter4" type="button" role="tab" aria-controls="nav-quarter4" aria-selected="false" >Quarter 4</button>
          </div>
        </nav>
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
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="position: static; left: 0px; display: block;">
                  <fieldset class="">
                    <legend class="w-auto">
                      <h4>1.0 ASSETS</h4>
                    </legend>
                    <div class="row ms-md-4 mb-3">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="BuildingAsset" name="Building" placeholder="Building">
                          <label for="BuildingAsset">Building:</label>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="Equipment" name="Equipment" placeholder="Equipment">
                          <label for="Equipment">Equipment:</label>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="WorkingCapital" name="WorkingCapital" placeholder="Working Capital">
                          <label for="WorkingCapital">Working Capital:</label>
                        </div>
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
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="maleInput" placeholder="Male">
                              <label for="maleInput">Male</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="femaleInput" placeholder="Female">
                              <label for="femaleInput">Female</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="workdayInput" placeholder="Workday">
                              <label for="workdayInput">Workday</label>
                            </div>
                            <div class="mb-3">
                              <p>{Total}</p>
                            </div>
                          </div>
                          <div class="col-sm-12 mt-3 col-md-6">
                            <h6>2.1b Part-time</h6>
                            <!-- Your input fields here -->
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                              <label for="parttimeMaleInput">Male</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                              <label for="parttimeFemaleInput">Female</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                              <label for="parttimeWorkdayInput">Workday</label>
                            </div>
                            <div class="mb-3">
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
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                              <label for="parttimeMaleInput">Male</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                              <label for="parttimeFemaleInput">Female</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                              <label for="parttimeWorkdayInput">Workday</label>
                            </div>
                            <div class="mb-3">
                              <p>{Total}</p>
                            </div>
                          </div>
                          <div class="col-sm-12 mt-3 col-md-6">
                            <h6>2.2b Part-time</h6>
                            <!-- Your input fields here -->
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                              <label for="parttimeMaleInput">Male</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                              <label for="parttimeFemaleInput">Female</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                              <label for="parttimeWorkdayInput">Workday</label>
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
                    <div>
                      <fieldset class="mt-4">
                        <legend class="w-auto px-2">
                          <h5 class="ms-2">3.1 Export Market</h5>
                        </legend>
                        <!-- FIXME: Improve the textfield format -->
                        <div id="productExport" class="productExport">
                          <div class="row ms-4">
                            <hr>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="productName" name="productName" placeholder="Name of Product">
                                <label for="productName">Name of Product:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <textarea class="form-control h-50" id="packingDetails" name="packingDetails" placeholder="Packing Details"></textarea>
                                <label for="packingDetails">Packing Details:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction" placeholder="Volume of Production">
                                <label for="volumeOfProduction">Volume of Production:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="grossSales" name="grossSales" placeholder="Gross Sales">
                                <label for="grossSales">Gross Sales:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction" placeholder="Estimated Cost of Production">
                                <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="netSales" name="netSales" placeholder="Net Sales">
                                <label for="netSales">Net Sales:</label>
                              </div>
                            </div>
                            <hr>
                          </div>
                          <div class="col-md-4">
                            <button type="button" class="btn btn-danger deleteButtonExport">Delete</button>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button id="addButtonExport" class="btn btn-primary">Add</button>
                        </div>
                      </fieldset>
                      <fieldset class="mt-4">
                        <legend class="w-auto px-2">
                          <h5 class="ms-2">3.2 Local Market</h5>
                        </legend>
                        <!-- FIXME: Improve the textfield format -->
                        <div id="productLocal" class="productLocal">
                          <div class="row ms-4">
                            <hr>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="productName" name="productName" placeholder="Name of Product">
                                <label for="productName">Name of Product:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <textarea class="form-control h-50" id="packingDetails" name="packingDetails" placeholder="Packing Details"></textarea>
                                <label for="packingDetails">Packing Details:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction" placeholder="Volume of Production">
                                <label for="volumeOfProduction">Volume of Production:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="grossSales" name="grossSales" placeholder="Gross Sales">
                                <label for="grossSales">Gross Sales:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction" placeholder="Estimated Cost of Production">
                                <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="netSales" name="netSales" placeholder="Net Sales">
                                <label for="netSales">Net Sales:</label>
                              </div>
                            </div>
                            <hr>
                          </div>
                          <div class="col-md-4">
                            <button type="button" class="btn btn-danger deleteButtonLocal">Delete</button>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button id="addButtonLocal" class="btn btn-primary">Add</button>
                        </div>
                      </fieldset>
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

              <!-- Include optional progressbar HTML -->
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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