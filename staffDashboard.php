<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    .scrollable-main {
      overflow-y: auto;
      width: 100%;
    }
    .flex-container {
       display: flex;
       background-color: #EEEEEE;
    }
    .nav-column {
      width: auto;
      order: 2;
   }
    .main-column {
      flex-grow: 1;
      margin-top: 3rem;
      margin-left: 2rem;
      margin-right: 2rem;
      width: 80%;
      order: 1;
  }

  @media (min-width: 768px) {
  .flex-container {
    flex-direction: row;
  }
  .nav-column {
    order: 1;
  }

  .main-column {
    order: 2;
    width: auto;
  }

  
}
  </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="overflow-hidden">
  <div class="container-fluid px-0">
      <div class="d-flex align-items-center bg-primary">
        <img src="./assets/img/74px-DOST_seal.svg.png" alt="DOST logo" class="me-3 ms-3 mt-3 mb-3" style="width: 30px; height: 30px; border-radius: 25%; border: 1px solid white; background-color: white; object-fit: cover; object-position: center;">
        <p><H4 class="text-white">DOST-SETUP Funding Monitoring System</H4></p>
      </div>
  </div>
  <div class="flex-container d-flex flex-column flex-md-row mobileView">
    <div class="nav-column">
      <?php include("navStaff.php"); ?>
    </div>
    <main class="main-column scrollable-main">
      <?php include("staffPageDashboard.php"); ?>
    </main>
  </div>
</body>
</html>