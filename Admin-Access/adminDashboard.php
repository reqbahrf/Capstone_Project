<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin dashboard</title>
  <link rel="stylesheet" href="../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <script src="../assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
  <script src="../dist/apexcharts.min.js"></script>
  <link rel="stylesheet" href="/dist/apexcharts.css">


  <style>
    .headerlogo {
      background: rgb(2, 0, 36);
      background: linear-gradient(0deg, rgba(2, 0, 36, 1) 0%, rgba(72, 196, 211, 1) 96%, rgba(0, 212, 255, 1) 100%);
      color: white;
    }

    fieldset legend {
      position: absolute;
      top: -20px;
      color: #495057;
      border-radius: 0.25rem;
      padding: 0.5rem;
      font-size: 1rem;
      font-weight: bold;
      left: 10px;
    }

    fieldset {
      position: relative;
      padding: 2rem;
      border: 2px solid #dee2e6;
      border-radius: 0.25rem;
      background-color: #fff
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
      height: 85vh;
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
      margin-top: 0.5rem;
      margin-left: 1rem;
      margin-right: 1rem;
      width: 85%;
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
  <div class="container-fluid px-0 headerlogo">
    <div class="d-flex align-items-center">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 74.488 75.079" enable-background="new 0 0 74.488 75.079" xml:space="preserve" class="m-3 logo">
        <g>
          <rect x="19.235" y="19.699" width="36" height="36" />
          <circle fill="#48C4D3" cx="19.235" cy="19.699" r="18" />
          <g>
            <circle fill="#48C4D3" cx="19.195" cy="19.648" r="18" />
            <path fill="#FFFFFF" d="M19.323,37.598c9.918-0.027,17.953-8.071,17.953-17.997c0-9.925-8.034-17.972-17.952-17.998L19.323,37.598z" />
            <path d="M37.192,19.601C37.166,9.682,29.12,1.648,19.195,1.648S1.224,9.682,1.198,19.601H37.192z" />
          </g>
          <g>
            <circle fill="#48C4D3" cx="55.315" cy="19.651" r="18" />
            <path fill="#FFFFFF" d="M37.319,19.651c0.027,9.918,8.07,17.952,17.996,17.952c9.925,0,17.972-8.034,17.998-17.952L37.319,19.651z" />
            <path d="M55.315,37.648c9.919-0.027,17.953-8.072,17.953-17.997c0-9.925-8.034-17.972-17.952-17.998L55.315,37.648z" />
          </g>
          <g>
            <circle fill="#48C4D3" cx="55.315" cy="55.649" r="18" />
            <path fill="#FFFFFF" d="M55.269,37.605c-9.918,0.027-17.953,8.072-17.953,17.997s8.035,17.972,17.953,17.999V37.605z" />
            <path d="M37.317,55.649c0.028,9.919,8.073,17.952,17.999,17.952c9.923,0,17.97-8.033,17.997-17.952H37.317z" />
          </g>
          <g>
            <circle fill="#48C4D3" cx="19.315" cy="55.725" r="18" />
            <path fill="#FFFFFF" d="M37.313,55.628c-0.027-9.919-8.072-17.953-17.997-17.953c-9.926,0-17.972,8.034-17.999,17.952L37.313,55.628z" />
            <path d="M19.268,37.682C9.349,37.709,1.315,45.754,1.315,55.679S9.349,73.65,19.268,73.677V37.682z" />
          </g>
        </g>
      </svg>
      <p>
      <H4 class=" text-white">DOST-SETUP Funding Monitoring System</H4>
      </p>
    </div>
  </div>
  <div class="flex-container d-flex flex-column flex-md-row mobileView">
    <div class="nav-column">
      <?php include("navAdmin.php"); ?>
    </div>
    <main class="main-column scrollable-main" id="main-content">
    </main>
  </div>
</body>
<script>
  $(document).ready(function() {
    loadPage('/Admin-Access/adminDashboardTab.php', 'dashboardLink');
  });


  function loadPage(url, activeLink, callback) {
    $.ajax({
      url: url,
      type: 'GET',
      success: function(response) {
        $('#main-content').html(response);
        setActiveLink(activeLink);
        if (url === '/Admin-Access/adminDashboardTab.php') {
          InitdashboardChar()
          $(document).trigger('DocLoaded');
        }
        if (url == '/org-access/viewCooperatorInfo.php') {
          InitializeviewCooperatorProgress();
        }
      },
      error: function(error) {
        console.log('Error: ' + error);
      },
    });
  }

  //FIXME: Improve the logic of the following code
  let pieChartAppli, barChartAppli, pieChartOngoing, barChartOngoing, pieChartComple, barChartComple;
  $(document).on('DocLoaded', function() {
    $(document).off('shown.bs.modal');
    $(document).on('shown.bs.modal', '#applicantModal', function() {
      setTimeout(function() {
        console.log('Initializing charts for applicantModal');

        pieChartAppli = initializePieChart('pieChartApp');
        barChartAppli = initializeBarChart('barChartApp');
        console.log(pieChartAppli, barChartAppli)

        $('#closeApplicant').off('click').click(function() {
          if (pieChartAppli) pieChartAppli?.destroy();
          if (barChartAppli) barChartAppli?.destroy();
        });

      }, 500);
    });

    $(document).on('shown.bs.modal', '#ongoingModal', function() {
      setTimeout(function() {
        console.log('Initializing charts for ongoingModal');

        pieChartOngoing = initializePieChart('pieChartOngo');
        barChartOngoing = initializeBarChart('barChartOngo');

        $('#closeOngoing').off('click').click(function() {
          if (pieChartOngoing) pieChartOngoing?.destroy();
          if (barChartOngoing) barChartOngoing?.destroy();
        });
      }, 500);
    });

    $(document).on('shown.bs.modal', '#completedModal', function() {
      setTimeout(function() {
        console.log('Initializing charts for completedModal');

        pieChartComple = initializePieChart('pieChartComp');
        barChartComple = initializeBarChart('barChartComp');

        $('#closeComple').off('click').click(function() {
          if (pieChartComple) pieChartComple?.destroy();
          if (barChartComple) barChartComple?.destroy();
        });
      }, 500);
    });
  });


  // Optionally reinitialize the charts or perform other cleanup

  //TODO: Charts for Applicant, Ongoing and Completed Projects

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
      colors: ['#48C4D3'],
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
      colors: ['#48C4D3'],
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
      colors: ['#48C4D3'],
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
    // staff handled projects chart
    var handledBusiness = {
      series: [{
        data: [21, 22, 10, 28, 16, 21, 13, 30]
      }],
      chart: {
        height: 350,
        type: 'bar',
        events: {
          click: function(chart, w, e) {
            // console.log(chart, w, e)
          }
        }
      },
      colors: ['#48C4D3'],
      plotOptions: {
        bar: {
          columnWidth: '45%',
          distributed: true,
        }
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        show: false
      },
      xaxis: {
        categories: [
          'Staff1',
          'Staff2',
          'Staff3',
          'Staff4',
          'Staff5',
          'Staff6',
          'Staff7',
          'LStaff8',
        ],
        labels: {
          style: {
            colors: ['#111111'],
            fontSize: '12px'
          }
        }
      }
    };

    new ApexCharts(document.querySelector("#staffHandledB"), handledBusiness).render();
  }

  function initializePieChart(chartID) {
    var options = {
      series: [42, 55, 13],
      chart: {
        width: 380,
        type: 'pie',
      },
      labels: ['Micro Enterprise', 'Small Enterprise', 'Medium Enterprise'],
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200
          },
          legend: {
            position: 'bottom'
          }
        }
      }]
    };

    var pieChart = new ApexCharts(document.querySelector("#" + chartID), options);
    pieChart.render();
    return pieChart;
  }

  function initializeBarChart(chartID) {
    var options = {
      series: [{
        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
      }],
      chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          borderRadius: 4,
          borderRadiusApplication: 'end',
          horizontal: true,
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: ['Tagum City', 'Panabo City', 'Island Garden City of Samal', 'Braulio E. Dujali', 'Carmen', 'Kapalong', 'New Corella', 'San Isidro', 'Santo Tomas', 'Talaingod'],
      }
    };

    var barChart = new ApexCharts(document.querySelector("#" + chartID), options);
    barChart.render();
    return barChart;
  }

  function InitializeviewCooperatorProgress() {
    var options = {
      series: [75],
      chart: {
        height: 250,
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
            strokeWidth: '67%',
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

    var chart = new ApexCharts(document.querySelector("#progressBar"), options);
    chart.render();

    //TODO: Production Generated Chart
    var options = {
      series: [{
        name: 'Growth',
        data: [10, 15, 7, -12]
      }],
      chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          colors: {
            ranges: [{
              from: -100,
              to: -46,
              color: '#F15B46'
            }, {
              from: -45,
              to: 0,
              color: '#FEB019'
            }]
          },
          columnWidth: '80%',
        }
      },
      dataLabels: {
        enabled: false,
      },
      yaxis: {
        title: {
          text: 'Growth',
        },
        labels: {
          formatter: function(y) {
            return y.toFixed(0) + "%";
          }
        }
      },
      xaxis: {
        categories: [
          'Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'
        ],
        labels: {
          rotate: -90
        }
      }
    };

    var chart = new ApexCharts(document.querySelector("#productionGeneChart"), options);
    chart.render();

    //TODO: Employment Generated Chart

    var options = {
      series: [{
        name: 'Growth',
        data: [2, -2, 4, 5]
      }],
      chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          colors: {
            ranges: [{
              from: -100,
              to: -46,
              color: '#F15B46'
            }, {
              from: -45,
              to: 0,
              color: '#FEB019'
            }]
          },
          columnWidth: '80%',
        }
      },
      dataLabels: {
        enabled: false,
      },
      yaxis: {
        title: {
          text: 'Growth',
        },
        labels: {
          formatter: function(y) {
            return y.toFixed(0) + "%";
          }
        }
      },
      xaxis: {
        categories: [
          'Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'
        ],
        labels: {
          rotate: -90
        }
      }
    };

    var chart = new ApexCharts(document.querySelector("#employmentGeneChart"), options);
    chart.render();

  }
</script>

</html>