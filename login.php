<?php
session_start();
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <script src="/assets/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-end" >
      <div class="col-auto p-4 bg-light rounded-5" style="border: 1px solid #000;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" class="form-control" required maxlength="50"><br>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" class="form-control" required maxlength="50"><br>
          <input type="submit" name="login" value="Login" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
