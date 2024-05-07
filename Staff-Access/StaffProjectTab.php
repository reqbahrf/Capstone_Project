<style>
  .nav-link {
    background-color: black;
    color: white;
    /* Change the text color to white for better contrast */
  }

  .nav-link.active {
    font-weight: bolder;
    background-color: white;
    color: black;
    /* Change the text color to black for better contrast */
  }
</style>
<div>
  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="StaffProjectTab.php">Staff Project Tab</a></li>
        <li class="breadcrumb-item active" aria-current="page">Staff Project Info</li>
      </ol>
    </nav>
    <div>
      <h1 class=" bg-dark text-white p-4 m-2">Projects</h1>
    </div>
    <div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="Approved-tab" data-bs-toggle="tab" data-bs-target="#Approved-tab-pane" type="button" role="tab" aria-controls="Approved-tab-pane" aria-selected="true">Approved Projects</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="Ongoing-tab" data-bs-toggle="tab" data-bs-target="#Ongoing-tab-pane" type="button" role="tab" aria-controls="Ongoing-tab-pane" aria-selected="false">Ongoing Projects</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="Add-tab" data-bs-toggle="tab" data-bs-target="#Add-tab-pane" type="button" role="tab" aria-controls="Add-tab-pane" aria-selected="false">Add Projects</button>
        </li>
      </ul>

    </div>
    <div class="tab-content bg-white" id="myTabContent">
      <!-- first tab here -->
      <div class="tab-pane fade show active" id="Approved-tab-pane" role="tabpanel" aria-labelledby="Approved-tab" tabindex="0">
        <table id="example" class="table table-striped mb-5" style="width:100%;">
          <thead>
            <tr>
              <th>Id</th>
              <th>Client Name</th>
              <th>Designation</th>
              <th>Firm Name</th>
              <th>Additional Info</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="tableBody">
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>Manager</td>
              <td>XYZ company</td>
              <td>
                <p><strong>Business Address:</strong>tagum, Davao Del Norte</p>
                <strong>Contact Details:</strong>
                <p><strong>Landline:</strong> 1234567 <br><Strong>Mobile Phone:</Strong> 09123456789</p>
              </td>
              <td>
                <button class="btn btn-primary" onclick="loadPage('staffProjectInfoTab.php');">Create</button>
                <button class="btn btn-secondary">View</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>John Draw</td>
              <td>Manager</td>
              <td>ZYX company</td>
              <td>
                <p><strong>Business Address:</strong>Carmen, Davao Del Norte</p>
                <strong>Contact Details:</strong><br>
                <p><strong>Landline:</strong> None <br><Strong>Mobile Phone:</Strong> 09987654321</p>
              </td>
              <td>
                <button class="btn btn-primary" onclick="loadPage('staffProjectInfoTab.php');">Create</button>
                <button class="btn btn-secondary">View</button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Client Name</th>
              <th>Designation</th>
              <th>Firm Name</th>
              <th>Additional Info</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- second tab here -->
      <div class="tab-pane fade" id="Ongoing-tab-pane" role="tabpanel" aria-labelledby="Ongoing-tab" tabindex="0">
        <div>
          <table id="example" class="table table-striped mb-5" style="width:100%;">
            <thead>
              <tr>
                <th>Id</th>
                <th>Project Title</th>
                <th>Firm Name</th>
                <th>Client Name</th>
                <th>Designation</th>
                <th>Status</th>
                <th>Additional Info</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="tableBody">
              <tr>
                <td>1</td>
                <td>Improvent the business 1</td>
                <td>MNS company</td>
                <td>John Doe</td>
                <td>Manager</td>
                <td>Active</td>
                <td>
                  <p><strong>Business Address:</strong>tagum, Davao Del Norte</p>
                  <strong>Contact Details:</strong>
                  <p><strong>Landline:</strong> 1234567 <br><Strong>Mobile Phone:</Strong> 09123456789</p>
                </td>
                <td>
                  <button class="btn btn-primary" id="dashboardLink" onclick="loadPage('/org-access/viewCooperatorInfo.php','projectLink');">View</button>
                  <button class="btn btn-secondary">View</button>
                </td>
              </tr>
              <tr>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>Project Title</th>
                <th>Firm Name</th>
                <th>Client Name</th>
                <th>Designation</th>
                <th>Status</th>
                <th>Additional Info</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!-- Third tab here -->
      <div class="tab-pane fade" id="Add-tab-pane" role="tabpanel" aria-labelledby="Add-tab" tabindex="0">
        <div class="p-5" id="InfoSheetForm">
          <form action="">
            <fieldset class="mt-4">
              <legend class="w-auto">
                <h2>Project Information Sheet:</h2>
              </legend>
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
            </fieldset>
            <div class="container p-5" id="dataSheets-form">
              <fieldset class="mt-4">
                <legend class="w-auto">
                  <h2>Project Data Sheet:</h2>
                </legend>

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
                            <input type="text" class="form-control " id="maleInput" placeholder="Male">
                            <label for="maleInput">Male</label>
                          </div>
                          <div class="col-md-12 form-floating mb-3">
                            <input type="text" class="form-control " id="femaleInput" placeholder="Female">
                            <label for="femaleInput">Female</label>
                          </div>
                          <div class="col-md-12 form-floating mb-3">
                            <input type="text" class="form-control " id="workdayInput" placeholder="Workday">
                            <label for="workdayInput">Workday</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <p>{Total}</p>
                          </div>
                        </div>
                        <div class="col ms-2">
                          <h6>2.1b Part-time</h6>
                          <div class="col-md-12 form-floating mb-3">
                            <input type="text" class="form-control " id="parttimeMaleInput" placeholder="Male">
                            <label for="parttimeMaleInput">Male</label>
                          </div>
                          <div class="col-md-12 form-floating mb-3">
                            <input type="text" class="form-control " id="parttimeFemaleInput" placeholder="Female">
                            <label for="parttimeFemaleInput">Female</label>
                          </div>
                          <div class="col-md-12 form-floating mb-3">
                            <input type="text" class="form-control " id="parttimeWorkdayInput" placeholder="Workday">
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
                              <textarea class="form-control" id="packingDetails" name="packingDetails" placeholder="Packing Details" style="height: 100px;"></textarea>
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
                              <textarea class="form-control" id="packingDetails" name="packingDetails" placeholder="Packing Details" style="height: 100px;"></textarea>
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
                        <textarea class="form-control" placeholder="Export" id="exportTextarea" style="height: 100px;"></textarea>
                        <label for="exportTextarea">Export</label>
                      </div>
                    </div>
                    <div>
                      <h5 class="ms-2">4.2 Local</h5>
                      <div class="form-floating ms-4">
                        <textarea class="form-control" placeholder="Local" id="localTextarea" style="height: 100px;"></textarea>
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
    </div>
  </div>
  <script>
    new DataTable('#example');
  </script>