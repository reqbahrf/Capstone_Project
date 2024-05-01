<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>
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
      background-color: #fff;
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

    #step-3 span {
      color: red;
    }
  </style>

</head>

<body>
  <?php include("header.php"); ?>
  <div class="container mt-5">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="g-3 p-5">
      <div id="smartwizard">
        <ul>
          <li><a href="#step-1">Step 1<br /><small>Personal Info</small></a></li>
          <li><a href="#step-2">Step 2<br /><small>Business Info</small></a></li>
          <li><a href="#step-3">Step 3<br /><small>Requirements</small></a></li>
          <li><a href="#step-4">Step 4<br /><small>Confirm details</small></a></li>
        </ul>
        <div class="mt-4">
          <div id="step-1">
            <!-- Include Personal Info fields here -->
            <h3>Personal Info:</h3>
            <div class="row mb-3">
              <div class="col-md-6 p-3">
                <div class="form-floating">
                  <input type="text" name="f_name" id="f_name" class="form-control" placeholder="John" required>
                  <label for="f_name">First Name:</label>
                </div>
              </div>
              <div class="col-md-6 p-3">
                <div class="form-floating">
                  <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Doe" required>
                  <label for="l_name">Last Name:</label>
                </div>
              </div>
              <div class="col-md-12 p-3">
                <h6>Contact Info:</h6>
                <div class="row"> <!-- Ensure there is a 'row' class here -->
                  <div class="col-md-4 p-2">
                    <div class="form-floating">
                      <input type="text" name="Mobile_no" id="Mobile_no" class="form-control" placeholder="0965-453-5432" pattern="\d{4}-\d{3}-\d{4}" title="Please enter a valid landline number in the format XXXX-XXX-XXXX" required>
                      <label for="Mobile_no">Mobile Number:</label>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="form-floating">
                      <input type="email" name="email_add" id="email_add" class="form-control" placeholder="example@example.com" required>
                      <label for="email_add">Email Address:</label>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="form-floating">
                      <input type="text" name="landline" id="landline" class="form-control" placeholder="(XX) YYY ZZZZ">
                      <label for="landline">Landline:</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="step-2">
            <!-- Include Business Info fields here -->
            <h3>Business Info:</h3>
            <div class="row mb-12">
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <input type="text" name="firm_name" id="firm_name" class="form-control" placeholder="ABC Company" required>
                  <label for="firm_name">Name of firm:</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <input type="text" name="Address" id="Address" class="form-control" placeholder="123 Main St" required>
                  <label for="Address">Address:</label>
                </div>
              </div>
              <div class="row mb-12 mt-3">
                <div class="col-md-4 mx-4">
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
                <div class="col-md-4 mx-4">
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
          </div>
          <div id="step-3">
            <!-- Include Assets Category fields here -->
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
          <div id="step-4">
            <!-- Confirmation message or summary -->
            <div class="row">
              <div class="col-md-12">
                <span>Review and confirm the details provided before submission.</span>
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" name="submit" class="btn btn-success w-25 mx-2">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Include your step content here as in the modal -->
      </div>
    </form>
  </div>
  <?php include("footer.php"); ?>
  </div>

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
<script>
  $(document).ready(function() {
    // Initialize the smartWizard
    $('#smartwizard').smartWizard({
      selected: 0,
      theme: 'arrows',
      autoAdjustHeight: true,
      transitionEffect: 'fade',
      showStepURLhash: false,
      toolbarSettings: {
        toolbarPosition: 'bottom',
        toolbarButtonPosition: 'end',
        showNextButton: true, // show next button
        showPreviousButton: true // show previous button
      }
    });

    // Move to the next step
    $(".sw-btn-next").on("click", function() {
      var currentStep = $('#smartwizard').smartWizard("getStepIndex");
      if (!validateStep(currentStep)) {
        return false; // prevent moving to the next step if validation fails
      }
    });

    // Move to the previous step
    $(".sw-btn-prev").on("click", function() {
      // Additional actions can be performed here when moving to the previous step
    });

    // Custom validation logic for each step
    function validateStep(stepIndex) {
      switch (stepIndex) {
        case 1:
          return validatePersonalInfo();
        case 2:
          return validateBusinessInfo();
        case 3:
          return validateAssetsCategory();
        default:
          return true;
      }
    }

    // Example validation function for Personal Info step
    function validatePersonalInfo() {
      // Implement validation logic here
      // Return true if valid, false otherwise
      return true;
    }

    // Example validation function for Business Info step
    function validateBusinessInfo() {
      // Implement validation logic here
      // Return true if valid, false otherwise
      return true;
    }

    // Example validation function for Assets Category step
    function validateAssetsCategory() {
      // Implement validation logic here
      // Return true if valid, false otherwise
      return true;
    }
  });
</script>