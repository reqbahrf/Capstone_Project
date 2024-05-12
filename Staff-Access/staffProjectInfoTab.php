<style>
  * label {
    font-weight: 500;
    opacity: 0.7;
  }

  .tab-Nav {
    background-color: black;
    color: white;
    /* Change the text color to white for better contrast */
  }

  .tab-Nav.active {
    font-weight: bold;
    background-color: white;
    color: black;
    border-top: 6px solid;
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
        <button class="nav-link  tab-Nav active" id="Checklist-tab" data-bs-toggle="tab" data-bs-target="#Checklist-tab-pane" type="button" role="tab" aria-controls="Checklist-tab-pane" aria-selected="true">Requirements Checklist</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link  tab-Nav" id="Project-tab" data-bs-toggle="tab" data-bs-target="#Project-tab-pane" type="button" role="tab" aria-controls="Project-tab-pane" aria-selected="false">Project Information Sheets</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link  tab-Nav" id="ProjectData-tab" data-bs-toggle="tab" data-bs-target="#ProjectData-tab-pane" type="button" role="tab" aria-controls="ProjectData-tab-pane" aria-selected="false">Project Data Sheets</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link  tab-Nav" id="Client-tab" data-bs-toggle="tab" data-bs-target="#Client-tab-pane" type="button" role="tab" aria-controls="Client-tab-pane" aria-selected="false">Client's Information</button>
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
      <div class="mt-5 me-5 text-end">
        <button type="button" id="BackData" class="btn">Back</button>
      </div>
      <div id="dataSheets">

      </div>
      <div class="container p-5" id="dataSheets-form">
        <div id="sw-AddProjectData" class="p-4">
          <ul class="nav nav-progress">
            <li class="nav-item">
              <a class="nav-link  .tab-Nav default active z-3" href="#step-1">
                <div class="num">1</div>
                Cooperator Info
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  default z-3" href="#step-2">
                <span class="num">2</span>
                Assests
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  default z-3" href="#step-3">
                <span class="num">3</span>
                TOTAL EMPLOYMENT
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link default z-3" href="#step-4">
                <span class="num">4</span>
                PRODUCTION AND SALES
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  default z-3" href="#step-5">
                <span class="num">5</span>
                Market Outlets
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  default z-3" href="#step-6">
                <span class="num">6</span>
                Increase in
              </a>

            </li>
          </ul>

          <div class="tab-content">
            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
              Step content
              <fieldset>
                <legend class="w-auto">
                  <h2>Cooperator Info:</h2>
                </legend>
                <div class="p-3">
                  <div class="form-group row mt-2">
                    <label for="project_title" class="col-12 col-sm-2"><strong>Project Title:</strong></label>
                    <div class="col-12 col-sm-10">
                      <input type="text" class="form-control" id="project_title" placeholder="[Project Title Value]">
                    </div>
                  </div>
                  <div class="form-group row mt-2">
                    <label for="firm_name" class="col-12 col-sm-2"><strong>Name of Firm:</strong></label>
                    <div class="col-12 col-sm-10">
                      <input type="text" class="form-control" id="firm_name" placeholder="[Firm Name Value]">
                    </div>
                  </div>
                  <div class="form-group row mt-2">
                    <label for="address" class="col-12 col-sm-2"><strong>Address:</strong></label>
                    <div class="col-12 col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="[Address Value]">
                    </div>
                  </div>
                  <div class="form-group row mt-2">
                    <label for="contact_person" class="col-12 col-sm-2"><strong>Contact Person:</strong></label>
                    <div class="col-12 col-sm-4">
                      <input type="text" class="form-control" id="contact_person" placeholder="[Contact Person Value]">
                    </div>
                    <label for="designation" class="col-12 col-sm-2"><strong>Designation:</strong></label>
                    <div class="col-12 col-sm-4">
                      <input type="text" class="form-control" id="designation" placeholder="[Designation Value]">
                    </div>
                    <div class="form-group row mt-2">
                      <label for="landline" class="col-12 col-sm-2"><strong>Landline:</strong></label>
                      <div class="col-12 col-sm-2">
                        <input type="text" class="form-control" id="landline" placeholder="[Landline Value]">
                      </div>
                      <label for="mobile_phone" class="col-12 col-sm-2"><strong>Mobile Phone:</strong></label>
                      <div class="col-12 col-sm-2">
                        <input type="text" class="form-control" id="mobile_phone" placeholder="[Mobile Phone Value]">
                      </div>
                      <label for="email" class="col-12 col-sm-2"><strong>Email Address:</strong></label>
                      <div class="col-12 col-sm-2">
                        <input type="text" class="form-control" id="email" placeholder="[Email Address Value]">
                      </div>
                    </div>
                  </div>
              </fieldset>
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
              <fieldset class="">
                <legend class="w-auto">
                  <h4>1.0 ASSETS</h4>
                </legend>
                <div class="row ms-md-4 mb-3">
                  <div class="col-12 col-sm-6 col-md-4">
                    <label for="BuildingAsset">Building:</label>
                    <input type="text" class="form-control" id="BuildingAsset" name="Building" placeholder="">
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <label for="Equipment">Equipment:</label>
                    <input type="text" class="form-control" id="Equipment" name="Equipment" placeholder="">
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <label for="WorkingCapital">Working Capital:</label>
                    <input type="text" class="form-control" id="WorkingCapital" name="WorkingCapital" placeholder="">
                  </div>
                </div>
              </fieldset>
            </div>
            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
              Step content
              <fieldset class="mt-4">
                <legend class="w-auto">
                  <h4>2.0 TOTAL EMPLOYMENT FOR THE QUARTER</h4>
                </legend>
                <div class="row ms-2 mb-3">
                  <div class="col-sm-12 col-md-6">
                    <h5>2.1 Direct Labor(Production)</h5>
                    <div class="row ms-md-2">
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.1a Direct Labor</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="maleInput">Male:</label>
                          <input type="text" class="form-control" id="maleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="femaleInput">Female:</label>
                          <input type="text" class="form-control" id="femaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="workdayInput">Workday:</label>
                          <input type="text" class="form-control" id="workdayInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.1b Part-time</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="parttimeMaleInput">Male:</label>
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeFemaleInput">Female:</label>
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeWorkdayInput">Workday:</label>
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="">
                        </div>
                        <div class="mb-3">:
                          <p>{Total}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <h5>2.2 Indirect Labor(Admin and Marketing)</h5>
                    <div class="row ms-md-2">
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.2a Regular</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="regularMaleInput">Male:</label>
                          <input type="text" class="form-control" id="regularMaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="regularFemaleInput">Female:</label>
                          <input type="text" class="form-control" id="regularFemaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="regularWorkdayInput">Workday:</label>
                          <input type="text" class="form-control" id="regularWorkdayInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                      <div class="col-sm-12 mt-3 col-md-6">
                        <h6>2.2b Part-time</h6>
                        <!-- Your input fields here -->
                        <div class="mb-3">
                          <label for="parttimeMaleInput">Male:</label>
                          <input type="text" class="form-control" id="parttimeMaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeFemaleInput">Female:</label>
                          <input type="text" class="form-control" id="parttimeFemaleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="parttimeWorkdayInput">Workday:</label>
                          <input type="text" class="form-control" id="parttimeWorkdayInput" placeholder="">
                        </div>
                        <div class="mb-3">
                          <p>{Total}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
              <fieldset class="mt-4">
                <legend class="w-auto">
                  <h4>3.0 PRODUCTION AND SALES DATA FOR THE QUARTER</h4>
                </legend>
                <div>
                  <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                      <fieldset class="mt-4">
                        <!-- Your first fieldset content here -->
                        <legend class="w-auto px-2">
                          <h5 class="ms-2">3.1 Export Market</h5>
                        </legend>
                        <!-- FIXME: Improve the textfield format -->
                        <div id="productExport" class="productExport">
                          <div class="row ms-4">
                            <hr>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="productName">Name of Product:</label>
                                <input type="text" class="form-control" id="productName" name="productName">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="packingDetails">Packing Details:</label>
                                <textarea class="form-control" id="packingDetails" name="packingDetails"></textarea>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="volumeOfProduction">Volume of Production:</label>
                                <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="grossSales">Gross Sales:</label>
                                <input type="text" class="form-control" id="grossSales" name="grossSales">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                                <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction">
                              </div </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="netSales">Net Sales:</label>
                                  <input type="text" class="form-control" id="netSales" name="netSales">
                                </div>
                              </div>
                              <hr>
                            </div>
                            <div class="col-12">
                              <button type="button" class="btn btn-danger deleteButtonExport">Delete</button>
                            </div>
                          </div>
                          <div class="mt-2">
                            <button id="addButtonExport" class="btn btn-primary">Add</button>
                          </div>
                      </fieldset>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <fieldset class="mt-4">
                        <!-- Your second fieldset content here -->
                        <legend class="w-auto px-2">
                          <h5 class="ms-2">3.2 Local Market</h5>
                        </legend>
                        <!-- FIXME: Improve the textfield format -->
                        <div id="productLocal" class="productLocal">
                          <div class="row ms-4">
                            <hr>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="productName">Name of Product:</label>
                                <input type="text" class="form-control" id="productName" name="productName">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="packingDetails">Packing Details:</label>
                                <textarea class="form-control" id="packingDetails" name="packingDetails"></textarea>
                              </div </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="volumeOfProduction">Volume of Production:</label>
                                  <input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="grossSales">Gross Sales:</label>
                                  <input type="text" class="form-control" id="grossSales" name="grossSales">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="estimatedCostOfProduction">Estimated Cost of Production:</label>
                                  <input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-3">
                                  <label for="netSales">Net Sales:</label>
                                  <input type="text" class="form-control" id="netSales" name="netSales">
                                </div>
                              </div>
                              <hr>
                            </div>
                            <div class="col-12">
                              <button type="button" class="btn btn-danger deleteButtonLocal">Delete</button>
                            </div>
                          </div>
                          <div class="mt-2">
                            <button id="addButtonLocal" class="btn btn-primary">Add</button>
                          </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
            </div>
            <div id="step-5" class="tab-pane h-50" role="tabpanel" aria-labelledby="step-5">
              <fieldset class="mt-4">
                <legend class="w-auto">
                  <h4>4.0 MARKET OUTLETS</h4>
                </legend>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <h5 class="ms-2">4.1 Export</h5>
                    <div class="ms-4 mb-3">
                      <label for="exportTextarea">Export</label>
                      <textarea class="form-control" placeholder="Export" id="exportTextarea"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <h5 class="ms-2">4.2 Local</h5>
                    <div class="ms-4 mb-3">
                      <label for="localTextarea">Local</label>
                      <textarea class="form-control" placeholder="Local" id="localTextarea"></textarea>
                    </div>
                  </div>
                </div>
              </fieldset>

            </div>
            <div id="step-6" class="tab-pane" role="tabpanel" aria-labelledby="step-5">
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
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <button type="submit" id="createSheetButton" class="btn btn-info">Create Sheet</button>
      </div>
      


    </div>
    <div class="tab-pane fade" id="Client-tab-pane" role="tabpanel" aria-labelledby="Client-tab" tabindex="0">

      <!-- where the client's information will be displayed. -->
      <div class="row g-3 mt-3 ms-3 me-3 mb-2 p-3">
        <fieldset>
          <legend class="w-auto">
            <h2>Client Info:</h2>
          </legend>
          <div class="p-3">
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
        </fieldset>
      </div>
    </div>

  </div>
  <script>
    $(document).ready(function() {
      $('#sw-AddProjectData').smartWizard({
        selected: 0,
        theme: 'dots',
        transition: {
          animation: 'slideHorizontal'
        },
        toolbar: {
          showNextButton: true, // show/hide a Next button
          showPreviousButton: true, // show/hide a Previous button
          position: 'both buttom', // none/ top/ both bottom
          extraHtml: `<button class="btn btn-success" onclick="onFinish()">Submit</button>
                              <button class="btn btn-secondary" onclick="onCancel()">Cancel</button>`
        },
      });
      $("#sw-AddProjectData").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
        var totalSteps = $('#sw-AddProjectData').find('ul li').length;
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