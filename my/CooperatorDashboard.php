<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Dashboard</title>
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
      background-color: #fff;
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
  <div class="container-fluid px-0">
    <div class="d-flex align-items-center bg-primary">
      <img src="../assets/img/74px-DOST_seal.svg.png" alt="DOST logo" class="me-3 ms-3 mt-3 mb-3 logo">
      <p>
      <H4 class="text-white">DOST-SETUP Funding Monitoring System</H4>
      </p>
    </div>
  </div>
  <div class="flex-container d-flex flex-column flex-md-row mobileView">
    <div class="overflow-y-auto">
      <?php include("navCooperator.php"); ?>
    </div>
    <main class="main-column scrollable-main" id="main-content">
    </main>
  </div>
</body>
<script>
  $(document).ready(function() {
    loadPage('CooperatorInformationTab.php', 'InformationTab');
  });

  function loadPage(url, activeLink) {
    $.ajax({
      url: url,
      type: 'GET',
      success: function(response) {
        $('#main-content').html(response);
        setActiveLink(activeLink);
        if (url === 'CooperatorInformationTab.php') {
          initializeStackedChartPer();
          initializeProgressPer();
        }
      },
      error: function(error) {
        console.log('Error: ' + error);
      },
    });
  }

  function initializeStackedChartPer() {
    var options = {
      series: [{
        name: 'PRODUCT A',
        data: [500, 55, 41, 67, 22, 43, 21, 49]
      }, {
        name: 'PRODUCT B',
        data: [13, 23, 20, 8, 13, 27, 33, 12]
      }, {
        name: 'PRODUCT C',
        data: [11, 17, 15, 15, 21, 14, 15, 13]
      }],
      chart: {
        type: 'bar',
        height: 350,
        stacked: true,
        stackType: '100%'
      },
      responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 0
          }
        }
      }],
      xaxis: {
        categories: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2',
          '2012 Q3', '2012 Q4'
        ],
      },
      fill: {
        opacity: 1
      },
      legend: {
        position: 'right',
        offsetX: 0,
        offsetY: 50
      },
    };

    var chart = new ApexCharts(document.querySelector("#stackColumnChartPercent"), options);
    chart.render();
  }

  function initializeProgressPer() {
    var options = {
      series: [75],
      chart: {
        height: 250,
        width: 250,
        type: 'radialBar',
        toolbar: {
          show: true
        }
      },
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 225,
          hollow: {
            margin: 0,
            size: '70%',
            background: '#fff',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: '#fff',
            strokeWidth: '50%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
              opacity: 0.35
            }
          },

          dataLabels: {
            show: true,
            name: {
              offsetY: -10,
              show: true,
              color: '#888',
              fontSize: '17px'
            },
            value: {
              formatter: function(val) {
                return parseInt(val);
              },
              color: '#111',
              fontSize: '36px',
              show: true,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#ABE5A1'],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],
    };

    var chart = new ApexCharts(document.querySelector("#ProgressPer"), options);
    chart.render();
  }
</script>

</html>