<style>
  .nav-link {
    background-color: black;
    color: white;
    /* Change the text color to white for better contrast */
  }

  .nav-link.active {
    background-color: white;
    color: black;
    /* Change the text color to black for better contrast */
  }
</style>
<div>
  <h1 class="row bg-dark text-white p-4 m-2">Requirments</h1>
</div>
<div class=" g-3 mt-3 ms-3 me-3 mb-2 p-3 bg-white">
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
            <button class="nav-link active" id="nav-quarter1-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter1" type="button" role="tab" aria-controls="nav-quarter1" aria-selected="true">Quarter 1</button>
            <button class="nav-link" id="nav-quarter2-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter2" type="button" role="tab" aria-controls="nav-quarter2" aria-selected="false">Quarter 2</button>
            <button class="nav-link" id="nav-quarter3-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter3" type="button" role="tab" aria-controls="nav-quarter3" aria-selected="false">Quarter 3</button>
            <button class="nav-link" id="nav-quarter4-tab" data-bs-toggle="tab" data-bs-target="#nav-quarter4" type="button" role="tab" aria-controls="nav-quarter4" aria-selected="false">Quarter 4</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active w-auto" id="nav-quarter1" role="tabpanel" aria-labelledby="nav-quarter1-tab" tabindex="0">
            <h3 class="my-5">Quarter 1</h3>
            <fieldset class="mt-4">
              <legend class="w-auto">
                <h4>1.0 ASSETS</h4>
              </legend>
              <div class="row ms-4 mb-3">
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="BuildingAsset" name="Building" placeholder="Building">
                    <label for="BuildingAsset">Building:</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Equipment" name="Equipment" placeholder="Equipment">
                    <label for="Equipment">Equipment:</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="WorkingCapital" name="WorkingCapital" placeholder="Working Capital">
                    <label for="WorkingCapital">Working Capital:</label>
                  </div>
                </div>

              </div>
            </fieldset>
            <fieldset class="mt-4">
              <legend class="w-auto">
                <h4>2.0 TOTAL EMPLOYMENT FOR THE QUARTER</h4>
              </legend>
              <div class="row ms-2 mb-3">
                <div class="col-md-6">
                  <fieldset class="mt-4">
                    <legend class="w-auto px-2">
                      <h5 class="ms-2">2.1 Direct Labor(Production)</h5>
                    </legend>
                    <div class="col ms-2">
                      <h6>2.1a Direct Labor</h6>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="maleInput" placeholder="Male">
                        <label for="maleInput">Male</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="femaleInput" placeholder="Female">
                        <label for="femaleInput">Female</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="workdayInput" placeholder="Workday">
                        <label for="workdayInput">Workday</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <p>{Total}</p>
                      </div>
                    </div>
                    <div class="col ms-2">
                      <h6>2.1b Part-time</h6>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                        <label for="parttimeMaleInput">Male</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                        <label for="parttimeFemaleInput">Female</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                        <label for="parttimeWorkdayInput">Workday</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <p>{Total}</p>
                      </div>
                    </div>
                  </fieldset>
                </div>

                <div class=" col-md-6">
                  <fieldset class="mt-4">
                    <legend class="w-auto px-2">
                      <h5 class="ms-2">2.2 Indirect Labor(Admin and Marketing)</h5>
                    </legend>
                    <div class="container mt-2">
                      <div class="col ms-2">
                        <h6>2.2a Regular</h6>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                          <label for="parttimeMaleInput">Male</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                          <label for="parttimeFemaleInput">Female</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                          <label for="parttimeWorkdayInput">Workday</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                    </div>
                    <div class="container mt-2">
                      <div class="col ms-2">
                        <h6>2.2b Part-time</h6>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                          <label for="parttimeMaleInput">Male</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                          <label for="parttimeFemaleInput">Female</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                          <label for="parttimeWorkdayInput">Workday</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <p12>{Total}</p12 </div>
                        </div>
                      </div>
                  </fieldset>
                </div>
            </fieldset>
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
                          <input type="text" class="form-control" id="packingDetails" name="packingDetails" placeholder="Packing Details">
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
                          <input type="text" class="form-control" id="packingDetails" name="packingDetails" placeholder="Packing Details">
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
                <fieldset class="mt-4">
                  <legend class="w-auto">
                    <h4>4.0 MARKET OUTLETS</h4>
                  </legend>
                  <div>
                    <div>
                      <h5 class="ms-2">4.1 Export</h5>
                      <div class="form-floating ms-4">
                        <textarea class="form-control" placeholder="Export" id="exportTextarea"></textarea>
                        <label for="exportTextarea">Export</label>
                      </div>
                    </div>
                    <div>
                      <h5 class="ms-2">4.2 Local</h5>
                      <div class="form-floating ms-4">
                        <textarea class="form-control" placeholder="Local" id="localTextarea"></textarea>
                        <label for="localTextarea">Local</label>
                      </div>
                    </div>
                  </div>
                </fieldset>
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