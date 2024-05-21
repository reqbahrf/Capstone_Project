<?php
  $db_server = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "fund_monitoring_system_db";
  $conn = "";

  try {
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
  } catch (mysqli_sql_exception $e) {
    echo "cannot Connect to the database";
  }

  if ($conn) {
    echo "connected";
  }
?>