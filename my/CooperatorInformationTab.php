<?php
// Your PHP code here

// Retrieve client information from database or any other source
$clientName = "John Doe";
$address = "123 Main St, City";
$landline = "123-456-7890";
$email = "john.doe@example.com";
$projectTitle = "Project X";
$projectDescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$projectCost = "$10,000";

// Retrieve payment information from database or any other source
$duePayments = [
  ["dueDate" => "2022-09-30", "amountDue" => "$2,000"],
  ["dueDate" => "2022-10-31", "amountDue" => "$3,000"],
  // Add more payment entries as needed
];

$paymentHistory = [
  ["date" => "2022-08-31", "amount" => "$1,500"],
  ["date" => "2022-07-31", "amount" => "$2,000"],
  // Add more payment history entries as needed
];
?>
<style>
  /* Add your CSS styles here */
  /* Example styles for responsive design */
  @media only screen and (max-width: 600px) {
    /* Styles for mobile devices */
  }

  @media only screen and (min-width: 601px) {
    /* Styles for larger devices */
  }
</style>
</head>
<div class="container-fluid p-0 m-0">
  <div class=" bg-dark text-white p-2">
    <h1>Client Information Sheet</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Client Details</h2>
      <p>Name: <?php echo $clientName; ?></p>
      <p>Address: <?php echo $address; ?></p>
      <p>Landline: <?php echo $landline; ?></p>
      <p>Email: <?php echo $email; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Project Details</h2>
      <p>Title: <?php echo $projectTitle; ?></p>
      <p>Description: <?php echo $projectDescription; ?></p>
      <p>Cost: <?php echo $projectCost; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Payment Information</h2>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Due Date</th>
            <th>Amount Due</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($duePayments as $payment) : ?>
            <tr>
              <td><?php echo $payment['dueDate']; ?></td>
              <td><?php echo $payment['amountDue']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Payment History</h2>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Date</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($paymentHistory as $payment) : ?>
            <tr>
              <td><?php echo $payment['date']; ?></td>
              <td><?php echo $payment['amount']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</html>