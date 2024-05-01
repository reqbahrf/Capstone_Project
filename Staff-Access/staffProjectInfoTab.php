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

  .nav-link {
    background-color: black;
    color: white;
    /* Change the text color to white for better contrast */
  }

  .nav-link.active {
    background-color: white;
    color: black;
    /* Change the text color to black for better contrast */
  }

  .checkbox-wrapper-26 {
    /* Temporary, for debugging */


    position: relative;
    /* Ensure this is set to contain absolutely positioned children */
    padding-bottom: 40px;
  }

  .checkbox-wrapper-26 span {
    margin-left: 10px;
    /* Adjust the spacing to your preference */
  }

  .checkbox-wrapper-26 * {
    -webkit-tap-highlight-color: transparent;
    outline: none;
  }

  .checkbox-wrapper-26 input[type="checkbox"] {
    display: none;
  }

  .checkbox-wrapper-26 input[type="checkbox"]:disabled+label {
    background-color: #e0e0e0;
    /* Light grey background */
    box-shadow: 0 var(--shadow) #ccc;
    /* Lighter shadow */
  }

  .checkbox-wrapper-26 input[type="checkbox"]:disabled+label:before {
    background-color: #f9f9f9;
    /* Very light grey for the inner circle */
  }

  .checkbox-wrapper-26 input[type="checkbox"]:disabled+label .tick_mark:before,
  .checkbox-wrapper-26 input[type="checkbox"]:disabled+label .tick_mark:after {
    background-color: #ccc;
    /* Light grey tick marks */
    box-shadow: none;
    /* No shadow for tick marks */
  }

  .checkbox-wrapper-26 label {
    --size: 30px;
    --shadow: calc(var(--size) * .07) calc(var(--size) * .1);

    position: relative;
    display: block;
    width: var(--size);
    height: var(--size);
    margin: 0;
    /* Changed from 'margin: 0 auto;' to 'margin: 0;' */
    background-color: #0D6EFD;
    border-radius: 50%;
    box-shadow: 0 var(--shadow) #ffbeb8;
    cursor: pointer;
    transition: 0.2s ease transform, 0.2s ease background-color,
      0.2s ease box-shadow;
    overflow: hidden;
    z-index: 1;
  }

  .checkbox-wrapper-26 label:before {
    content: "";
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    width: calc(var(--size) * .7);
    height: calc(var(--size) * .7);
    margin: 0 auto;
    background-color: #fff;
    transform: translateY(-50%);
    border-radius: 50%;
    box-shadow: inset 0 var(--shadow) #ffbeb8;
    transition: 0.2s ease width, 0.2s ease height;
  }

  .checkbox-wrapper-26 label:hover:before {
    width: calc(var(--size) * .55);
    height: calc(var(--size) * .55);
    box-shadow: inset 0 var(--shadow) #ff9d96;
  }

  .checkbox-wrapper-26 label:active {
    transform: scale(0.9);
  }

  .checkbox-wrapper-26 .tick_mark {
    position: absolute;
    top: -1px;
    right: 0;
    left: calc(var(--size) * -.05);
    width: calc(var(--size) * .6);
    height: calc(var(--size) * .6);
    margin: 0 auto;
    margin-left: calc(var(--size) * .14);
    transform: rotateZ(-40deg);
  }

  .checkbox-wrapper-26 .tick_mark:before,
  .checkbox-wrapper-26 .tick_mark:after {
    content: "";
    position: absolute;
    background-color: #fff;
    border-radius: 2px;
    opacity: 0;
    transition: 0.2s ease transform, 0.2s ease opacity;
  }

  .checkbox-wrapper-26 .tick_mark:before {
    left: 0;
    bottom: 0;
    width: calc(var(--size) * .1);
    height: calc(var(--size) * .3);
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.23);
    transform: translateY(calc(var(--size) * -.68));
  }

  .checkbox-wrapper-26 .tick_mark:after {
    left: 0;
    bottom: 0;
    width: 100%;
    height: calc(var(--size) * .1);
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.23);
    transform: translateX(calc(var(--size) * .78));
  }

  .checkbox-wrapper-26 input[type="checkbox"]:checked+label {
    background-color: #07d410;
    box-shadow: 0 var(--shadow) #92ff97;
  }

  .checkbox-wrapper-26 input[type="checkbox"]:checked+label:before {
    width: 0;
    height: 0;
  }

  .checkbox-wrapper-26 input[type="checkbox"]:checked+label .tick_mark:before,
  .checkbox-wrapper-26 input[type="checkbox"]:checked+label .tick_mark:after {
    transform: translate(0);
    opacity: 1;
  }

  .productExport:first-of-type .deleteButtonExport,
  .productLocal:first-of-type .deleteButtonLocal {
    display: none;
  }

  .line {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 30px;
    background-color: #000;
    visibility: hidden;
    z-index: 10;
  }

  .checkbox-wrapper-26 span {
    font-weight: bolder;
    min-width: 60%;
    max-width: 70%;
  }
</style>
<div>
  <div>
    <h1 class=" bg-dark text-white p-4 m-2">{Project title}</h1>
  </div>
  <div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="Checklist-tab" data-bs-toggle="tab" data-bs-target="#Checklist-tab-pane" type="button" role="tab" aria-controls="Checklist-tab-pane" aria-selected="true">Requirements Checklist</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="Project-tab" data-bs-toggle="tab" data-bs-target="#Project-tab-pane" type="button" role="tab" aria-controls="Project-tab-pane" aria-selected="false">Project Information Sheets</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="ProjectData-tab" data-bs-toggle="tab" data-bs-target="#ProjectData-tab-pane" type="button" role="tab" aria-controls="ProjectData-tab-pane" aria-selected="false">Project Data Sheets</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="Client-tab" data-bs-toggle="tab" data-bs-target="#Client-tab-pane" type="button" role="tab" aria-controls="Client-tab-pane" aria-selected="false">Client's Information</button>
      </li>
    </ul>

  </div>
  <div class="tab-content bg-white" id="myTabContent">
    <div class="tab-pane fade show active" id="Checklist-tab-pane" role="tabpanel" aria-labelledby="Checklist-tab" tabindex="0">
      <Div class="m-2 p-5">
        <!-- TODO: add a line connection with the checkboxes -->
        <form action="">

          <div>
            <div class="checkbox-wrapper-26 ms-3">
              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="_checkbox-TNA" value="TNA" onclick="checkOrder(this, null)">
                <label for="_checkbox-TNA" class="me-2">
                  <div class="tick_mark"></div>
                </label>
                <span>TNA</span>
              </div>
              <div class="line position-absolute"></div>
            </div>
            <div class="checkbox-wrapper-26 ms-3">
              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="_checkbox-PDA" value="Project Deliberation Approval" onclick="checkOrder(this, '_checkbox-TNA')" disabled>
                <label for="_checkbox-PDA" class="me-2">
                  <div class="tick_mark"></div>
                </label>
                <span>Project Deliberation Approval</span>
              </div>
              <div class="line position-absolute"></div>
            </div>
            <div class="checkbox-wrapper-26 ms-3">
              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="_checkbox-PDC" value="PDC-post Dated Cheque" onclick="checkOrder(this, '_checkbox-PDA')" disabled>
                <label for="_checkbox-PDC" class="me-2">
                  <div class="tick_mark"></div>
                </label>
                <span>PDC-post Dated Cheque</span>
              </div>
              <div class="line position-absolute"></div>
            </div>
            <div class="checkbox-wrapper-26 ms-3">
              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="_checkbox-FR" value="Fund release" onclick="checkOrder(this, '_checkbox-PDC')" disabled>
                <label for="_checkbox-FR" class="me-2">
                  <div class="tick_mark"></div>
                </label>
                <span>Fund release</span>
              </div>
            </div>
          </div>
        </form>
      </Div>
    </div>
    <div class="tab-pane fade" id="Project-tab-pane" role="tabpanel" aria-labelledby="Project-tab" tabindex="0">
      <!-- Where the project infomation sheets will be displayed. -->
      <button type="button" id="BackInformation" class="btn btn-secondary">Back</button>
      <div id="InformationSheets">

      </div>

      <div class="p-5" id="InfoSheetForm">

        <fieldset class="mt-4">
          <legend class="w-auto">
            <h2>Project Information Sheet:</h2>
          </legend>
          <form action="">
            <div class="ps-4 pe-2 pt-2">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="projectTitle" placeholder="Project Title">
                <label for="projectTitle">Project Title:</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firmName" placeholder="Name of the Firm">
                <label for="firmName">Name of the Firm:</label>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <fieldset class="mt-3">
                    <legend class="w-auto">
                      <h5>CONTACT PERSON:</h5>
                    </legend>
                    <div class="ps-4 pe-2 pt-2">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                        <label for="name">Name:</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="gender" placeholder="Gender">
                        <label for="gender">Gender:</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="age" placeholder="Age">
                        <label for="age">Age:</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="organizationType" placeholder="Type of Organization/Enterprise">
                        <label for="organizationType">Type of Organization/Enterprise:</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="businessAddress" placeholder="Business Address">
                        <label for="businessAddress">Business Address:</label>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset class="mt-3">
                    <legend class="w-auto">
                      <h5>CONTACT DETAILS:</h5>
                    </legend>
                    <div class="ps-4 pe-2 pt-2">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="landline" placeholder="Landline">
                        <label for="landline">Landline:</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fax" placeholder="Fax">
                        <label for="fax">Fax:</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="mobilePhone" placeholder="Mobile Phone">
                        <label for="mobilePhone">Mobile Phone:</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
                        <label for="emailAddress">Email Address:</label>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </div>
            <button type="submit" id="createSheetButtonInfo" class="btn btn-primary">Create Sheet</button>
          </form>
        </fieldset>
        </form>
      </div>
    </div>
    <div class="tab-pane fade" id="ProjectData-tab-pane" role="tabpanel" aria-labelledby="ProjectData-tab" tabindex="0">
      <!-- Where the project Data sheets will be displayed. -->
      <button type="button" id="BackData" class="btn btn-secondary">Back</button>
      <div id="dataSheets">

      </div>
      <div class="container p-5" id="dataSheets-form">
        <fieldset class="mt-4">
          <legend class="w-auto">
            <h2>Project Data Sheet:</h2>
          </legend>
          <form class="mt-4">
            <div class="container">
              <div class="row mb-3">
                <div class="col p-0">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="projectTitle" name="projectTitle" placeholder="Project Title">
                    <label for="projectTitle">Project Title:</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col p-0">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nameOfFirm" name="nameOfFirm" placeholder="Name of Firm">
                    <label for="nameOfFirm">Name of Firm:</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col p-0">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    <label for="address">Address:</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="contactPerson" name="contactPerson" placeholder="Contact Person">
                  <label for="contactPerson">Contact Person:</label>
                </div>
              </div>
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                  <label for="designation">Designation:</label>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="tel" class="form-control" id="landline" name="landline" placeholder="Landline">
                  <label for="landline">Landline:</label>
                </div>
              </div>
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="tel" class="form-control" id="mobilePhone" name="mobilePhone" placeholder="Mobile Phone">
                  <label for="mobilePhone">Mobile Phone:</label>
                </div>
              </div>
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Email Address">
                  <label for="emailAddress">Email Address:</label>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Period Covered:</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="quarter" value="1st" id="1stQuarter">
                <label class="form-check-label" for="1stQuarter">1st Quarter</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="quarter" value="2nd" id="2ndQuarter">
                <label class="form-check-label" for="2ndQuarter">2nd Quarter</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="quarter" value="3rd" id="3rdQuarter">
                <label class="form-check-label" for="3rdQuarter">3rd Quarter</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="quarter" value="4th" id="4thQuarter">
                <label class="form-check-label" for="4thQuarter">4th Quarter</label>
              </div>
            </div>

            <fieldset class="mt-4">
              <legend class="w-auto">
                <h4>1.0 ASSETS</h4>
              </legend>
              <div class="row ms-4 mb-3">
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="BuildingAsset" name="Building" placeholder="Building">
                    <label for="BuildingAsset">Building:</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Equipment" name="Equipment" placeholder="Equipment">
                    <label for="Equipment">Equipment:</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="WorkingCapital" name="WorkingCapital" placeholder="Working Capital">
                    <label for="WorkingCapital">Working Capital:</label>
                  </div>
                </div>
                <div class="container mt-3">
                  <h5>Classification of Enterprise</h5>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="assetSize" id="micro" value="Micro">
                    <label class="form-check-label" for="micro">
                      Micro (assets less than 3M)
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="assetSize" id="small" value="Small">
                    <label class="form-check-label" for="small">
                      Small (assets of 3M to 15M)
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="assetSize" id="medium" value="Medium">
                    <label class="form-check-label" for="medium">
                      Medium (assets of 15M to 100M)
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="mt-4">
              <legend class="w-auto">
                <h4>2.0 TOTAL EMPLOYMENT FOR THE QUARTER</h4>
              </legend>
              <div class="row ms-2 mb-3">
                <div class="col-md-6">
                  <fieldset class="mt-4">
                    <legend class="w-auto px-2">
                      <h5 class="ms-2">2.1 Direct Labor(Production)</h5>
                    </legend>
                    <div class="col ms-2">
                      <h6>2.1a Direct Labor</h6>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="maleInput" placeholder="Male">
                        <label for="maleInput">Male</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="femaleInput" placeholder="Female">
                        <label for="femaleInput">Female</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="workdayInput" placeholder="Workday">
                        <label for="workdayInput">Workday</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <p>{Total}</p>
                      </div>
                    </div>
                    <div class="col ms-2">
                      <h6>2.1b Part-time</h6>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                        <label for="parttimeMaleInput">Male</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                        <label for="parttimeFemaleInput">Female</label>
                      </div>
                      <div class="col-md-12 form-floating mb-3">
                        <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                        <label for="parttimeWorkdayInput">Workday</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <p>{Total}</p>
                      </div>
                    </div>
                  </fieldset>
                </div>

                <div class=" col-md-6">
                  <fieldset class="mt-4">
                    <legend class="w-auto px-2">
                      <h5 class="ms-2">2.2 Indirect Labor(Admin and Marketing)</h5>
                    </legend>
                    <div class="container mt-2">
                      <div class="col ms-2">
                        <h6>2.2a Regular</h6>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                          <label for="parttimeMaleInput">Male</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                          <label for="parttimeFemaleInput">Female</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                          <label for="parttimeWorkdayInput">Workday</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                    </div>
                    <div class="container mt-2">
                      <div class="col ms-2">
                        <h6>2.2b Part-time</h6>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="Male">
                          <label for="parttimeMaleInput">Male</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="Female">
                          <label for="parttimeFemaleInput">Female</label>
                        </div>
                        <div class="col-md-12 form-floating mb-3">
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="Workday">
                          <label for="parttimeWorkdayInput">Workday</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <p12>{Total}</p12 </div>
                        </div>
                      </div>
                  </fieldset>
                </div>

              </div>
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <h6>Total Employment for this Quarter:</h6>
                  </div>
                  <div class="col">
                    <div class="mb-3 form-floating">
                      <input type="text" class="form-control" id="regularEmployees" name="regularEmployees" min="0" placeholder="No. of Regular Employees">
                      <label for="regularEmployees">No. of Regular Employees:</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3 form-floating">
                      <input type="text" class="form-control" id="manMonths" name="manMonths" placeholder="No. of Man-Months">
                      <label for="manMonths">No. of Man-Months:</label>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="mt-4">
              <legend class="w-auto">
                <h4>3.0 PRODUCTION AND SALES DATA FOR THE QUARTER</h4>
              </legend>
              <div>
                <fieldset class="mt-4">
                  <legend class="w-auto px-2">
                    <h5 class="ms-2">3.1 Export Market</h5>
                  </legend>
                  <!-- FIXME: Improve the textfield format -->
                  <div id="productExport" class="productExport">
                    <div class="row ms-4">
                      <hr>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="productName" name="productName" placeholder="Name of Product">
                          <label for="productName">Name of Product:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="packingDetails" name="packingDetails" placeholder="Packing Details">
                          <label for="packingDetails">Packing Details:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction" placeholder="Volume of Production">
                          <label for="volumeOfProduction">Volume of Production:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="grossSales" name="grossSales" placeholder="Gross Sales">
                          <label for="grossSales">Gross Sales:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction" placeholder="Estimated Cost of Production">
                          <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="netSales" name="netSales" placeholder="Net Sales">
                          <label for="netSales">Net Sales:</label>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-danger deleteButtonExport">Delete</button>
                    </div>
                  </div>
                  <div class="mt-2">
                    <button id="addButtonExport" class="btn btn-primary">Add</button>
                  </div>
                </fieldset>
                <fieldset class="mt-4">
                  <legend class="w-auto px-2">
                    <h5 class="ms-2">3.2 Local Market</h5>
                  </legend>
                  <!-- FIXME: Improve the textfield format -->
                  <div id="productLocal" class="productLocal">
                    <div class="row ms-4">
                      <hr>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="productName" name="productName" placeholder="Name of Product">
                          <label for="productName">Name of Product:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="packingDetails" name="packingDetails" placeholder="Packing Details">
                          <label for="packingDetails">Packing Details:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction" placeholder="Volume of Production">
                          <label for="volumeOfProduction">Volume of Production:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="grossSales" name="grossSales" placeholder="Gross Sales">
                          <label for="grossSales">Gross Sales:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction" placeholder="Estimated Cost of Production">
                          <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="netSales" name="netSales" placeholder="Net Sales">
                          <label for="netSales">Net Sales:</label>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-danger deleteButtonLocal">Delete</button>
                    </div>
                  </div>
                  <div class="mt-2">
                    <button id="addButtonLocal" class="btn btn-primary">Add</button>
                  </div>
                </fieldset>
                <div class="d-flex">
                  <p class="m-3"><Strong>TOTAL:</Strong></p>
                  <p class="m-3">Gross Sales:{Total}</p>
                  <p class="m-3">Estimated Cost of Production:{Total}</p>
                  <p class="m-3">Net Sales:{Total}</p>
                </div>
              </div>
              <hr>
            </fieldset>

            <fieldset class="mt-4">
              <legend class="w-auto">
                <h4>4.0 MARKET OUTLETS</h4>
              </legend>
              <div>
                <div>
                  <h5 class="ms-2">4.1 Export</h5>
                  <div class="form-floating ms-4">
                    <textarea class="form-control" placeholder="Export" id="exportTextarea"></textarea>
                    <label for="exportTextarea">Export</label>
                  </div>
                </div>
                <div>
                  <h5 class="ms-2">4.2 Local</h5>
                  <div class="form-floating ms-4">
                    <textarea class="form-control" placeholder="Local" id="localTextarea"></textarea>
                    <label for="localTextarea">Local</label>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="mt-4">
              <legend class="w-auto">
                <h3>TO BE ACCOMPLISHED BY DOST XI</h3>
              </legend>
              <div>
                <fieldset class="mt-4">
                  <legend class="w-auto px-2">
                    <h5 class="ms-2">Gross Sales Generated</h5>
                  </legend>
                  <div class="row ms-4">
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="grossSalesPeriod1" name="grossSalesPeriod1" placeholder="Gross Sales {period1}">
                        <label for="grossSalesPeriod1">Gross Sales {period1}</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="grossSalesPeriod2" name="grossSalesPeriod2" placeholder="Gross Sales {period2}">
                        <label for="grossSalesPeriod2">Gross Sales {period2}</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col">
                        <div class="col-md-6">
                          <p><strong>TOTAL GROSS SALES GENERATED:{Result}</strong></p>
                        </div>
                        <div class="col-md-6">
                          <p><strong>% INCREASE IN PRODUCTIVITY GENERATED:{Result}</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="mt-4">
                  <legend class="w-auto px-2">
                    <h5 class="ms-2">Employment Information</h5>
                  </legend>
                  <div class="row ms-4">
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="TotalEmployment2" name="TotalEmployment2" placeholder="Gross Sales {period1}">
                        <label for="TotalEmployment2">Total Employment {period1}</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="TotalEmployment2" name="TotalEmployment2" placeholder="Gross Sales {period2}">
                        <label for="TotalEmployment2">Total Employment {period2}</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col">
                        <div class="col-md-6">
                          <p><strong>EMPLOYMENT GENERATED:{Result}</strong></p>
                        </div>
                        <div class="col-md-6">
                          <p><strong>% INCREASE IN EMPLOMENT GENERATED:{Result}</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
            </fieldset>
            <button type="submit" id="createSheetButton" class="btn btn-primary">Create Sheet</button>
          </form>
        </fieldset>
      </div>
    </div>
    <div class="tab-pane fade" id="Client-tab-pane" role="tabpanel" aria-labelledby="Client-tab" tabindex="0">

      <!-- where the client's information will be displayed. -->
      <div class="row g-3 mt-5 ms-5 me-5 mb-2 p-5">
        <h2>Client Info:</h2>
        <div class="form-group row">
          <span for="project_title" class="col-sm-2 col-form-label"><strong>Project Title:</strong></span>
          <div class="col-sm-10">
            <p class="" id="project_title"><u>[Project Title Value]</u></p>
          </div>
        </div>
        <div class="form-group row">
          <span for="firm_name" class="col-sm-2 col-form-label"> <strong>Name of Firm:</strong></span>
          <div class="col-sm-10">
            <p class="" id="firm_name"><u>[Firm Name Value]</u></p>
          </div>
        </div>
        <div class="form-group row">
          <span for="address" class="col-sm-2 col-form-label"><strong>Address:</strong></span>
          <div class="col-sm-10">
            <p class="" id="address"><u>[Address Value]</u></p>
          </div>
        </div>
        <div class="form-group row">
          <span class="col-sm-2 col-form-label"><strong>Contact Person:</strong></span>
          <div class="col-sm-4">
            <p class="" id="contact_person"><u>[Contact Person Value]</u></p>
          </div>
          <span class="col-sm-2 col-form-label"><strong>Designation:</strong></span>
          <div class="col-sm-4">
            <p class="" id="designation"><u>[Designation Value]</u></p>
          </div>
        </div>
        <div class="form-group row">
          <span class="col-sm-2 col-form-label"><strong>Landline:</strong></span>
          <div class="col-sm-2">
            <p class="" id="landline"><u>[Landline Value]</u></p>
          </div>
          <span class="col-sm-2 col-form-label"><strong>Mobile Phone:</strong></span>
          <div class="col-sm-2">
            <p class="" id="mobile_phone"><u>[Mobile Phone Value]</u></p>
          </div>
          <span class="col-sm-2 col-form-label"><strong>Email Address:</strong></span>
          <div class="col-sm-2">
            <p class="" id="email"><u>[Email Address Value]</u></p>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script>
    (function() {
      function enableNextCheckbox(currentCheckbox) {
        let parentDiv = currentCheckbox.closest('.checkbox-wrapper-26');
        let nextProgressBar = parentDiv.querySelector('.line'); // Select the progress bar within the same wrapper
        let nextDiv = parentDiv.nextElementSibling; // Select the next checkbox wrapper
        let nextCheckbox = nextDiv ? nextDiv.querySelector('input[type="checkbox"]') : null;

        if (nextCheckbox) {
          nextCheckbox.disabled = false; // Enable the next checkbox
          //Calculate the height of the progress bar based on the position of the checkboxes
          let currentCheckboxBottom = parentDiv.getBoundingClientRect().bottom;
          let nextCheckboxTop = nextDiv.getBoundingClientRect().top;
          let height = nextCheckboxTop - currentCheckboxBottom;
          nextProgressBar.style.height = `68px`; // Set the height of the progress bar
          nextProgressBar.style.visibility = 'visible'; // Make the progress bar visible
          nextProgressBar.style.backgroundColor = '#07D410'; // Change the color of the progress bar
          nextProgressBar.style.bottom = '-10px'; // Align the progress bar to the bottom of the checkbox
          nextProgressBar.style.left = '1.3%'; // Align the progress bar to the center of the checkbox
          nextProgressBar.style.width = '10px'; // Set the width of the progress bar
          nextProgressBar.style.zIndex = '0';

        }
      }

      window.checkOrder = function(currentCheckbox, previousCheckboxId) {
        if (previousCheckboxId) {
          let previousCheckbox = document.getElementById(previousCheckboxId);
          if (!previousCheckbox.checked) {
            currentCheckbox.checked = false;
            alert('Please check the previous item first.');
            return; // Stop further execution
          }
        }

        if (currentCheckbox.checked) {
          enableNextCheckbox(currentCheckbox);
        } else {
          let parentDiv = currentCheckbox.closest('.checkbox-wrapper-26');
          let nextProgressBar = parentDiv.querySelector('.line');
          let nextDiv = parentDiv.nextElementSibling;
          while (nextDiv) {
            let nextCheckbox = nextDiv.querySelector('input[type="checkbox"]');
            if (nextCheckbox) {
              nextCheckbox.checked = false;
              nextCheckbox.disabled = true;
            }
            disableProgressBar(nextProgressBar); // Reset the progress bar for each unchecked checkbox
            nextProgressBar = nextDiv.querySelector('.line');
            nextDiv = nextDiv.nextElementSibling;
          }
        }
      }

      function disableProgressBar(progressBar) {
        if (progressBar) {
          progressBar.style.height = '0'; // Reset progress bar height
        }
      }

      $(document).ready(function() {
        $("#addButtonExport").click(function(e) {
          e.preventDefault();
          var clone = $(".productExport").first().clone();
          clone.find("input").val("");
          clone.find(".deleteButtonExport").show();
          clone.insertAfter(".productExport:last");
        });

        $(document).on("click", ".deleteButtonExport", function() {
          $(this).closest(".productExport").remove();
        });

        $("#addButtonLocal").click(function(e) {
          e.preventDefault();
          var clone = $(".productLocal").first().clone();
          clone.find("input").val("");
          clone.find(".deleteButtonLocal").show();
          clone.insertAfter(".productLocal:last");
        });

        $(document).on("click", ".deleteButtonLocal", function() {
          $(this).closest(".productLocal").remove();
        });

        // Hide the delete buttons initially
        $('.deleteButtonExport, .deleteButtonLocal').hide();
      });
      $(document).ready(function() {
        $('#createSheetButton').click(function(e) {
          e.preventDefault(); // Prevent the default form submission

          $.ajax({
            url: 'outputs/ProjectDataSheetTable.php', // URL of the PHP file you want to load
            type: 'GET', // GET or POST
            success: function(response) {
              $('#dataSheets').html(response); // Load the response into the div
              $('#dataSheets-form').hide(); // Hide the form
            },
            error: function() {
              alert('Error loading the file');
            }
          });
        });
      });
      $(document).ready(function() {
        $('#BackData').click(function() {
          $('#dataSheets').empty(); // Clear the content of the div
          $('#dataSheets-form').show(); // Unhide the form
        });
      });
      $(document).ready(function() {
        $('#createSheetButtonInfo').click(function(e) {
          e.preventDefault(); // Prevent the default form submission

          $.ajax({
            url: 'outputs/ProjectInformationSheetTable.php', // URL of the PHP file you want to load
            type: 'GET', // GET or POST
            success: function(response) {
              $('#InformationSheets').html(response); // Load the response into the div
              $('#InfoSheetForm').hide(); // Hide the form
            },
            error: function() {
              alert('Error loading the file');
            }
          });
        });
      });
      $(document).ready(function() {
        $('#BackInformation').click(function() {
          $('#InformationSheets').empty(); // Clear the content of the div
          $('#InfoSheetForm').show(); // Unhide the form
        });
      });
    })();
  </script>