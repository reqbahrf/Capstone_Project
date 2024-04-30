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
  <title>Document</title>

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
      <div class="col-md-6 col-lg-4 p-4 bg-light rounded-5 border border-3 border-border-primary-subtle">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group" onsubmit="return validateForm()">
          <h4 class="fw-bold">Login</h4>
          <div class="form-floating mb-3">
            <input type="text" name="username" id="username" class="form-control" maxlength="50" placeholder="Username" required>
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" maxlength="50" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <div class="d-flex justify-content-end mt-2">
            <div>
              <input type="checkbox" id="show-password" class="form-check-input">
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
    </div>
  </div>
</body>

</html>