<?php session_start();

$_SESSION["user"] = array("type" => "waiting");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Dashboard</title>
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="../assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
  <script src="../dist/apexcharts.min.js"></script>
  <link rel="stylesheet" href="/dist/apexcharts.css">
  <link rel="stylesheet" href="../assets/dist-smartWizard/css/smart_wizard_all.css">
  <script src="../assets/dist-smartWizard/js/jquery.smartWizard.min.js"></script>
  <style>
    .headerlogo {
      background: #318791;
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

    
    .logo {
      width: 50px;
      height: 50px;
      border-radius: 25%;
      border: 0.5px solid white;
      background-color: white;
      object-fit: cover;
      object-position: center;
    }

    .scrollable-main {
      overflow-y: auto;
      overflow-x: hidden;
      width: 100%;
      height: 90vh;
    }

    .flex-container {
      display: flex;
      background-color: #EEEEEE;
    }

    .nav-column {
      width: auto;
      order: 2;
    }


    @media (min-width: 768px) {
      .flex-container {
        flex-direction: row;
      }

      .nav-column {
        order: 1;
      }

      .main-column {
        flex-grow: 1;
        margin-top: 0.5rem;
        margin-left: 1rem;
        margin-right: 1rem;
        width: 85%;
        order: 1;
      }

      fieldset legend {
      position: absolute;
      /* Set position to absolute */
      top: -20px;
      /* Adjust this value to move legend up */
      background-color: #fff;
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
      background-color: #fff;
    }



    }

    @media (max-width: 768px) {
      .main-column {
        padding: 0.5rem 0rem;
        width: 100% !important;
      }
      fieldset legend {
        position: absolute;
        top: -20px;
        background-color: #fff;
        color: #495057;
        border-radius: 0.25rem;
        padding: 0.5rem;
        font-size: 1rem;
        font-weight: bold;
        left: 10px;
      }
      fieldset {
        position: relative;
        padding: 0.5rem;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        background-color: #fff;
      }
    }
  </style>
</head>

<?php
if(isset($_SESSION['user'])) {
  // Check the user type and include the appropriate file
  if($_SESSION['user']['type'] == 'approved') {
      include("approved.php");
  } else if($_SESSION['user']['type'] == 'waiting') {
      include("waitingRoom.php");
  }
}
?>
</html>