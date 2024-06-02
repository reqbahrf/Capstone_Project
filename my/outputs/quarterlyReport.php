<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Capture form data
  $formData = $_POST;

  // Convert form data to JSON format
}

if(isset($_SESSION['business_id']) && isset($_SESSION['project_id'])) {
    echo "business_id and project_id are stored in the session.";
} else {
    echo "business_id and/or project_id are not stored in the session.";
}

?>
<style>
  #smartwizard th {
    font-size: 12px;
  }

  #smartwizard th.theader {
    font-size: 15px;
  }
</style>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div id="smartwizard" class="my-4">
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
            1.0 ASSETS
          </legend>
          <div class="row ms-md-4 ms-sm-2 my-4">
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
            2.0 EMPLOYMENT FOR THE QUARTER
          </legend>
          <div class="row ms-2 mb-3 my-4">
            <div class="col-12">
              <strong>2.1 Direct Labor(Production)</strong>
              <div class="row ms-md-2">
                <div class="col-12 mt-3">
                  <!-- Your input fields here -->
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" colspan="4" class="text-center table-primary theader">2.1a Direct Labor</th>
                      </tr>
                      <tr>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Workday</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="male_Dir_Regular" class="form-control" id="maleInput"></td>
                        <td><input type="text" name="female_Dir_Regular" class="form-control" id="femaleInput"></td>
                        <td><input type="text" name="workday_Dir_Regular" class="form-control" id="workdayInput"></td>
                        <td>{Total}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-12 mt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" colspan="4" class="text-center table-primary theader">2.1b Part-time</th>
                      </tr>
                      <tr>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Workday</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="male_Dir_PartT" class="form-control" id="parttimeMaleInput"></td>
                        <td><input type="text" name="female_Dir_PartT" class="form-control" id="parttimeFemaleInput"></td>
                        <td><input type="text" name="workday_Dir_PartT" class="form-control" id="parttimeWorkdayInput"></td>
                        <td>{Total}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12">
              <strong>2.2 Indirect Labor(Admin and Marketing)</strong>
              <div class="row ms-md-2">
                <div class="col-12 mt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" colspan="4" class="text-center table-primary theader">2.2a Regular</th>
                      </tr>
                      <tr>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Workday</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="male_Indir_Regular" class="form-control" id="regularMaleInput"></td>
                        <td><input type="text" name="female_Indir_Regular" class="form-control" id="regularFemaleInput"></td>
                        <td><input type="text" name="workday_Indir_Regular" class="form-control" id="regularWorkdayInput"></td>
                        <td>{Total}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-12 mt-3">
                  <p>2.2b Part-time</p>
                  <!-- Your input fields here -->
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" colspan="4" class="text-center table-primary theader">2.2b Part-time</th>
                      </tr>
                      <tr>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Workday</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="male_Indir_PartT" class="form-control" id="parttimeMaleInput"></td>
                        <td><input type="text" name="female_Indir_PartT" class="form-control" id="parttimeFemaleInput"></td>
                        <td><input type="text" name="workday_Indir_PartT" class="form-control" id="parttimeWorkdayInput"></td>
                        <td>{Total}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
        <fieldset class="mt-4">
          <legend class="w-auto">
            3.0 PRODUCTION AND SALES DATA FOR THE QUARTER
          </legend>
          <div class="row align-items-center">
            <div class="col-12">
              <fieldset class="mt-4 p-0">
                <!-- Your first fieldset content here -->
                <legend class="w-auto px-2">
                  <strong>3.1 Export Market</strong>
                </legend>
                <!-- FIXME: Improve the textfield format -->
                <div id="productExport" class="productExport">
                  <div class="row">
                    <div class="mb-3">
                      <div class="mt-2">
                        <div class="d-flex justify-content-end p-2">
                          <button type="button" id="addExportRow" class="btn btn-primary" data-toggle="tooltip" title="Add a new row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                              <path d="M0 18L0 46L11.666016 46L12.554688 50L6 50L15 62L24 50L17.445312 50L18.333984 46L35.052734 46C35.138734 44.612 35.583 43.27 36 42L4 42L4 22L60 22L60 35.779297C61.549 36.832297 62.904 38.149062 64 39.664062L64 18L0 18 z M 51 36C43.82 36 38 41.82 38 49C38 56.18 43.82 62 51 62C58.18 62 64 56.18 64 49C64 41.82 58.18 36 51 36 z M 50 42L52 42C52 42 52.632625 44.583375 52.890625 47.109375C55.416625 47.367375 58 48 58 48L58 50C58 50 55.416625 50.632625 52.890625 50.890625C52.632625 53.416625 52 56 52 56L50 56C50 56 49.367375 53.416625 49.109375 50.890625C46.583375 50.632625 44 50 44 50L44 48C44 48 46.583375 47.367375 49.109375 47.109375C49.367375 44.583375 50 42 50 42 z" fill="#FFFFFF" />
                            </svg>
                          </button>
                          <button type="button" class="btn btn-danger deleteExportRow mx-2" data-toggle="tooltip" title="Delete row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                              <path d="M0 9L0 47L35.052734 47C35.138734 45.612 35.391594 44.27 35.808594 43L4 43L4 13L60 13L60 34.779297C61.549 35.832297 62.904 37.149062 64 38.664062L64 9L0 9 z M 51 34C43.82 34 38 39.82 38 47C38 54.18 43.82 60 51 60C58.18 60 64 54.18 64 47C64 39.82 58.18 34 51 34 z M 51 45C53.917 45 58 46 58 46L58 48C58 48 53.917 49 51 49C48.083 49 44 48 44 48L44 46C44 46 48.083 45 51 45 z" fill="#FFFFFF" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <table class="table Export-Outlet">
                        <thead>
                          <tr class="table-primary">
                            <th scope="col">Name of Product</th>
                            <th scope="col">Packing Details</th>
                            <th scope="col">Volume of Production</th>
                            <th scope="col">Gross Sales</th>
                            <th scope="col">Estimated Cost of Production</th>
                            <th scope="col">Net Sales</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" class="form-control" id="productName" name="productName"></td>
                            <td><textarea class="form-control" id="packingDetails" name="packingDetails"></textarea></td>
                            <td><input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction"></td>
                            <td><input type="text" class="form-control" id="grossSales" name="grossSales"></td>
                            <td><input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction"></td>
                            <td><input type="text" class="form-control" id="netSales" name="netSales"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </fieldset>
            </div>
            <div class="col-12">
              <fieldset class="mt-4 p-0">
                <!-- Your second fieldset content here -->
                <legend class="w-auto px-2">
                  <strong>3.2 Local Market</strong>
                </legend>
                <!-- FIXME: Improve the textfield format -->
                <div id="productLocal" class="productLocal">
                  <div class="row p-0">
                    <div class="col-12">
                      <div class="mt-2">
                        <div class="d-flex justify-content-end p-2">
                          <button type="button" id="addLocalRow" class="btn btn-primary" data-toggle="tooltip" title="Add a new row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                              <path d="M0 18L0 46L11.666016 46L12.554688 50L6 50L15 62L24 50L17.445312 50L18.333984 46L35.052734 46C35.138734 44.612 35.583 43.27 36 42L4 42L4 22L60 22L60 35.779297C61.549 36.832297 62.904 38.149062 64 39.664062L64 18L0 18 z M 51 36C43.82 36 38 41.82 38 49C38 56.18 43.82 62 51 62C58.18 62 64 56.18 64 49C64 41.82 58.18 36 51 36 z M 50 42L52 42C52 42 52.632625 44.583375 52.890625 47.109375C55.416625 47.367375 58 48 58 48L58 50C58 50 55.416625 50.632625 52.890625 50.890625C52.632625 53.416625 52 56 52 56L50 56C50 56 49.367375 53.416625 49.109375 50.890625C46.583375 50.632625 44 50 44 50L44 48C44 48 46.583375 47.367375 49.109375 47.109375C49.367375 44.583375 50 42 50 42 z" fill="#FFFFFF" />
                            </svg>
                          </button>
                          <button type="button" class="btn btn-danger mx-2 deleteLocalRow" data-toggle="tooltip" title="Delete row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                              <path d="M0 9L0 47L35.052734 47C35.138734 45.612 35.391594 44.27 35.808594 43L4 43L4 13L60 13L60 34.779297C61.549 35.832297 62.904 37.149062 64 38.664062L64 9L0 9 z M 51 34C43.82 34 38 39.82 38 47C38 54.18 43.82 60 51 60C58.18 60 64 54.18 64 47C64 39.82 58.18 34 51 34 z M 51 45C53.917 45 58 46 58 46L58 48C58 48 53.917 49 51 49C48.083 49 44 48 44 48L44 46C44 46 48.083 45 51 45 z" fill="#FFFFFF" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <table class="table local-Outlet">
                        <thead>
                          <tr class="table-primary">
                            <th scope="col">Name of Product</th>
                            <th scope="col">Packing Details</th>
                            <th scope="col">Volume of Production</th>
                            <th scope="col">Gross Sales</th>
                            <th scope="col">Estimated Cost of Production</th>
                            <th scope="col">Net Sales</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" class="form-control" id="productName" name="productName"></td>
                            <td><textarea class="form-control" id="packingDetails" name="packingDetails"></textarea></td>
                            <td><input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction"></td>
                            <td><input type="text" class="form-control" id="grossSales" name="grossSales"></td>
                            <td><input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction"></td>
                            <td><input type="text" class="form-control" id="netSales" name="netSales"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </fieldset>
            </div>
          </div>
      </div>
      <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
        <fieldset class="mt-4 h-100">
          <legend class="w-auto">
            4.0 MARKET OUTLETS
          </legend>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <strong class="ms-2">4.1 Export</strong>
              <div class="form-floating ms-4">
                <textarea class="form-control h-100" name="Market_Export" placeholder="Export" id="exportTextarea"></textarea>
                <label for="exportTextarea">Export</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <strong class="ms-2">4.2 Local</strong>
              <div class="form-floating ms-4">
                <textarea class="form-control h-100" name="Market_local" placeholder="Local" id="localTextarea"></textarea>
                <label for="localTextarea">Local</label>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</form>
<script>
  $(document).ready(function() {
    var counterExport = 0;
    var counterLocal = 0;

    function addRow(buttonSelector, tableSelector, counter, identifier) {
      $(buttonSelector).click(function() {
        counter++;

        var newRow = `
          <tr>
            <td><input type="text" class="form-control" name="${identifier}ProductName${counter}"></td>
            <td><textarea class="form-control" name="${identifier}PackingDetails${counter}"></textarea></td>
            <td><input type="text" class="form-control" name="${identifier}VolumeOfProduction${counter}"></td>
            <td><input type="text" class="form-control" name="${identifier}GrossSales${counter}"></td>
            <td><input type="text" class="form-control" name="${identifier}EstimatedCostOfProduction${counter}"></td>
            <td><input type="text" class="form-control" name="${identifier}NetSales${counter}"></td>
          </tr>
        `;

        $(tableSelector).append(newRow);
        updateDeleteButtonState();
      });
    }

    function deleteRow(buttonSelector, tableSelector) {
      $(document).on('click', buttonSelector, function() {
        if ($(tableSelector + ' tr').length > 1) {
          $(tableSelector + ' tr:last').remove();
          updateDeleteButtonState();
        }
      });
    }

    function updateDeleteButtonState() {
      ['.deleteExportRow', '.deleteLocalRow'].forEach(function(buttonSelector) {
        var tableSelector = buttonSelector === '.deleteExportRow' ? '.Export-Outlet tbody' : '.local-Outlet tbody';
        if ($(tableSelector + ' tr').length <= 1) {
          $(buttonSelector).prop('disabled', true);
        } else {
          $(buttonSelector).prop('disabled', false);
        }
      });
    }

    addRow('#addExportRow', '.Export-Outlet tbody', counterExport, 'export');
    deleteRow('.deleteExportRow', '.Export-Outlet tbody');

    addRow('#addLocalRow', '.local-Outlet tbody', counterLocal, 'local');
    deleteRow('.deleteLocalRow', '.local-Outlet tbody');

    updateDeleteButtonState();
  });
</script>
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
        extraHtml: `<button class="btn btn-success" onclick="">Submit</button>
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
    $('#smartwizard').on('click', 'button', function() {
      // Your function goes here
      $('#smartwizard').smartWizard('fixHeight');
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault(); // Prevent default form submission

      // Serialize form data
      var formData = $(this).serialize();

      // Send form data using AJAX
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: JSON.stringify($(this).serializeArray()), // Serialize form data as JSON
        contentType: 'application/json', // Set content type to JSON
        success: function(response) {
          // Handle the response if needed
          loadPage('/my/CooperatorRequirement.php', 'requirementTab');
        },
        error: function(xhr, status, error) {
          // Handle any errors
        }
      });
    });
  });
</script>