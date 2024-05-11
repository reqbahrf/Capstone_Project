<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>
  <link rel="stylesheet" href="./assets/dist-smartWizard/css/smart_wizard_all.min.css">
  <script src="./assets/dist-smartWizard/js/jquery.smartWizard.min.js"></script>
  <style>
    #container {
      max-width: 60%;
    }

    .mt-200 {
      margin-top: 200px
    }

    .radioButton {
      width: 60%;
      /* Adjust the width as needed */
    }


    fieldset legend {
      position: absolute;
      /* Set position to absolute */
      top: -20px;
      /* Adjust this value to move legend up */
      /* Match the background color to your form or page background */
      color: #495057;
      border-radius: 0.25rem;
      padding: 0.5rem;
      font-size: 1rem;
      font-weight: bold;
      left: 10px;
      /* Adjust horizontally if needed */
    }


    /* Additional styling to ensure the fieldset and its contents look integrated */
    fieldset {
      position: relative;
      /* Added position relative */
      padding: 2rem;
      border: 2px solid #dee2e6;
      border-radius: 0.25rem;
    }

    .form-label {
      font-weight: bold;
    }

    .sw-toolbar-elm .btn-success,
    .sw-toolbar-elm .btn-secondary {
      display: none;
    }
  </style>

</head>

<body>
  <?php include("header.php"); ?>
  <div class="container mt-5 shadow">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="g-3 p-5">
      <div id="smartwizard" dir="" class="sw sw-justified sw-theme-arrows">
        <ul class="nav nav-progress">
          <li class="nav-item">
            <a class="nav-link default active" href="#step-1">
              <div class="num">1</div>
              Personal Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link default" href="#step-2">
              <span class="num">2</span>
              Business Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link default" href="#step-3">
              <span class="num">3</span>
              Requirements
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link default" href="#step-4">
              <span class="num">4</span>
              Confirm Details
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="position: static; left: 0px; display: block;">
            <!-- Where Personal Info Displayed -->
            <h3>Personal Info:</h3>
            <div class="row mb-3 p-md-4">
              <div class="col-12 col-md-6 p-md-3">
                <div class="form-floating">
                  <input type="text" name="f_name" id="f_name" class="form-control" placeholder="John" required>
                  <label for="f_name">First Name:</label>
                </div>
              </div>
              <div class="col-12 col-md-6  p-md-3">
                <div class="form-floating">
                  <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Doe" required>
                  <label for="l_name">Last Name:</label>
                </div>
              </div>
              <div class="col-12  p-md-3">
                <h5>Contact Info:</h5>
                <div class="row">
                  <div class="col-12 col-md-4 p-2">
                    <div class="form-floating">
                      <input type="text" name="Mobile_no" id="Mobile_no" class="form-control" placeholder="0965-453-5432" pattern="\d{4}-\d{3}-\d{4}" title="Please enter a valid landline number in the format XXXX-XXX-XXXX" required>
                      <label for="Mobile_no">Mobile Number:</label>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 p-2">
                    <div class="form-floating">
                      <input type="email" name="email_add" id="email_add" class="form-control" placeholder="example@example.com" required>
                      <label for="email_add">Email Address:</label>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 p-2">
                    <div class="form-floating">
                      <input type="text" name="landline" id="landline" class="form-control" placeholder="(XX) YYY ZZZZ">
                      <label for="landline">Landline:</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2" style="position: static; left: 0px; display: none;">
            <!-- Where the business info displayed -->
            <h3>Business Info:</h3>
            <div class="row mb-12">
              <div class="col-12 col-md-6">
                <div class="form-floating mb-3">
                  <input type="text" name="firm_name" id="firm_name" class="form-control" placeholder="ABC Company" required>
                  <label for="firm_name">Name of firm:</label>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-floating mb-3">
                  <input type="text" name="Address" id="Address" class="form-control" placeholder="123 Main St" required>
                  <label for="Address">Address:</label>
                </div>
              </div>
            </div>
            <div class="row mb-12 mt-3">
              <div class="col-12 col-md-4 mx-sm-1 mx-md-4 mb-3">
                <fieldset>
                  <legend class="w-auto">
                    Assets:
                  </legend>
                  <div class="form-floating mb-3">
                    <input type="text" name="buildings" id="buildings" class="form-control" placeholder="Value in USD" required>
                    <label for="buildings">Buildings:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="equipments" id="equipments" class="form-control" placeholder="Value in USD" required>
                    <label for="equipments">Equipments:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="working_capital" id="working_capital" class="form-control" placeholder="Value in USD" required>
                    <label for="working_capital">Working Capital:</label>
                  </div>
                </fieldset>
              </div>
              <div class="col-12 col-md-4 mx-sm-1 mx-md-4">
                <fieldset>
                  <legend class="w-auto">
                    Number of Personnel:
                  </legend>
                  <div class="form-floating mb-3">
                    <input type="number" name="male_personnel" id="male_personnel" class="form-control" placeholder="Number of Male Personnel" required>
                    <label for="male_personnel">Male:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" name="female_personnel" id="female_personnel" class="form-control" placeholder="Number of Female Personnel" required>
                    <label for="female_personnel">Female:</label>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
          <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3" style="position: static; left: 0px; display: none;">
            <!-- Where the requirements uploaded -->
            <h3>Upload the Following Requirments:</h3>
            <div class="row mb-12 p-5">
              <div class="mb-3">
                <label for="IntentFile" class="form-label">Letter of Intent:<span>*</span></label>
                <input class="form-control" type="file" id="IntentFile">
              </div>
              <div class="mb-3">
                <label for="dtiFile" class="form-label">DTI/SEC/CDA: <span>*</span></label>
                <input class="form-control" type="file" id="dtiFile">
              </div>
              <div class="mb-3">
                <label for="businessPermitFile" class="form-label">Business Permit: <span>*</span></label>
                <input class="form-control" type="file" id="businessPermitFile">
              </div>
              <div class="mb-3">
                <label for="fdaLtoFile" class="form-label">FDA/LTO:(Optional)</label>
                <input class="form-control" type="file" id="fdaLtoFile">
              </div>
              <div class="mb-3">
                <label for="receiptFile" class="form-label">Official Receipt of the Business: <span>*</span></label>
                <input class="form-control" type="file" id="receiptFile">
              </div>
              <div class="mb-3">
                <label for="govIdFile" class="form-label">Copy of Government Valid ID: <span>*</span></label>
                <input class="form-control" type="file" id="govIdFile">
              </div>
            </div>
            <div class="col-md-12 px-5">
              <div class="form-check">
                <input type="checkbox" name="agree_terms" id="agree_terms" class="form-check-input" required>
                <label for="agree_terms" class="form-check-label">Agree to Terms and Conditions</label>
              </div>
            </div>
          </div>
          <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4" style="position: static; left: 0px; display: none;">
            <div class="row">
              <div class="col-md-12">
                <span>Review and confirm the details provided before submission.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </form>

  </div>
  <?php include("footer.php"); ?>
  <script>
    $(document).ready(function() {
      $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'arrows',
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
</body>

</html>
<script>
  function clearFields() {
    $("#f_name").val("");
    $("#l_name").val("");
    $("#Mobile_no").val("");
    $("#email_add").val("");
    $("#landline").val("");
    $("#firm_name").val("");
    $("#Address").val("");
    $('input[name="asset_category"]:checked').prop('checked', false);
  }
  $('form').on('submit', function(event) {
    // Prevent the form from submitting immediately
    event.preventDefault();
  });

  // Check if all required fields are filled out and input matches required patterns
  var firstName = $("#f_name").val();
  var lastName = $("#l_name").val();
  var mobileNumber = $("#Mobile_no").val();
  var emailAddress = $("#email_add").val();
  var landline = $("#landline").val();
  var firmName = $("#firm_name").val();
  var address = $("#Address").val();
  var assetCategory = $('input[name="asset_category"]:checked').val();

  // Add your validation logic here. For example:
  if (!firstName || !lastName || !mobileNumber || !emailAddress || !landline || !firmName || !address || !assetCategory) {
    alert('Please fill out all required fields.');
    return;
  }

  // If everything is valid, show the confirmation dialog
  showConfirmation();

  function showConfirmation() {
    var firstName = $("#f_name").val();
    var lastName = $("#l_name").val();
    var mobileNumber = $("#Mobile_no").val();
    var emailAddress = $("#email_add").val();
    var landline = $("#landline").val();
    var firmName = $("#firm_name").val();
    var address = $("#Address").val();
    var assetCategory = $('input[name="asset_category"]:checked').val();

    var confirmationMessage = "<H5>We are about to receive the following:</H5><br>";
    confirmationMessage += "<strong>First Name:</strong> " + firstName + "<br>";
    confirmationMessage += "<strong>Last Name:</strong> " + lastName + "<br>";
    confirmationMessage += "<strong>Mobile Number:</strong> " + mobileNumber + "<br>";
    confirmationMessage += "<strong>Email Address:</strong> " + emailAddress + "<br>";
    confirmationMessage += "<strong>Landline:</strong> " + landline + "<br>";
    confirmationMessage += "<strong>Firm Name:</strong> " + firmName + "<br>";
    confirmationMessage += "<strong>Address:</strong> " + address + "<br>";
    confirmationMessage += "<strong>Asset Category:</strong> " + assetCategory + "<br>";

    $("#confirmationMessage").html(confirmationMessage);
    $('#confirmationModal').modal('show');

    // When the user clicks on the confirm button, submit the form
    $("#confirmButton").click(function() {
      $('#confirmationModal').modal('hide');
      $.ajax({
        type: 'POST',
        url: window.location.href,
        data: $('form').serialize(),
        success: function() {
          alert('Form successfully submitted!');
        }
      });
    });

    // When the user clicks on the cancel button, close the modal
    $('.btn-secondary[data-dismiss="modal"]').click(function() {
      $('#confirmationModal').modal('hide');
    });
  }
</script>