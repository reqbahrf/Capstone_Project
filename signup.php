<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="./assets/dist-smartWizard/css/smart_wizard_all.min.css">
  <script src="./assets/dist-smartWizard/js/jquery.smartWizard.min.js"></script>
</head>

<style>
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
</style>

<body>
  <div class="d-flex justify-content-center vh-100 align-items-center">
    <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 800 800">
        <g fill-opacity="0.22">
          <circle style="fill: rgba(72, 196, 211, 0.5);" cx="400" cy="400" r="800"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.6);" cx="400" cy="400" r="700"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.7);" cx="400" cy="400" r="600"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.8);" cx="400" cy="400" r="500"></circle>
          <circle style="fill: rgba(72, 196, 211, 0.9);" cx="400" cy="400" r="400"></circle>
        </g>
      </svg>
    </div>
    <div class="card p-4 w-50 rounded-3 shadow">
      <div class="card-body">
        <div class="card-header pt-4 d-flex justify-content-center align-items-center">
          <a href="index.php">
            <span>
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="74.488px" height="75.079px" viewBox="0 0 74.488 75.079" enable-background="new 0 0 74.488 75.079" xml:space="preserve">
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
            </span>
          </a>
          <h3 class="px-4 mb-0">DOST-SETUP</h3>
        </div>
        <h4 class="header-title mb-3">Sign up</h4>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div id="smartwizard" class="sw sw-justified sw-theme-dots">
            <ul class="nav nav-progress">
              <li class="nav-item">
                <a class="nav-link default active" href="#step-1">
                  <div class="num">1</div>
                  Account
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link default" href="#step-2">
                  <span class="num">2</span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link default" href="#step-3">
                  <span class="num">3</span>
                  Review
                </a>
              </li>
            </ul>

            <div class="sw-toolbar-elm toolbar toolbar-top" role="toolbar"><button class="btn sw-btn-prev sw-btn" type="button">Previous</button><button class="btn sw-btn-next sw-btn" type="button">Next</button><button class="btn btn-success" onclick="onFinish()">Finish</button>
              <button class="btn btn-secondary" onclick="onCancel()">Cancel</button>
            </div>
            <div class="tab-content" style="height: 187.2px;">
              <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="position: static; left: 0px; display: block;">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <div class="w-50">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="userName1" name="userName1" value="hyper">
                        <label for="userName1">User name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" id="password1" name="password1" class="form-control" value="123456789">
                        <label for="password1">Password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" id="confirm1" name="confirm1" class="form-control" value="123456789">
                        <label for="confirm1">Re Password</label>
                      </div>
                    </div>
                  </div> <!-- end col -->
                </div> <!-- end row -->
              </div>
              <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2" style="display: none;">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <div class="w-50">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name1" name="name1" value="Francis">
                        <label for="name1">First name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" id="surname1" name="surname1" class="form-control" value="Brinkman">
                        <label for="surname1">Last name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="email" id="email1" name="email1" class="form-control" value="cory1979@hotmail.com">
                        <label for="email1">Email</label>
                      </div>
                    </div>
                  </div> <!-- end col -->
                </div> <!-- end row -->
              </div>
              <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3" style="display: none;">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <div class="w-50">
                      <div class="form-floating mb-3">
                        <input type="text" id="reviewName1" name="reviewName1" class="form-control" value="" readonly>
                        <label for="reviewName1">First name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" id="reviewSurname1" name="reviewSurname1" class="form-control" value="" readonly>
                        <label for="reviewSurname1">Last name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="email" id="reviewEmail1" name="reviewEmail1" class="form-control" value="" readonly>
                        <label for="reviewEmail1">Email</label>
                      </div>
                      <div class="mb-3">
                        <div class="form-check d-inline-block">
                          <input type="checkbox" class="form-check-input" id="customCheck3">
                          <label class="form-check-label" for="customCheck3">I agree with the Terms and Conditions</label>
                        </div>
                      </div>
                    </div>
                  </div> <!-- end col -->
                </div> <!-- end row -->
              </div>
            </div>

            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </form>

      </div> <!-- end card-body -->
    </div>

  </div>
  <div id="info-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h4 class="modal-title" id="info-header-modalLabel">Notice</h4>
        </div>
        <div class="modal-body">
          <p><strong>Before you process, please prepare the following files in pdf format.
            </strong>
          <ul>
            <li>Letter of Intent</li>
            <li>DTI/SEC/CDA</li>
            <li>Business Permit</li>
            <li>FDA/LTO: (Optional)</li>
            <li>Official Receipt of the Business</li>
            <li>Copy of Government Valid ID</li>
          </ul>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-bs-dismiss="modal">Proceed</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <script>
    $(document).ready(function() {
      $('#info-header-modal').modal('show');
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        transition: {
          animation: 'slideHorizontal'
        },
        toolbar: {
          showNextButton: true, // show/hide a Next button
          showPreviousButton: true, // show/hide a Previous button
          position: 'both buttom', // none/ top/ both bottom
          extraHtml: `<button class="btn btn-success" onclick="console.log('Button clicked'); window.location.href='application.php'; return false;">Submit</button>
                              <button class="btn btn-secondary" onclick="onCancel()">Cancel</button>`
        },
        // Dommy code for testing
        onLeaveStep: function(anchorObject, currentIndex, newIndex) {
          if (currentIndex === $('#smartwizard').find('ul li').length - 1) {
            return false; // Cancel form submission
          }
        },
      });
      $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
        var totalSteps = $('#smartwizard').find('ul li').length;
        // console.log("Step: ", stepNumber);
        console.log("Total Steps:", totalSteps);

        if (stepIndex === totalSteps - 1 && stepPosition === 'last') {
          console.log("Arriving at Last Step - Showing Buttons");
          $('.btn-success, .btn-secondary').show();
        } else {
          console.log("Not Arriving at Last Step - Hiding Buttons");
          $('.btn-success, .btn-secondary').hide();
        }
      });
    });
  </script>
</body>

</html>