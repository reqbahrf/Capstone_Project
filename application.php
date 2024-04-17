<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <?php include("header.php"); ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3 mt-5 ms-5 me-5 mb-2 p-5 border border-black rounded">
    <H4>Personal Info:</H4>
    <div class="col-md-4">
      <label for="f_name" class="form-label">First Name:</label>
      <input type="text" name="f_name" id="f_name" class="form-control" placeholder="John" required>
    </div>
    <div class="col-md-4">
      <label for="l_name" class="form-label">Last Name:</label>
      <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Doe" required>
    </div>
    <div class="col-md-4">
      <label for="Mobile_no" class="form-label">Mobile Number:</label>
      <input type="text" name="Mobile_no" id="Mobile_no" placeholder="0965-453-5432" class="form-control" pattern="\d{4}-\d{3}-\d{4}" title="Please enter a valid landline number in the format XXXX-XXX-XXXX" required><br>
    </div>
    <div class="col-md-4">
      <label for="email_add" class="form-label">Email Address:</label>
      <input type="email" name="email_add" id="email_add" class="form-control" placeholder="example@example.com" required><br>
    </div>
    <div class="col-md-4">
      <label for="landline" class="form-label">Landline:</label>
      <input type="text" name="landline" id="landline" class="form-control" placeholder="(XX) YYY ZZZZ"><br>
    </div>
    <H4>Business Info:</H4>
    <div class="col-md-4">
      <label for="firm_name" class="form-label">Name of firm:</label>
      <input type="text" name="firm_name" id="firm_name" class="form-control" placeholder="ABC Company" required><br>
    </div>
    <div class="col-md-4">
      <label for="Address" class="form-label">Address:</label>
      <input type="text" name="Address" id="Address" class="form-control" placeholder="123 Main St" required><br>
    </div>
    <h5>Select the asset category:</h5>
    <div class="col-md-4 justify-content-start">
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
    <div class="col-md-12">
      <div class="form-check">
        <input type="checkbox" name="agree_terms" id="agree_terms" class="form-check-input" required>
        <label for="agree_terms" class="form-check-label">Agree to Terms and Conditions</label>
      </div>
    </div>
    <div class="col-12 d-flex justify-content-end">
      <button type="submit" name="submit" class= "btn btn-primary">Submit</button>
      <div class="mx-2"></div>
      <button type="button" class="btn btn-danger" onclick="clearFields()">Clear</button>
    </div>
  </form>
  <?php include("footer.php"); ?>
</body>
</html>
<script>
      function clearFields() {
        document.getElementById("f_name").value = "";
        document.getElementById("l_name").value = "";
        document.getElementById("Mobile_no").value = "";
        document.getElementById("email_add").value = "";
        document.getElementById("landline").value = "";
        document.getElementById("firm_name").value = "";
        document.getElementById("Address").value = "";
        document.querySelector('input[name="asset_category"]:checked').checked = false;
      }
      document.querySelector('form').addEventListener('submit', function(event) {
    // Prevent the form from submitting immediately
       event.preventDefault();

    // Check if all required fields are filled out and input matches required patterns
          var firstName = document.getElementById("f_name").value;
          var lastName = document.getElementById("l_name").value;
          var mobileNumber = document.getElementById("Mobile_no").value;
          var emailAddress = document.getElementById("email_add").value;
          var landline = document.getElementById("landline").value;
          var firmName = document.getElementById("firm_name").value;
          var address = document.getElementById("Address").value;
          var assetCategory = document.querySelector('input[name="asset_category"]:checked').value;

    // Add your validation logic here. For example:
          if (!firstName || !lastName || !mobileNumber || !emailAddress || !landline || !firmName || !address || !assetCategory) {
              alert('Please fill out all required fields.');
              return;
          }

    // If everything is valid, show the confirmation dialog
    showConfirmation();
});

       function showConfirmation() {
         var firstName = document.getElementById("f_name").value;
         var lastName = document.getElementById("l_name").value;
         var mobileNumber = document.getElementById("Mobile_no").value;
         var emailAddress = document.getElementById("email_add").value;
         var landline = document.getElementById("landline").value;
         var firmName = document.getElementById("firm_name").value;
         var address = document.getElementById("Address").value;
         var assetCategory = document.querySelector('input[name="asset_category"]:checked').value;

         var confirmationMessage = "Confirmation:\n\n";
         confirmationMessage += "First Name: " + firstName + "\n";
         confirmationMessage += "Last Name: " + lastName + "\n";
         confirmationMessage += "Mobile Number: " + mobileNumber + "\n";
         confirmationMessage += "Email Address: " + emailAddress + "\n";
         confirmationMessage += "Landline: " + landline + "\n";
         confirmationMessage += "Firm Name: " + firmName + "\n";
         confirmationMessage += "Address: " + address + "\n";
         confirmationMessage += "Asset Category: " + assetCategory + "\n";

         var userClickedOk = confirm(confirmationMessage);

         if (userClickedOk) {
          // User clicked OK, submit the form
           $.ajax({
             type: 'POST',
             url: window.location.href,
             data: $('form').serialize(),
             success: function() {
                 alert('Form successfully submitted!');
             }
         });
         } else {
            // User clicked Cancel, do nothing
            return false;
         }
 } </script>


