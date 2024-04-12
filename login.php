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

      // Additional custom validation checks

      return true;
    }
  </script>
</head>
<body>
  <?php include("header.php"); ?>
  <div class="container mt-4 mb-5">
    <div class="row justify-content-center mt-3" >
      <div class="col-4 p-4 bg-light rounded-5 border border-3 border-border-primary-subtle">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group" onsubmit="return validateForm()">
          <h4 class="fw-bold">Login </h4>
          <input type="text" name="username" id="username" class="form-control" maxlength="50" placeholder="Username" required><br>
          <input type="password" name="password" id="password" class="form-control" maxlength="50" placeholder="Password" required>
          <div class="d-flex justify-content-end mt-2">
            <div>
              <input type="checkbox" id="show-password">
              <label for="show-password">Show Password</label><br>
            </div>
          </div>
          <div class="d-flex justify-content-center mt-3">
             <input type="submit" name="login" value="Login" class="btn btn-primary w-100">
          </div>
        </form>
      </div>
    </div>
  </div>
 <?php include("footer.php"); ?>
</body>
</html>
