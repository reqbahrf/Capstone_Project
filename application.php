<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3 m-5 p-5">
    <H4>Personal Info:</H4>
    <div class="col-md-4">
      <label for="f_name" class="form-label">First Name:</label>
      <input type="text" name="f_name" id="f_name" class="form-control" required>
    </div>
    <div class="col-md-4">
      <label for="l_name" class="form-label">Last Name:</label>
      <input type="text" name="l_name" id="l_name" class="form-control" required>
    </div>
    <div class="col-md-4">
      <label for="Mobile_no" class="form-label">Mobile Number:</label>
      <input type="text" name="Mobile_no" id="Mobile_no" class="form-control" required><br>
    </div>
    <div class="col-md-4">
      <label for="email_add"  class="form-label">Email Address:</label>
      <input type="email" name="email_add" id="email_add" class="form-control" required><br>
    </div>
    <div class="col-md-4">
      <label for="landline"  class="form-label">Landline:</label>
      <input type="text" name="landline" id="landline" class="form-control" required><br>
    </div>
    <H4>Business Info:</H4>
    <div class="col-md-4">
      <label for="firm_name"  class="form-label">Name of firm:</label>
      <input type="text" name="firm_name" id="firm_name" class="form-control" required><br>
    </div>
    <div class="col-md-4">
      <label for="Address"  class="form-label">Address:</label>
      <input type="text" name="Address" id="Address" class="form-control" required><br>
    </div>
    <p>Select the asset category:</p>
    <div class="col-md-4">
      <input type="radio" id="micro" name="asset_category" value="Micro" class="form-check-input">
      <label for="micro" class="form-check-label">Micro (assets less than 3M)</label>
    </div>
    <div class="col-md-4">
      <input type="radio" id="small" name="asset_category" value="Small"  class="form-check-input">
      <label for="small" class="form-check-label">Small (assets of 3M to 15M)</label><br>
    </div>
    <div class="col-md-4">
      <input type="radio" id="medium" name="asset_category" value="Medium"  class="form-check-input">
      <label for="medium" class="form-check-label">Medium (assets of 15M to 100M)</label><br>
    </div>
<div class="col-12">
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>

  </form>

  <script>
    function validateForm() {
      var firstName = document.getElementById("f_name").value;
      var lastName = document.getElementById("l_name").value;
      var mobileNumber = document.getElementById("Mobile_no").value;
      var emailAddress = document.getElementById("email_add").value;
      var landline = document.getElementById("landline").value;
      var firmName = document.getElementById("firm_name").value;
      var address = document.getElementById("Address").value;
      var assetCategory = document.querySelector('input[name="asset_category"]:checked');

      if (firstName === "") {
        alert("First name is required");
        return false;
      }

      if (lastName === "") {
        alert("Last name is required");
        return false;
      }

      if (mobileNumber === "") {
        alert("Mobile number is required");
        return false;
      }

      if (emailAddress === "") {
        alert("Email address is required");
        return false;
      }

      if (landline === "") {
        alert("Landline is required");
        return false;
      }

      if (firmName === "") {
        alert("Firm name is required");
        return false;
      }

      if (address === "") {
        alert("Address is required");
        return false;
      }

      if (!assetCategory) {
        alert("Asset category is required");
        return false;
      }

      return true;
    }
  </script>
</body>
</html>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate first name
    $f_name = $_POST["f_name"];
    if (empty($f_name)) {
      echo "First name is required";
      exit;
    }

    // Validate last name
    $l_name = $_POST["l_name"];
    if (empty($l_name)) {
      echo "Last name is required";
      exit;
    }

    // Validate mobile number
    $mobile_no = $_POST["Mobile_no"];
    if (empty($mobile_no)) {
      echo "Mobile number is required";
      exit;
    }

    // Validate email address
    $email_add = $_POST["email_add"];
    if (empty($email_add)) {
      echo "Email address is required";
      exit;
    }

    // Validate landline
    $landline = $_POST["landline"];
    if (empty($landline)) {
      echo "Landline is required";
      exit;
    }

    // Validate firm name
    $firm_name = $_POST["firm_name"];
    if (empty($firm_name)) {
      echo "Firm name is required";
      exit;
    }

    // Validate address
    $address = $_POST["Address"];
    if (empty($address)) {
      echo "Address is required";
      exit;
    }

    // Validate asset category
    $asset_category = $_POST["asset_category"];
    if (empty($asset_category)) {
      echo "Asset category is required";
      exit;
    }

    // All inputs are valid, continue with further processing
    // ...
  }
  ?>