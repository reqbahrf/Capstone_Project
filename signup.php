<?php
session_start();

$conn = include_once 'db_connection/database_connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST["userName1"]);
  $password = htmlspecialchars($_POST["password1"]);

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password before storing it

  $stmt = $conn->prepare("INSERT INTO cooperator_users (user_name, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $hashedPassword);

  if ($stmt->execute()) {
    // Start the session if it's not already started
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    // Store the ID in the session
    $_SESSION['user_id'] = $conn->insert_id;

    echo "New record created successfully";
  } else {
    echo "Error: " . $stmt->error;
  }
  $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="icon" href="./assets/svg/DOST_ICON.svg" type="image/svg+xml">
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
  <script src="./assets/jquery-3.7.1/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="./assets/dist-smartWizard/css/smart_wizard_all.min.css">
  <script src="./assets/dist-smartWizard/js/jquery.smartWizard.min.js"></script>
</head>



<style>
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

<body>
  <div class="d-flex justify-content-center vh-100 align-items-center">
    <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 800 800">
        <g fill-opacity="0.22">
          <circle style="fill: rgba(72, 196, 211, 0.5);" cx="400" cy="400" r="800"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.6);" cx="400" cy="400" r="700"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.7);" cx="400" cy="400" r="600"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.8);" cx="400" cy="400" r="500"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.9);" cx="400" cy="400" r="400"></circle>
        </g>
      </svg>
    </div>
    <div class="card p-4 p-sm-0 p-md-2 rounded-5 shadow">
      <div class="card-body">
        <div class="card-header w-100 px-5 d-flex justify-content-center align-items-center">
          <a href="index.php">
            <span>
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="74.488px" height="75.079px" viewBox="0 0 74.488 75.079" enable-background="new 0 0 74.488 75.079" xml:space="preserve">
                <g>
                  <rect x="19.235" y="19.699" width="36" height="36" />
                  <circle fill="#48C4D3" cx="19.235" cy="19.699" r="18" />
                  <g>
                    <circle fill="#48C4D3" cx="19.195" cy="19.648" r="18" />
                    <path fill="#FFFFFF" d="M19.323,37.598c9.918-0.027,17.953-8.071,17.953-17.997c0-9.925-8.034-17.972-17.952-17.998L19.323,37.598z" />
                    <path d="M37.192,19.601C37.166,9.682,29.12,1.648,19.195,1.648S1.224,9.682,1.198,19.601H37.192z" />
                  </g>
                  <g>
                    <circle fill="#48C4D3" cx="55.315" cy="19.651" r="18" />
                    <path fill="#FFFFFF" d="M37.319,19.651c0.027,9.918,8.07,17.952,17.996,17.952c9.925,0,17.972-8.034,17.998-17.952L37.319,19.651z" />
                    <path d="M55.315,37.648c9.919-0.027,17.953-8.072,17.953-17.997c0-9.925-8.034-17.972-17.952-17.998L55.315,37.648z" />
                  </g>
                  <g>
                    <circle fill="#48C4D3" cx="55.315" cy="55.649" r="18" />
                    <path fill="#FFFFFF" d="M55.269,37.605c-9.918,0.027-17.953,8.072-17.953,17.997s8.035,17.972,17.953,17.999V37.605z" />
                    <path d="M37.317,55.649c0.028,9.919,8.073,17.952,17.999,17.952c9.923,0,17.97-8.033,17.997-17.952H37.317z" />
                  </g>
                  <g>
                    <circle fill="#48C4D3" cx="19.315" cy="55.725" r="18" />
                    <path fill="#FFFFFF" d="M37.313,55.628c-0.027-9.919-8.072-17.953-17.997-17.953c-9.926,0-17.972,8.034-17.999,17.952L37.313,55.628z" />
                    <path d="M19.268,37.682C9.349,37.709,1.315,45.754,1.315,55.679S9.349,73.65,19.268,73.677V37.682z" />
                  </g>
                </g>
              </svg>
            </span>
          </a>
          <h3 class="px-4 mb-0 mx-auto">DOST-SETUP-SYS</h3>
        </div>
        <h4 class="header-title my-3 text-center">Sign up</h4>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="g-3">
          <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3 p-1 p-sm-0 p-md-2 p-lg-2 ">
              <div class="w-75">
                <div class="col-12 p-md-3 p-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="userName1" name="userName1" placeholder="Username">
                    <label for="userName1">User name</label>
                    <div class="invalid-feedback">
                      Please enter a username.
                    </div>
                  </div>
                </div>
                <div class="col-12 p-md-3 p-2">
                  <div class="form-floating">
                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                    <label for="password1">Password</label>
                    <div class="invalid-feedback">
                      Please enter a password.
                    </div>
                  </div>
                </div>
                <div class="col-12 p-md-3 p-2">
                  <div class="form-floating">
                    <input type="password" id="confirm1" name="confirm1" class="form-control" placeholder="Confirm Password">
                    <label for="confirm1">Re Password</label>
                    <div id="Invalid-feedbackPass" class="invalid-feedback" style="display: none;">Passwords do not match.</div>
                  </div>
                </div>
                <div class="col-12 p-md-3 p-2">
                  <button type="submit" class="btn btn-primary w-100">Sign-up</button>
                </div>
                <div class="text-center">
                  <a href="index.php" class="text-decoration-none text-reset text-primary">home</a>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div> <!-- end card-body -->
  <div id="requirements-modal" class="modal fade" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h4 class="modal-title" id="info-header-modalLabel">Notice</h4>
        </div>
        <div class="modal-body">
          <p><strong>Before you process, please prepare the following files in pdf format.
            </strong>
          <ul>
            <li>Letter of Intent</li>
            <li>DTI/SEC/CDA</li>
            <li>Business Permit</li>
            <li>FDA/LTO: (Optional)</li>
            <li>Official Receipt of the Business</li>
            <li>Copy of Government Valid ID</li>
          </ul>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Proceed</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <script>
    $(document).ready(function() {
      $('#requirements-modal').modal('show');
      $('form').on('submit', function(e) {

        e.preventDefault(); // prevent the form from being submitted

        var isValid = true;

        $('input').each(function() {
          if ($(this).val() === '') {
            isValid = false;
            $(this).addClass('is-invalid'); // add 'is-invalid' class to show validation feedback
          } else {
            $(this).removeClass('is-invalid'); // remove 'is-invalid' class if the field is valid
          }
        });

        var password = $('#password1').val();
        var confirmPassword = $('#confirm1').val();

        if (confirmPassword === '') {
          // Handle empty confirm password field
          $('#confirm1').addClass('is-invalid'); // add 'is-invalid' class to confirm password field
          $('#Invalid-feedbackPass').text('Please enter a password'); // update error message
          $('#Invalid-feedbackPass').show(); // show error message
          isValid = false;
        } else if (password !== confirmPassword) {
          $('#confirm1').addClass('is-invalid'); // add 'is-invalid' class to confirm password field
          $('#Invalid-feedbackPass').text('Passwords do not match'); // update error message
          $('#Invalid-feedbackPass').show(); // show error message
          isValid = false;
        } else {
          $('#confirm1').removeClass('is-invalid'); // remove 'is-invalid' class if passwords match
          $('#Invalid-feedbackPass').hide(); // hide error message if passwords match
        }



        if (isValid) {
          // form is valid
          // submit the form via AJAX
          $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function() {
              // if the form is successfully submitted, redirect to application.php
              window.location.href = 'application.php';
            }
          });
        }
      });
    });
  </script>
</body>

</html>