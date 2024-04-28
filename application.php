<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <style>
    #container {
      max-width: 60%;
    }

    .step-container {
      position: relative;
      text-align: center;
      transform: translateY(-43%);
    }

    .step-circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #fff;
      border: 2px solid #007bff;
      line-height: 30px;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
      cursor: pointer;
      /* Added cursor pointer */
    }

    .step-line {
      position: absolute;
      top: 16px;
      left: 50px;
      width: calc(100% - 100px);
      height: 2px;
      background-color: #007bff;
      z-index: -1;
    }

    #multi-step-form {
      overflow-x: hidden;
    }

    .radioButton {
      width: 60%;
      /* Adjust the width as needed */
    }
  </style>

</head>

<body>
  <?php include("header.php"); ?>
  <!-- Modal -->
  <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmationModalTitle">Verify Info</h5>
        </div>
        <div class="modal-body">
          <p id="confirmationMessage"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
          <button type="button" id="confirmButton" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <div id="container" class="container mt-5">
    <div class="progress px-1" style="height: 3px;">
      <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="step-container d-flex justify-content-between">
      <div class="step-circle" onclick="displayStep(1)">1</div>
      <div class="step-circle" onclick="displayStep(2)">2</div>
      <div class="step-circle" onclick="displayStep(3)">3</div>
    </div>

    <form id="multi-step-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class=" g-3 mt-5 ms-5 me-5 mb-2 p-5 border border-black rounded">
      <div class="step step-1">
        <!-- Step 1 form fields here -->
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
          <div class="col-md-6 p-3">
            <div class="form-floating">
              <input type="text" name="Mobile_no" id="Mobile_no" class="form-control" placeholder="0965-453-5432" pattern="\d{4}-\d{3}-\d{4}" title="Please enter a valid landline number in the format XXXX-XXX-XXXX" required>
              <label for="Mobile_no">Mobile Number:</label>
            </div>
          </div>
          <div class="col-md-6 p-3">
            <div class="form-floating">
              <input type="email" name="email_add" id="email_add" class="form-control" placeholder="example@example.com" required>
              <label for="email_add">Email Address:</label>
            </div>
          </div>
          <div class="col-md-6 p-3">
            <div class="form-floating">
              <input type="text" name="landline" id="landline" class="form-control" placeholder="(XX) YYY ZZZZ">
              <label for="landline">Landline:</label>
            </div>
          </div>
        </div>
        <div class=" d-flex justify-content-end">
          <button type="button" class="btn btn-primary next-step">Next</button>
        </div>
      </div>

      <div class="step step-2">
        <!-- Step 2 form fields here -->
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
          <div class="row mb-12">
            <div class="col-md-4">
              <h6>Assets:</h6>
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
            </div>
            <div class="col-md-4">
              <h6>Number of Personnel:</h6>
              <div class="form-floating mb-3">
                <input type="number" name="male_personnel" id="male_personnel" class="form-control" placeholder="Number of Male Personnel" required>
                <label for="male_personnel">Male:</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" name="female_personnel" id="female_personnel" class="form-control" placeholder="Number of Female Personnel" required>
                <label for="female_personnel">Female:</label>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-primary prev-step">Previous</button>
          <button type="button" class="btn btn-primary next-step mx-3">Next</button>
        </div>
      </div>

      <div class="step step-3">
        <!-- Step 3 form fields here -->
        <h3>Assets Category:</h3>
        <div class="row mb-12 ">
          <div class="col-md-4 p-4 justify-content-start radioButton">
            <div class="form-check form-check-inline">
              <input type="radio" id="micro" name="asset_category" value="Micro" class="form-check-input">
              <label for="micro" class="form-check-label">Micro (assets less than 3M)</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" id="small" name="asset_category" value="Small" class="form-check-input">
              <label for="small" class="form-check-label">Small (assets of 3M to 15M)</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" id="medium" name="asset_category" value="Medium" class="form-check-input">
              <label for="medium" class="form-check-label">Medium (assets of 15M to 100M)</label>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-check">
            <input type="checkbox" name="agree_terms" id="agree_terms" class="form-check-input" required>
            <label for="agree_terms" class="form-check-label">Agree to Terms and Conditions</label>
          </div>
          <div class="col-12 d-flex justify-content-end">
            <button type="button" class="btn btn-primary prev-step">Previous</button>
            <button type="submit" name="submit" class="btn btn-success w-25 mx-2">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div>
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
  var currentStep = 1;
  var updateProgressBar;

  function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 3) {
      $(".step-" + currentStep).hide();
      $(".step-" + stepNumber).show();
      currentStep = stepNumber;
      updateProgressBar();
    }
  }

  $(document).ready(function() {
    $('#multi-step-form').find('.step').slice(1).hide();

    $(".next-step").click(function() {
      if (currentStep < 3) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep++;
        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
          updateProgressBar();
        }, 500);
      }
    });

    $(".prev-step").click(function() {
      if (currentStep > 1) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
        currentStep--;
        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
          updateProgressBar();
        }, 500);
      }
    });

    updateProgressBar = function() {
      var progressPercentage = ((currentStep - 1) / 2) * 100;
      $(".progress-bar").css("width", progressPercentage + "%");
    }
  });
</script>