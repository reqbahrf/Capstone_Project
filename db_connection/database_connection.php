<?php
  $db_server = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "fund_monitoring_system_db";
  $conn = "";

  try {
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
  } catch (mysqli_sql_exception $e) {
    // echo "<script>alert('Cannot connect to the database');</script>";
  }

  if ($conn) {
    // echo "<script>alert('Connected');</script>";
    return $conn;
  }
?>