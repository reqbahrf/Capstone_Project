<?php

$conn = include_once './db_connection/database_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve current user's ID from session
  session_start();
  $user_id = 1; // Assuming you store the user ID in session
  $successful_inserts = 0;

  // Personal Info table
  $f_name = htmlspecialchars($_POST['f_name']);
  $l_name = htmlspecialchars($_POST['l_name']);

  $b_date = htmlspecialchars($_POST['b_date']);
  $date = DateTime::createFromFormat('m/d/Y', $b_date);
  $formatted_date = $date->format('Y-m-d');

  $designation = htmlspecialchars($_POST['designation']);
  $mobile_number = htmlspecialchars($_POST['Mobile_no']);
  $email_address = htmlspecialchars($_POST['email_add']);
  $landline = htmlspecialchars($_POST['landline']);

  // Insert into personal_info table
  $sql_personal_info = "INSERT INTO personal_info (user_id, f_name, l_name, birth_date, designation, mobile_number, email_address, landline) 
                          VALUES ('$user_id', '$f_name', '$l_name', '$formatted_date', '$designation', '$mobile_number', '$email_address', '$landline')";
  $conn->query($sql_personal_info);
  if ($conn->affected_rows > 0) {
    $successful_inserts++;
  }

  $personal_info_id = $conn->insert_id;

  // Business Info table
  $firm_name = htmlspecialchars($_POST['firm_name']);
  $enterprise_type = htmlspecialchars($_POST['enterpriseType']);
  $enterprise_level = htmlspecialchars($_POST['enterprise_level']);
  $address = htmlspecialchars($_POST['Address']);

  // Insert into business_info table
  $sql_business_info = "INSERT INTO business_info (user_info_id, firm_name, enterprise_type, enterprise_level, address) 
                          VALUES ('$personal_info_id', '$firm_name', '$enterprise_type', '$enterprise_level', '$address')";
  $conn->query($sql_business_info);
  if ($conn->affected_rows > 0) {
    $successful_inserts++;
  }

  // Retrieve the last inserted business ID
  $business_id = $conn->insert_id;

  // Assets table
  $building_value = htmlspecialchars($_POST['buildings']);
  $equipment_value = htmlspecialchars($_POST['equipments']);
  $working_capital = htmlspecialchars($_POST['working_capital']);

  // Insert into assets table
  $sql_assets = "INSERT INTO assets (business_id, building_value, equipment_value, working_capital) 
                   VALUES ('$business_id', '$building_value', '$equipment_value', '$working_capital')";
  $conn->query($sql_assets);
  if ($conn->affected_rows > 0) {
    $successful_inserts++;
  }
  // Personnel table
  $male_direct = htmlspecialchars($_POST['male_personnelDi']);
  $female_direct = htmlspecialchars($_POST['female_personnelDi']);
  $male_indirect = htmlspecialchars($_POST['male_personnelInd']);
  $female_indirect = htmlspecialchars($_POST['female_personnelInd']);

  // Insert into personnel table
  $sql_personnel = "INSERT INTO personnel (business_id, male_direct, female_direct, male_indirect, female_indirect) 
                      VALUES ('$business_id', '$male_direct', '$female_direct', '$male_indirect', '$female_indirect')";
  $conn->query($sql_personnel);
  if ($conn->affected_rows > 0) {
    $successful_inserts++;
  }

  // Requirements table
  // Check if the file inputs are set and not empty

  $allowed_mime_type = 'application/pdf';

  $letter_of_intent = $_FILES['IntentFile']['name'];
  if ($_FILES['IntentFile']['type'] != $allowed_mime_type) {
      die('Invalid file type for Letter of Intent. Only PDF files are allowed.');
  }
  
  $dti_sec_cda = $_FILES['dtiFile']['name'];
  if ($_FILES['dtiFile']['type'] != $allowed_mime_type) {
      die('Invalid file type for DTI/SEC/CDA. Only PDF files are allowed.');
  }
  
  $business_permit = $_FILES['businessPermitFile']['name'];
  if ($_FILES['businessPermitFile']['type'] != $allowed_mime_type) {
      die('Invalid file type for Business Permit. Only PDF files are allowed.');
  }
  
  $fda_ito = $_FILES['fdaLtoFile']['name'];
  if ($_FILES['fdaLtoFile']['type'] != $allowed_mime_type) {
      die('Invalid file type for FDA/ITO. Only PDF files are allowed.');
  }
  
  $official_receipt = $_FILES['receiptFile']['name'];
  if ($_FILES['receiptFile']['type'] != $allowed_mime_type) {
      die('Invalid file type for Official Receipt. Only PDF files are allowed.');
  }
  
  $government_id = $_FILES['govIdFile']['name'];
  if ($_FILES['govIdFile']['type'] != $allowed_mime_type) {
      die('Invalid file type for Government ID. Only PDF files are allowed.');
  }
  
  // Insert into the requirements table
  $sql_files = "INSERT INTO `requirements`(`business_id`, `letter_of_intent`, `dti_sec_cda`, `business_permit`, `fda_ito`, `official_receipt`, `government_id`) 
            VALUES ('$business_id', '$letter_of_intent', '$dti_sec_cda', '$business_permit', '$fda_ito', '$official_receipt', '$government_id')";
  // Execute the SQL query
  $conn->query($sql_files);
  if ($conn->affected_rows > 0) {
    $successful_inserts++;
  };

  $sql_applicationInfo = "INSERT INTO `application_info`(`business_id`) VALUES ('$business_id')";
  $conn->query($sql_applicationInfo);
  if ($conn->affected_rows > 0) {
    $successful_inserts++;
  };

  if ($successful_inserts == 6) {
    echo '<div class="alert alert-success alert-dismissible text-bg-success border-0 fade show m-5" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Success - </strong> All data successfully inserted.
    </div>';
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="../assets/jquery-3.7.1/jquery-3.7.1.min.js"></script>
  <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>
  <link rel="stylesheet" href="./assets/dist-smartWizard/css/smart_wizard_all.min.css">
  <script src="./assets/dist-smartWizard/js/jquery.smartWizard.min.js"></script>
  <script src="./assets/date-picker-assets/moment.min.js"></script>
  <script src="./assets/date-picker-assets/daterangepicker.js"></script>
  <link rel="stylesheet" href="./assets/date-picker-assets/daterangepicker.css">
  <script>
    $(document).ready(function() {
      $('#b_date').daterangepicker({
        "singleDatePicker": true,
        "showDropdowns": true,
        "opens": "center",
        "drops": "up",
        "autoUpdateInput": false
      });

      $('#b_date').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY'));
      });

      $('#b_date').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
      });
    });
  </script>
  <script>
    function togglePasswordVisibility() {
      let passwordInput = document.querySelector('#password');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    }

    document.querySelector('input[type="checkbox"]').addEventListener('click', togglePasswordVisibility);

    function validateForm() {
      let usernameInput = document.getElementById('username');
      let passwordInput = document.getElementById('password');

      if (usernameInput.value === '') {
        alert('Please enter a username.');
        return false;
      }

      if (passwordInput.value === '') {
        alert('Please enter a password.');
        return false;
      }



      return true;
    }
  </script>
  <style>
    #container {
      max-width: 60%;
    }

    #Enterprise_Level,
    #to_Assets,
    #re_to_Assets,
    #re_Enterprise_Level {
      font-weight: bold;
      color: #318791;
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="g-3 p-5" enctype="multipart/form-data">
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
              <div class="col-12 p-md-3 p-2">
                <div class="row">
                  <div class="col-12 col-md-6 mx-auto">
                    <div class="form-floating">
                      <input type="text" name="b_date" id="b_date" class="form-control" placeholder="Birth Date:" required>
                      <div class="invalid-feedback">
                        Please enter your Birth Date.
                      </div>
                      <label for="b_date">Birth Date:</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 p-md-3 p-2">
                <div class="row">
                  <div class="col-12 col-md-6 mx-auto">
                    <div class="form-floating">
                      <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" required data-bs-toggle="tooltip" data-bs-placement="right" title="Example: Manager, Owner, CEO, etc.">
                      <div class="invalid-feedback">
                        Please enter your Designation.
                      </div>
                      <label for="designation">Designation:</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 p-md-3">
                <h5>Contact Info:</h5>
                <div class="row">
                  <div class="col-12 col-md-4 p-2">
                    <div class="form-floating">
                      <input type="text" name="Mobile_no" id="Mobile_no" class="form-control" placeholder="0965-453-5432" pattern="\d{4}-\d{3}-\d{4}" title="Please enter a valid mobile number in the format XXXX-XXX-XXXX" required>
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
                <div class="form-floating">
                  <select class="form-select" name="enterpriseType" id="enterpriseType" aria-label="Floating label select example" required>
                    <option selected>Select Type of Enterprise</option>
                    <option value="Sole Proprietorship">Sole Proprietorship</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Corporation">Corporation</option>
                  </select>
                  <label for="enterpriseType">Type Of Enterprise</label>
                  <div class="invalid-feedback">
                    Please select a type of enterprise.
                  </div>
                </div>
              </div>
              <div class="col-12">
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
                  <p>Total Assets: <span id="to_Assets"></span></p>
                  <p>Enterprise Level: <span id="Enterprise_Level"></span></p>
                  <input type="hidden" id="EnterpriseLevelInput" name="enterprise_level">
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
                <input class="form-control" type="file" name="IntentFile" id="IntentFile" required>
                <div class="invalid-feedback">
                  Please upload the Letter of Intent.
                </div>
              </div>
              <div class="mb-3">
                <label for="dtiFile" class="form-label">DTI/SEC/CDA: <span>*</span></label>
                <input class="form-control" type="file" name="dtiFile" id="dtiFile" required>
                <div class="invalid-feedback">
                  Please upload the DTI/SEC/CDA document.
                </div>
              </div>
              <div class="mb-3">
                <label for="businessPermitFile" class="form-label">Business Permit: <span>*</span></label>
                <input class="form-control" type="file" name="businessPermitFile" id="businessPermitFile" required>
                <div class="invalid-feedback">
                  Please upload the Business Permit.
                </div>
              </div>
              <div class="mb-3">
                <label for="fdaLtoFile" class="form-label">FDA/LTO:(Optional)</label>
                <input class="form-control" type="file" name="fdaLtoFile" id="fdaLtoFile">
              </div>
              <div class="mb-3">
                <label for="receiptFile" class="form-label">Official Receipt of the Business: <span>*</span></label>
                <input class="form-control" type="file" name="receiptFile" id="receiptFile" required>
                <div class="invalid-feedback">
                  Please upload the Official Receipt of the Business.
                </div>
              </div>
              <div class="mb-3">
                <label for="govIdFile" class="form-label">Copy of Government Valid ID: <span>*</span></label>
                <input class="form-control" type="file" name="govIdFile" id="govIdFile" required>
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
            <input type="text" id="re_f_name" class="form-control mb-3" readonly>

            <label for="l_name">Last Name</label>
            <input type="text" id="re_l_name" class="form-control mb-3" readonly>

            <label for="b_Date">Birth Date</label>
            <input type="text" id="re_b_Date" class="form-control mb-3" readonly>

            <label for="designa">Designation</label>
            <input type="text" id="re_designa" class="form-control mb-3" readonly>

            <label for="Mobile_no">Mobile Number</label>
            <input type="text" id="re_Mobile_no" class="form-control mb-3" readonly>

            <label for="email_add">Email Address</label>
            <input type="email" id="re_email_add" class="form-control mb-3" readonly>

            <label for="landline">Landline</label>
            <input type="text" id="re_landline" class="form-control mb-3" readonly>
          </div>
          <h6 class="mb-4">Business Info:</h6>
          <div class="ps-4">
            <label for="firm_name">Firm Name</label>
            <input type="text" id="re_firm_name" class="form-control mb-3" readonly>

            <label for="type_enterprise">Type of Enterprise</label>
            <input type="text" id="re_type_enterprise" class="form-control mb-3" readonly>

            <label for="Address">Address</label>
            <input type="text" id="re_Address" class="form-control mb-3" readonly>
            <fieldset class=" my-3">
              <legend>
                Assets
              </legend>
              <label for="buildings">Buildings</label>
              <input type="text" id="re_buildings" class="form-control mb-3" readonly>

              <label for="equipments">Equipments</label>
              <input type="text" id="re_equipments" class="form-control mb-3" readonly>

              <label for="working_capital">Working Capital</label>
              <input type="text" id="re_working_capital" class="form-control mb-3" readonly>

              <p>Total Assets: <span id="re_to_Assets"></span></p>
              <p>Enterprise Level: <span id="re_Enterprise_Level"></span></p>

            </fieldset>
            <fieldset class=" my-3">
              <legend>
                Number of Personnel Direct:
              </legend>
              <label for="male_personnel">Male Personnel</label>
              <input type="number" id="re_male_personnelDir" class="form-control mb-3" readonly>

              <label for="female_personnel">Female Personnel</label>
              <input type="number" id="re_female_personnelDir" class="form-control mb-3" readonly>
            </fieldset>
            <fieldset class=" my-3">
              <legend>
                Number of Personnel Indirect:
              </legend>
              <label for="male_personnel">Male Personnel</label>
              <input type="number" id="re_male_personnelInd" class="form-control mb-3" readonly>

              <label for="female_personnel">Female Personnel</label>
              <input type="number" id="re_female_personnelInd" class="form-control mb-3" readonly>
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
    $(function() {
      $('[data-bs-toggle="tooltip"]').tooltip()
    })
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
          extraHtml: `<button type="submit" class="btn btn-success" onclick="onFinish()">Submit</button>
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
          $('#re_b_Date').val($('#b_date').val());
          $('#re_designa').val($('#designation').val());
          $('#re_Mobile_no').val($('#Mobile_no').val());
          $('#re_email_add').val($('#email_add').val());
          $('#re_landline').val($('#landline').val());

          // Business Info
          $('#re_firm_name').val($('#firm_name').val());
          $('#re_type_enterprise').val($('#enterpriseType').val());
          $('#re_Address').val($('#Address').val());
          $('#re_buildings').val($('#buildings').val());
          $('#re_equipments').val($('#equipments').val());
          $('#re_working_capital').val($('#working_capital').val());
          $('#re_to_Assets').text($('#to_Assets').text());
          $('#re_Enterprise_Level').text($('#Enterprise_Level').text());

          $('#EnterpriseLevelInput').val($('#Enterprise_Level').text());


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

    $(document).ready(function() {
      $('#Mobile_no').on('keypress', function(e) {
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
        }
        return true;
      }).on('input', function() {
        var number = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
        if (number.length > 0) {
          var formattedNumber = number.match(/(\d{0,4})(\d{0,3})(\d{0,4})/);
          var formatted = '';
          if (formattedNumber[1]) formatted += formattedNumber[1];
          if (formattedNumber[2]) formatted += '-' + formattedNumber[2];
          if (formattedNumber[3]) formatted += '-' + formattedNumber[3];
          $(this).val(formatted);
        }
      });
    });

    $(document).ready(function() {

      function updateEnterpriseLevel() {
        const formatNumber = (input) => {
          let value = input.value.replace(/,/g, ''); // Remove existing commas
          value = value.replace(/\D/g, ''); // Remove non-numeric characters
          value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ','); // Add commas every 3 digits

          input.value = value;
        };

        formatNumber(document.getElementById('buildings'));
        formatNumber(document.getElementById('equipments'));
        formatNumber(document.getElementById('working_capital'));

        var buildingsValue = parseFloat($('#buildings').val().replace(/,/g, '')) || 0;
        var equipmentsValue = parseFloat($('#equipments').val().replace(/,/g, '')) || 0;
        var workingCapitalValue = parseFloat($('#working_capital').val().replace(/,/g, '')) || 0;
        var total = buildingsValue + equipmentsValue + workingCapitalValue;
        $('#to_Assets').text(total.toLocaleString());

        if (total === 0) {
          $('#Enterprise_Level').text('');
          return;
        }
        if (total < 3e6) {
          $('#Enterprise_Level').text('Micro Enterprise');
        } else if (total < 15e6) {
          $('#Enterprise_Level').text('Small Enterprise');
        } else if (total < 100e6) {
          $('#Enterprise_Level').text('Medium Enterprise');
        } else {
          $('#Enterprise_Level').text('Large Enterprise');
        }
      }

      $('#buildings, #equipments, #working_capital').on('input', updateEnterpriseLevel);
    });
  </script>
</body>

</html>