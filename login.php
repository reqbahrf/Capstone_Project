<?php
session_start();
//include("database.php");

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login_username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $login_password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "SELECT * FROM user WHERE username = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $login_username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashed_pass = $row['password'];
    $verify = password_verify($login_password, $hashed_pass);

    if ($verify) {
      $_SESSION['username'] = $login_username;
      echo "access granted";
    } else {
      // Log error instead of directly outputting error message
      error_log("Invalid password for username: " . $login_username);
      echo "Invalid username or password";
    }
  } else {
    // Log error instead of directly outputting error message
    error_log("User not found: " . $login_username);
    echo "Invalid username or password";
  }
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script>
    $(document).ready(function() {
      $('#datepicker').datepicker();
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
    .ui-datepicker {
      background-color: #fff;
      border: 1px solid #ced4da;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      border-radius: 20px;
    }

    .ui-datepicker-header {
      background-color: #f8f9fa;
      color: #495057;
      border-bottom: 1px solid #e9ecef;
    }

    .ui-datepicker-prev,
    .ui-datepicker-next {
      cursor: pointer;
    }

    .ui-state-default {
      border-radius: 100%;
      background-color: transparent;
      color: #495057;

    }

    .ui-state-hover {
      background-color: #e9ecef;
    }

    .ui-state-active {
      background-color: #007bff;
      color: #fff;
    }

    .cardSize {
      max-width: 200px;
      max-height: 200px;
    }

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
  <div class="container mt-4 mb-5">
    <div class="row justify-content-center mt-3">
      <div class="col-md-6 col-lg-4 p-4 ">
        <div class="row justify-content-center">
          <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 800 800">
              <g fill-opacity="0.22">
                <circle style="fill: rgba(72, 196, 211, 0.5);" cx="400" cy="400" r="600"></circle>
                <circle style="fill: rgba(72, 196, 211, 0.6);" cx="400" cy="400" r="500"></circle>
                <circle style="fill: rgba(72, 196, 211, 0.7);" cx="400" cy="400" r="300"></circle>
                <circle style="fill: rgba(72, 196, 211, 0.8);" cx="400" cy="400" r="200"></circle>
                <circle style="fill: rgba(72, 196, 211, 0.9);" cx="400" cy="400" r="100"></circle>
              </g>
            </svg>
          </div>
          <div class="bg-white p-4 z-3 rounded-5 shadow">
            <div class="card-header pt-4 d-flex justify-content-center align-items-center">
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
              <h3 class="px-4 mb-0">DOST-SETUP</h3>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group" onsubmit="return validateForm()">
              <h4 class="fw-bold text-center py-4">Login</h4>
              <div class="form-floating mb-3">
                <input type="text" name="username" id="username" class="form-control" maxlength="50" placeholder="Username" required>
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" id="password" class="form-control" maxlength="50" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <div class="d-flex justify-content-end">
                <div>
                  <input type="checkbox" id="show-password" class="form-check-input mb-3">
                  <label for="show-password" class="form-check-label">Show Password</label><br>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input type="text" id="datepicker" name="date" class="form-control" placeholder="Select Date">
                <label for="datepicker">Select Date</label>
              </div>
              <div class="d-flex justify-content-center mt-3">
                <input type="submit" name="login" value="Login" class="btn btn-primary w-100">
              </div>

            </form>
          </div>
          <div class="row mt-3 z-3">
            <div class="col-12 text-center">
              <p class="">Don't have an account? <a href="signup.php" class="ms-1"><b>Sign Up</b></a></p>
            </div> <!-- end col -->
          </div>

        </div>
      </div>
    </div>
    <!-- Other content here -->

    <footer class="footer footer-alt text-center fixed-bottom">
      2018 - <script>
        document.write(new Date().getFullYear())
      </script>2024 © Hyper - Coderthemes.com
    </footer>
</body>

</html>