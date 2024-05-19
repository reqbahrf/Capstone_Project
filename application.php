<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="../assets/css/main.css">
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

    :root {
      --sw-toolbar-btn-background-color: #318791;
      --sw-anchor-default-primary-color: #f8f9fa;
      --sw-anchor-active-primary-color: #318791;
      --sw-anchor-active-secondary-color: #ffffff;
      --sw-anchor-done-primary-color: #48C4D3;
      --sw-anchor-error-primary-color: #dc3545;
      --sw-anchor-error-secondary-color: #ffffff;
      --sw-anchor-warning-primary-color: #ffc107;
      --sw-anchor-warning-secondary-color: #ffffff;
      --sw-progress-color: #318791;
      --sw-progress-background-color: #f8f9fa;
      --sw-loader-color: #318791;
      --sw-loader-background-color: #f8f9fa;
      --sw-loader-background-wrapper-color: rgba(255, 255, 255, 0.7);
    }
  </style>

</head>

<body>
  <?php include("header.php"); ?>
  <div class="container mt-5 shadow">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="g-3 p-5">
      <div id="smartwizard">
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
              <div class="col-12 col-md-6 p-md-3 p-2">
                <div class="form-floating">
                  <input type="text" name="f_name" id="f_name" class="form-control" placeholder="John" required>
                  <div class="invalid-feedback">
                    Please enter your first name.
                  </div>
                  <label for="f_name">First Name:</label>
                </div>
              </div>
              <div class="col-12 col-md-6 p-md-3 p-2">
                <div class="form-floating">
                  <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Doe" required>
                  <div class="invalid-feedback">
                    Please enter your last name.
                  </div>
                  <label for="l_name">Last Name:</label>
                </div>
              </div>
              <div class="col-12 p-md-3">
                <h5>Contact Info:</h5>
                <div class="row">
                  <div class="col-12 col-md-4 p-2">
                    <div class="form-floating">
                      <input type="text" name="Mobile_no" id="Mobile_no" class="form-control" placeholder="0965-453-5432" pattern="\d{4}-\d{3}-\d{4}" title="Please enter a valid landline number in the format XXXX-XXX-XXXX" required>
                      <div class="invalid-feedback">
                        Please enter a valid mobile number.
                      </div>
                      <label for="Mobile_no">Mobile Number:</label>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 p-2">
                    <div class="form-floating">
                      <input type="email" name="email_add" id="email_add" class="form-control" placeholder="example@example.com" required>
                      <div class="invalid-feedback">
                        Please enter a valid email address.
                      </div>
                      <label for="email_add">Email Address:</label>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 p-2">
                    <div class="form-floating">
                      <input type="text" name="landline" id="landline" class="form-control" placeholder="(XX) YYY ZZZZ">
                      <div class="invalid-feedback">
                        Please enter a valid landline number.
                      </div>
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
                  <div class="invalid-feedback">
                    Please enter the name of the firm.
                  </div>
                  <label for="firm_name">Name of firm:</label>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-floating mb-3">
                  <input type="text" name="Address" id="Address" class="form-control" placeholder="123 Main St" required>
                  <div class="invalid-feedback">
                    Please enter the address.
                  </div>
                  <label for="Address">Address:</label>
                </div>
              </div>
            </div>
            <div class="row mb-2 mt-3">
              <div class="col-12 col-md-4 mb-3">
                <fieldset>
                  <legend class="w-auto">
                    Assets:
                  </legend>
                  <div class="form-floating mb-3">
                    <input type="text" name="buildings" id="buildings" class="form-control" placeholder="Value in USD" required>
                    <div class="invalid-feedback">
                      Please enter the value of buildings.
                    </div>
                    <label for="buildings">Buildings:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="equipments" id="equipments" class="form-control" placeholder="Value in USD" required>
                    <div class="invalid-feedback">
                      Please enter the value of equipments.
                    </div>
                    <label for="equipments">Equipments:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="working_capital" id="working_capital" class="form-control" placeholder="Value in USD" required>
                    <div class="invalid-feedback">
                      Please enter the value of working capital.
                    </div>
                    <label for="working_capital">Working Capital:</label>
                  </div>
                </fieldset>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <fieldset>
                  <legend class="w-auto">Number of Personnel Direct:</legend>
                  <div class="form-floating mb-3">
                    <input type="text" name="male_personnelDi" id="male_personnelDi" class="form-control" placeholder="Number of Male Personnel" required>
                    <div class="invalid-feedback">
                      Please enter the number of male personnel.
                    </div>
                    <label for="male_personnelDi">Male:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="female_personnelDi" id="female_personnelDi" class="form-control" placeholder="Number of Female Personnel" required>
                    <div class="invalid-feedback">
                      Please enter the number of female personnel.
                    </div>
                    <label for="female_personnelDi">Female:</label>
                  </div>
                </fieldset>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <fieldset>
                  <legend class="w-auto">Number of Personnel Indirect:</legend>
                  <div class="form-floating mb-3">
                    <input type="text" name="male_personnelInd" id="male_personnelInd" class="form-control" placeholder="Number of Male Personnel" required>
                    <div class="invalid-feedback">
                      Please enter the number of male personnel.
                    </div>
                    <label for="male_personnelInd">Male:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="female_personnelInd" id="female_personnelInd" class="form-control" placeholder="Number of Female Personnel" required>
                    <div class="invalid-feedback">
                      Please enter the number of female personnel.
                    </div>
                    <label for="female_personnelInd">Female:</label>
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
                <input class="form-control" type="file" id="IntentFile" required>
                <div class="invalid-feedback">
                  Please upload the Letter of Intent.
                </div>
              </div>
              <div class="mb-3">
                <label for="dtiFile" class="form-label">DTI/SEC/CDA: <span>*</span></label>
                <input class="form-control" type="file" id="dtiFile" required>
                <div class="invalid-feedback">
                  Please upload the DTI/SEC/CDA document.
                </div>
              </div>
              <div class="mb-3">
                <label for="businessPermitFile" class="form-label">Business Permit: <span>*</span></label>
                <input class="form-control" type="file" id="businessPermitFile" required>
                <div class="invalid-feedback">
                  Please upload the Business Permit.
                </div>
              </div>
              <div class="mb-3">
                <label for="fdaLtoFile" class="form-label">FDA/LTO:(Optional)</label>
                <input class="form-control" type="file" id="fdaLtoFile">
              </div>
              <div class="mb-3">
                <label for="receiptFile" class="form-label">Official Receipt of the Business: <span>*</span></label>
                <input class="form-control" type="file" id="receiptFile" required>
                <div class="invalid-feedback">
                  Please upload the Official Receipt of the Business.
                </div>
              </div>
              <div class="mb-3">
                <label for="govIdFile" class="form-label">Copy of Government Valid ID: <span>*</span></label>
                <input class="form-control" type="file" id="govIdFile" required>
                <div class="invalid-feedback">
                  Please upload the Copy of Government Valid ID.
                </div>
              </div>
            </div>
            <div class="col-md-12 px-5">
              <div class="form-check">
                <input type="checkbox" name="agree_terms" id="agree_terms" class="form-check-input" required>
                <div class="invalid-feedback">
                  You must agree to the terms and conditions.
                </div>
                <label for="agree_terms" class="form-check-label">Agree to Terms and Conditions</label>
              </div>
            </div>
          </div>
    </form>
    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4" style="position: static; left: 0px; display: none;">
      <div class="row">
        <div class="col-md-12 mb-4">
          <h5>Review and confirm the details provided before submission.</h5>
        </div>
        <div class="d-flex justify-content-center align-items-center flex-column"">
          <div class=" w-50 border rounded-5 p-4 shadow">
          <h6 class="mb-4">Personal info:</h6>
          <div class="ps-4">
            <label for="f_name">First Name</label>
            <input type="text" name="f_name" id="re_f_name" class="form-control mb-3" readonly>

            <label for="l_name">Last Name</label>
            <input type="text" name="l_name" id="re_l_name" class="form-control mb-3" readonly>

            <label for="Mobile_no">Mobile Number</label>
            <input type="text" name="Mobile_no" id="re_Mobile_no" class="form-control mb-3" readonly>

            <label for="email_add">Email Address</label>
            <input type="email" name="email_add" id="re_email_add" class="form-control mb-3" readonly>

            <label for="landline">Landline</label>
            <input type="text" name="landline" id="re_landline" class="form-control mb-3" readonly>
          </div>
          <h6 class="mb-4">Business Info:</h6>
          <div class="ps-4">
            <label for="firm_name">Firm Name</label>
            <input type="text" name="firm_name" id="re_firm_name" class="form-control mb-3" readonly>

            <label for="Address">Address</label>
            <input type="text" name="Address" id="re_Address" class="form-control mb-3" readonly>
            <fieldset class=" my-3">
              <legend>
                Assets
              </legend>
              <label for="buildings">Buildings</label>
              <input type="text" name="buildings" id="re_buildings" class="form-control mb-3" readonly>

              <label for="equipments">Equipments</label>
              <input type="text" name="equipments" id="re_equipments" class="form-control mb-3" readonly>

              <label for="working_capital">Working Capital</label>
              <input type="text" name="working_capital" id="re_working_capital" class="form-control mb-3" readonly>

            </fieldset>
            <fieldset class=" my-3">
              <legend>
                Number of Personnel Direct:
              </legend>
              <label for="male_personnel">Male Personnel</label>
              <input type="number" name="male_personnel" id="re_male_personnelDir" class="form-control mb-3" readonly>

              <label for="female_personnel">Female Personnel</label>
              <input type="number" name="female_personnel" id="re_female_personnelDir" class="form-control mb-3" readonly>
            </fieldset>
            <fieldset class=" my-3">
              <legend>
                Number of Personnel Indirect:
              </legend>
              <label for="male_personnel">Male Personnel</label>
              <input type="number" name="male_personnelDir" id="re_male_personnelInd" class="form-control mb-3" readonly>

              <label for="female_personnel">Female Personnel</label>
              <input type="number" name="female_personnelDir" id="re_female_personnelInd" class="form-control mb-3" readonly>
            </fieldset>

          </div>
          <h6 class="mb-4">Requirement Uploaded:</h6>
          <div class="ps-4">
            <div class="form-group">
              <label for="IntentFileReadonly">Intent File Name:</label>
              <input class="form-control mb-3" type="text" id="IntentFileReadonly" readonly>
            </div>
            <div class="form-group">
              <label for="dtiFileReadonly">DTI File Name:</label>
              <input class="form-control mb-3" type="text" id="dtiFileReadonly" readonly>
            </div>
            <div class="form-group">
              <label for="businessPermitFileReadonly">Business Permit File Name:</label>
              <input class="form-control mb-3" type="text" id="businessPermitFileReadonly" readonly>
            </div>
            <div class="form-group">
              <label for="fdaLtoFileReadonly">FDA LTO File Name:</label>
              <input class="form-control mb-3" type="text" id="fdaLtoFileReadonly" readonly>
            </div>
            <div class="form-group">
              <label for="receiptFileReadonly">Receipt File Name:</label>
              <input class="form-control mb-3" type="text" id="receiptFileReadonly" readonly>
            </div>
            <div class="form-group">
              <label for="govIdFileReadonly">Government ID File Name:</label>
              <input class="form-control mb-3" type="text" id="govIdFileReadonly" readonly>
            </div>
          </div>

          </div>
          

        </div>
      </div>


    </div>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  </div>
  </div>
  <?php include("footer.php"); ?>
  <script>
    $(document).ready(function() {
      var fileInputs = {
        'IntentFile': 'IntentFileReadonly',
        'dtiFile': 'dtiFileReadonly',
        'businessPermitFile': 'businessPermitFileReadonly',
        'fdaLtoFile': 'fdaLtoFileReadonly',
        'receiptFile': 'receiptFileReadonly',
        'govIdFile': 'govIdFileReadonly'
    };

    // Attach change event listeners to file inputs for updating readonly fields
    $.each(fileInputs, function(inputId, readonlyId) {
        $('#' + inputId).on('change', function() {
            var fileName = this.files.length > 0 ? this.files[0].name : '';
            $('#' + readonlyId).val(fileName);
        });
    });
    
      $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        transition: {
          animation: 'slideHorizontal'
        },
        toolbar: {
          showNextButton: true,
          showPreviousButton: true,
          position: 'both bottom',
          extraHtml: `<button class="btn btn-success" onclick="onFinish()">Submit</button>
                        <button class="btn btn-secondary" onclick="onCancel()">Cancel</button>`
        },
        anchorSettings: {
          anchorClickable: false, // Anchors are not clickable
        }
      });

      $('#smartwizard').on('leaveStep', function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
        // Check if the user is moving forward
        if (nextStepIndex > currentStepIndex) {
          // Perform validation for the current step
          if (!validateCurrentStep(currentStepIndex)) {
            return false; // Prevent moving to the next step
          }
        }
      });

      $('#smartwizard').on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
        var totalSteps = $('#smartwizard').find('ul li').length;
        console.log("Total Steps:", totalSteps);

        if (stepIndex === totalSteps - 1 && stepPosition === 'last') {
          console.log("Arriving at Last Step - Showing Buttons");
          $('.btn-success, .btn-secondary').show();

        } else {
          console.log("Not Arriving at Last Step - Hiding Buttons");
          $('.btn-success, .btn-secondary').hide();
        }
        if (stepIndex === 3) { // Since stepIndex is 0-based, step-4 corresponds to index 3
          console.log("Arriving at Last Step - Transferring Values");

          // Personal Info
          $('#re_f_name').val($('#f_name').val());
          $('#re_l_name').val($('#l_name').val());
          $('#re_Mobile_no').val($('#Mobile_no').val());
          $('#re_email_add').val($('#email_add').val());
          $('#re_landline').val($('#landline').val());

          // Business Info
          $('#re_firm_name').val($('#firm_name').val());
          $('#re_Address').val($('#Address').val());
          $('#re_buildings').val($('#buildings').val());
          $('#re_equipments').val($('#equipments').val());
          $('#re_working_capital').val($('#working_capital').val());

          // Personnel Info
          $('#re_male_personnelDir').val($('#male_personnelDi').val());
          $('#re_female_personnelDir').val($('#female_personnelDi').val());
          $('#re_male_personnelInd').val($('#male_personnelInd').val());
          $('#re_female_personnelInd').val($('#female_personnelInd').val());

          // Object mapping file input IDs to their corresponding readonly input IDs
        }

      });
    });

    function validateCurrentStep(stepIndex) {
      var isValid = true;
      var currentStep = $('#step-' + (stepIndex + 1)); // stepIndex is 0-based

      currentStep.find('input, select, textarea').each(function() {
        if (!this.checkValidity()) {
          $(this).addClass('is-invalid'); // Add invalid class for styling
          isValid = false;
        } else {
          $(this).removeClass('is-invalid');
        }
      });

      return isValid;
    }


    function onFinish() {
      console.log("Form submitted");
      $('form').submit();
    }

    function onCancel() {
      console.log("Form cancelled");
      window.location.href = 'some_cancel_url'; // Redirect to a specific URL
    }
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