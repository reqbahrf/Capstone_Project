<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
  <script src="../dist/apexcharts.min.js"></script>
  <link rel="stylesheet" href="/dist/apexcharts.css">

  <style>
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
  }
    .headerlogo {
      background-color: #48c4d3;
      color: white;
    }

    .scrollable-main {
      overflow-y: auto;
      overflow-x: hidden;
      width: 100%;
      height: 80vh;
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

    .logo {
      width: 30px;
      height: 30px;
      border-radius: 25%;
      border: 1px solid white;
      background-color: white;
      object-fit: cover;
      object-position: center;
    }

    @media (min-width: 768px) {
      .flex-container {
        flex-direction: row;
      }

      .nav-column {
        order: 1;
      }
    }
  </style>
</head>

<body class="overflow-hidden">
  <div class="container-fluid px-0 headerlogo">
    <div class="d-flex align-items-center bg-primary">
      <img src="../assets/img/74px-DOST_seal.svg.png" alt="DOST logo" class="me-3 ms-3 mt-3 mb-3 logo">
      <p>
      <H4 class="text-white">DOST-SETUP Funding Monitoring System</H4>
      </p>
    </div>
  </div>
  <div class="flex-container d-flex flex-column flex-md-row mobileView">
    <div class="nav-column">
      <?php include("navStaff.php"); ?>
    </div>
    <main class="main-column scrollable-main" id="main-content">

    </main>
  </div>
  <script>
    $(document).ready(function() {
      loadPage('staffDashboardTab.php', 'dashboardLink');
    });

    function loadPage(url, activeLink) {
      $.ajax({
        url: url,
        type: 'GET',
        success: function(response) {
          $('#main-content').html(response);
          setActiveLink(activeLink);
          if (url == 'staffDashboardTab.php') {
            InitdashboardChar();
          }
        },
        error: function(error) {
          console.log('Error: ' + error);
        },

      });
    }

    function InitdashboardChar() {
      var randomizeArray = function(arg) {
        var array = arg.slice();
        var currentIndex = array.length,
          temporaryValue, randomIndex;

        while (0 !== currentIndex) {

          randomIndex = Math.floor(Math.random() * currentIndex);
          currentIndex -= 1;

          temporaryValue = array[currentIndex];
          array[currentIndex] = array[randomIndex];
          array[randomIndex] = temporaryValue;
        }

        return array;
      }
      var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];
      var applicationChar = {
        chart: {
          id: 'Applicant',
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 1,
        },
        series: [{
          name: 'Applicants',
          data: randomizeArray(sparklineData)
        }],
        labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
        yaxis: {
          min: 0
        },
        xaxis: {
          type: 'datetime',
        },
        colors: ['#008FFB'],
        title: {
          text: '52',
          offsetX: 30,
          style: {
            fontSize: '24px',
            cssClass: 'apexcharts-yaxis-title'
          }
        },
        subtitle: {
          text: 'Applicants',
          offsetX: 30,
          style: {
            fontSize: '14px',
            cssClass: 'apexcharts-yaxis-title'
          }
        }
      }

      var OngoingChar = {
        chart: {
          id: 'Ongoing',
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 1,
        },
        series: [{
          name: 'Ongoing',
          data: randomizeArray(sparklineData)
        }],
        labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
        yaxis: {
          min: 0
        },
        xaxis: {
          type: 'datetime',
        },
        colors: ['#008FFB'],
        title: {
          text: '312',
          offsetX: 30,
          style: {
            fontSize: '24px',
            cssClass: 'apexcharts-yaxis-title'
          }
        },
        subtitle: {
          text: 'Ongoing',
          offsetX: 30,
          style: {
            fontSize: '14px',
            cssClass: 'apexcharts-yaxis-title'
          }
        }
      }

      var completedChar = {
        chart: {
          id: 'Completed',
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 1,
        },
        series: [{
          name: 'Completed',
          data: randomizeArray(sparklineData)
        }],
        labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
        xaxis: {
          type: 'datetime',
        },
        yaxis: {
          min: 0
        },
        colors: ['#008FFB'],
        //colors: ['#5564BE'],
        title: {
          text: '13',
          offsetX: 30,
          style: {
            fontSize: '24px',
            cssClass: 'apexcharts-yaxis-title'
          }
        },
        subtitle: {
          text: 'Completed',
          offsetX: 30,
          style: {
            fontSize: '14px',
            cssClass: 'apexcharts-yaxis-title'
          }
        }
      }
      new ApexCharts(document.querySelector("#Applicant"), applicationChar).render();
      new ApexCharts(document.querySelector("#Ongoing"), OngoingChar).render();
      new ApexCharts(document.querySelector("#Completed"), completedChar).render();
      // initialize datatable
      new DataTable("#handledProject");
    }
  </script>
</body>

</html>