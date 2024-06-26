<?php 
$conn = include_once '../db_connection/database_connection.php';

$sql = "SELECT cooperator_users.id, personal_info.f_name, personal_info.l_name, personal_info.designation, personal_info.mobile_number, personal_info.email_address, personal_info.landline, business_info.firm_name, business_info.B_address, business_info.enterprise_type, business_info.enterprise_level, assets.building_value, assets.equipment_value, assets.working_capital, pi.project_title, pi.fund_amount, pi.date_approved, org_users.full_name, application_info.application_status
FROM cooperator_users
INNER JOIN personal_info ON personal_info.user_id = cooperator_users.id
INNER JOIN business_info ON business_info.user_info_id = personal_info.id
INNER JOIN assets ON assets.business_id = business_info.id
INNER JOIN project_info AS pi ON pi.business_id = business_info.id
LEFT JOIN org_users ON pi.handled_by_id = org_users.id
INNER JOIN application_info ON application_info.business_id = business_info.id
WHERE application_info.application_status ='approved';";

$approved = mysqli_query($conn, $sql);

if (!$approved) {
    echo "Error: " . mysqli_error($conn);
} else {
    while ($row = mysqli_fetch_assoc($approved)) {
        // Access the data in $row
    }
}


?>
<style>
  ul#myTab li.nav-item button.tab-Nav.active {
    background-color: #318791 !important;
    font-weight: bold;
    color: white;
    border-top: 6px solid;
    border-top-right-radius: 10px;
    /* Adjust the radius value as needed */
    border-top-left-radius: 10px;
  }

  ul#myTab li.nav-item button.tab-Nav {
    background-color: white;
    /* Your desired color */
    color: black;
    /* Adjust text color accordingly */
    border: 1px solid #318791;
    /* Adjust border color */
    border-bottom: none;
  }

  ul#myTab li.nav-item button.tab-Nav:hover {
    background-color: #318791;
    /* Hover state color */
    color: white;
  }

  #ongoingTable_wrapper>div:first-child,
  #approvedTable_wrapper>div:first-child {
    background-color: #318791;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: white;
    margin-top: 0 !important;
  }

  #sw-AddProject th {
    font-size: 12px;
  }
</style>
<div>
  <h4 class="p-3">Projects</h4>
</div>
<div class="bg-white py-2 rounded-5">
  <!--Ongoing Modal start-->
  <div class="modal fade" id="ApplicationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Action</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <h6>Project Title:</h6>
            <p class="ps-2">"Imploving the business processes of LCC company"</p>
          </div>
          <button class="btn btn-primary" onclick="loadPage('/Staff-Access/staffProjectInfoTab.php','projectLink');" data-bs-dismiss="modal">Create Sheet</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Ongoing Modal end-->
  <div class="modal fade" id="OngoingModal" tabindex="-1" aria-labelledby="OngoingModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="OngoingModalLabel">Ongoing Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Modal content goes here -->
          <div>
            <h6>Project Title:</h6>
            <p class="ps-2">"Improvent the business 1"</p>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-dismiss="modal" id="dashboardLink" onclick="loadPage('/org-access/viewCooperatorInfo.php','projectLink');">View</button>
        </div>
      </div>
    </div>
  </div>
  <div>
    <ul class="nav nav-tabs ps-3" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link tab-Nav active" id="Approved-tab" data-bs-toggle="tab" data-bs-target="#Approved-tab-pane" type="button" role="tab" aria-controls="Approved-tab-pane" aria-selected="true">Approved Projects</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link tab-Nav" id="Ongoing-tab" data-bs-toggle="tab" data-bs-target="#Ongoing-tab-pane" type="button" role="tab" aria-controls="Ongoing-tab-pane" aria-selected="false">Ongoing Projects</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link tab-Nav" id="Add-tab" data-bs-toggle="tab" data-bs-target="#Add-tab-pane" type="button" role="tab" aria-controls="Add-tab-pane" aria-selected="false">Add Projects</button>
      </li>
    </ul>

  </div>
  <div class="tab-content bg-white mt-0 mx-3 mb-3" id="myTabContent">
    <!-- first tab here -->
    <div class="tab-pane fade show active" id="Approved-tab-pane" role="tabpanel" aria-labelledby="Approved-tab" tabindex="0">
      <!-- Where the applicant table start -->
      <div>
        <table id="approvedTable" class="table table-hover" style="width:100%">
          <thead>
            <tr>
              <th>id</th>
              <th>Client Name</th>
              <th>Designation</th>
              <th>Firm Name</th>
              <th>Additional Info</th>
              <th>Project Info</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="tableBody">
            <?php if (isset($approved) && mysqli_num_rows($approved) > 0) : ?>
              <?php  foreach ($approved as $item)  : ?>
                <tr>
                  <td><?= $item['id']; ?></td>
                  <td><?= $item['f_name'] . ' ' . $item['l_name']; ?></td>
                  <td><?= $item['designation']; ?></td>
                  <td><?= $item['firm_name']; ?></td>
                  <td>
                  <div>
                  <strong>Business Address:</strong> <?= $item['B_address']; ?> <br> 
                  <strong>Type of Enterprise:</strong> <?= $item['enterprise_type']; ?> <br>
                  <strong>Level of Enterprise:</strong> <?= $item['enterprise_level']; ?>
                   </div>
                   <br>
                    <div>
                      <Strong>
                        Assets:
                      </Strong> <br>
                      <span class="ps-2">Land: <?= number_format($item['building_value'], 2); ?></span><br>
                      <span class="ps-2">Building: <?= number_format($item['equipment_value'], 2); ?></span> <br>
                      <span class="ps-2">Equipment: <?= number_format($item['working_capital'], 2); ?></span>
                    </div>
                    <br>
                    <div>
                    <strong>Contact Details:</strong>
                    <br>
                      <Span class="p-2">Mobile Phone:</Span> <?= $item['mobile_number']; ?> <br>
                      <span class="p-2">Email:</span> <?= $item['email_address']; ?> <br>
                      <span class="p-2">Landline:</span> <?= $item['landline']; ?> 
                      <br>
                    </div>
                  </td>
                  <td>
                    <p>
                      <strong>
                        Title of the Project:
                      </strong> <br>
                      <span class="ps-2"> <?= $item['project_title']; ?></span>
                      <br>
                      <strong>
                        Approved fund:
                      </strong>
                      <br>
                      <span class="ps-2"><?= number_format($item['fund_amount'], 2); ?></span><br>
                      <Strong>
                        Approved Date:
                      </Strong><br>
                      <span class="ps-2"><?= $item['date_approved']; ?></span>
                      <br><br>
                      <strong>
                        Assigned Staff:
                      </strong>
                      <br>
                      <span class="ps-2"><?= $item['full_name']; ?></span>
                    </p>
                  </td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" id="modalButton" data-bs-toggle="modal" data-bs-target="#ApplicationModal">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
                        <path d="M56.177,16.832c-0.547-4.731-4.278-8.462-9.009-9.009C43.375,7.384,38.264,7,32,7S20.625,7.384,16.832,7.823c-4.731,0.547-8.462,4.278-9.009,9.009C7.384,20.625,7,25.736,7,32s0.384,11.375,0.823,15.168c0.547,4.731,4.278,8.462,9.009,9.009C20.625,56.616,25.736,57,32,57s11.375-0.384,15.168-0.823c4.731-0.547,8.462-4.278,9.009-9.009C56.616,43.375,57,38.264,57,32S56.616,20.625,56.177,16.832z M36,32c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,29.791,36,32z M36,45c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,42.791,36,45z M36,19c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,16.791,36,19z" fill="#000000" />
                      </svg>
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
          <tfoot>
            <tr>
              <th>id</th>
              <th>Client Name</th>
              <th>Designation</th>
              <th>Firm Name</th>
              <th>Additional Info</th>
              <th>Project Info</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- Where the applicant table end -->
    </div>
    <!-- second tab here -->
    <div class="tab-pane fade" id="Ongoing-tab-pane" role="tabpanel" aria-labelledby="Ongoing-tab" tabindex="0">
      <!-- Where the Ongoing Table Start -->
      <div>
        <table id="ongoingTable" class="table table-hover" style="width:100%;">
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
                <button type="button" class="btn" id="modalButton" data-bs-toggle="modal" data-bs-target="#OngoingModal">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
                    <path d="M56.177,16.832c-0.547-4.731-4.278-8.462-9.009-9.009C43.375,7.384,38.264,7,32,7S20.625,7.384,16.832,7.823c-4.731,0.547-8.462,4.278-9.009,9.009C7.384,20.625,7,25.736,7,32s0.384,11.375,0.823,15.168c0.547,4.731,4.278,8.462,9.009,9.009C20.625,56.616,25.736,57,32,57s11.375-0.384,15.168-0.823c4.731-0.547,8.462-4.278,9.009-9.009C56.616,43.375,57,38.264,57,32S56.616,20.625,56.177,16.832z M36,32c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,29.791,36,32z M36,45c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,42.791,36,45z M36,19c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,16.791,36,19z" fill="#000000" />
                  </svg>
                </button>
              </td>
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
      <!-- Where the Ongoing Table End -->
    </div>
    <div class="tab-pane fade" id="Add-tab-pane" role="tabpanel" aria-labelledby="Add-tab" tabindex="0">
      <!-- Where the Add form is display -->
      <div id="sw-AddProject" class="p-4">
        <ul class="nav nav-progress">
          <li class="nav-item">
            <a class="nav-link default active z-3" href="#step-1">
              <div class="num">1</div>
              Cooperator Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link default z-3" href="#step-2">
              <span class="num">2</span>
              Assests
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link default z-3" href="#step-3">
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
            <a class="nav-link default z-3" href="#step-5">
              <span class="num">5</span>
              Market Outlets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link default z-3" href="#step-6">
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
                <div class="col-sm-12">
                  <h5>2.1 Direct Labor(Production)</h5>
                  <div class="row ms-md-2">
                    <div class="col-sm-12 mt-3">
                      <h6>2.1a Direct Labor</h6>
                      <!-- Your input fields here -->
                      <div class="mb-3">
                        <table class="table">
                          <thead>
                            <tr class="table-primary">
                              <th scope="col">Male</th>
                              <th scope="col">Female</th>
                              <th scope="col">Workday</th>
                              <th scope="col">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="text" class="form-control" id="maleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="femaleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="workdayInput" placeholder=""></td>
                              <td>{Total}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                      <h6>2.1b Part-time</h6>
                      <!-- Your input fields here -->
                      <div class="mb-3">
                        <table class="table">
                          <thead>
                            <tr class="table-primary">
                              <th scope="col">Male</th>
                              <th scope="col">Female</th>
                              <th scope="col">Workday</th>
                              <th scope="col">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="text" class="form-control" id="parttimeMaleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="parttimeFemaleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="parttimeWorkdayInput" placeholder=""></td>
                              <td>{Total}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <h5>2.2 Indirect Labor(Admin and Marketing)</h5>
                  <div class="row ms-md-2">
                    <div class="col-sm-12 mt-3">
                      <h6>2.2a Regular</h6>
                      <!-- Your input fields here -->
                      <div class="mb-3">
                        <table class="table">
                          <thead>
                            <tr class="table-primary">
                              <th scope="col">Male</th>
                              <th scope="col">Female</th>
                              <th scope="col">Workday</th>
                              <th scope="col">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="text" class="form-control" id="regularMaleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="regularFemaleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="regularWorkdayInput" placeholder=""></td>
                              <td>{Total}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                      <h6>2.2b Part-time</h6>
                      <!-- Your input fields here -->
                      <div class="mb-3">
                        <table class="table">
                          <thead>
                            <tr class="table-primary">
                              <th scope="col">Male</th>
                              <th scope="col">Female</th>
                              <th scope="col">Workday</th>
                              <th scope="col">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="text" class="form-control" id="parttimeMaleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="parttimeFemaleInput" placeholder=""></td>
                              <td><input type="text" class="form-control" id="parttimeWorkdayInput" placeholder=""></td>
                              <td>{Total}</td>
                            </tr>
                          </tbody>
                        </table>
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
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <fieldset class="mt-4 p-0">
                      <!-- Your first fieldset content here -->
                      <legend class="w-auto px-2">
                        <h5 class="ms-2">3.1 Export Market</h5>
                      </legend>
                      <!-- FIXME: Improve the textfield format -->
                      <div id="productExport" class="productExport">
                        <div class="row">
                          <div class="mb-3">
                            <div class="mt-2">
                              <div class="d-flex justify-content-end">
                                <button id="addExportRow" class="btn btn-primary" data-toggle="tooltip" title="Add a new row">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                                    <path d="M0 18L0 46L11.666016 46L12.554688 50L6 50L15 62L24 50L17.445312 50L18.333984 46L35.052734 46C35.138734 44.612 35.583 43.27 36 42L4 42L4 22L60 22L60 35.779297C61.549 36.832297 62.904 38.149062 64 39.664062L64 18L0 18 z M 51 36C43.82 36 38 41.82 38 49C38 56.18 43.82 62 51 62C58.18 62 64 56.18 64 49C64 41.82 58.18 36 51 36 z M 50 42L52 42C52 42 52.632625 44.583375 52.890625 47.109375C55.416625 47.367375 58 48 58 48L58 50C58 50 55.416625 50.632625 52.890625 50.890625C52.632625 53.416625 52 56 52 56L50 56C50 56 49.367375 53.416625 49.109375 50.890625C46.583375 50.632625 44 50 44 50L44 48C44 48 46.583375 47.367375 49.109375 47.109375C49.367375 44.583375 50 42 50 42 z" fill="#FFFFFF" />
                                  </svg>
                                </button>
                                <button type="button" class="btn btn-danger deleteExportRow mx-2" data-toggle="tooltip" title="Delete row">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                                    <path d="M0 9L0 47L35.052734 47C35.138734 45.612 35.391594 44.27 35.808594 43L4 43L4 13L60 13L60 34.779297C61.549 35.832297 62.904 37.149062 64 38.664062L64 9L0 9 z M 51 34C43.82 34 38 39.82 38 47C38 54.18 43.82 60 51 60C58.18 60 64 54.18 64 47C64 39.82 58.18 34 51 34 z M 51 45C53.917 45 58 46 58 46L58 48C58 48 53.917 49 51 49C48.083 49 44 48 44 48L44 46C44 46 48.083 45 51 45 z" fill="#FFFFFF" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                            <table class="table Export-Outlet">
                              <thead>
                                <tr class="table-primary">
                                  <th scope="col">Name of Product</th>
                                  <th scope="col">Packing Details</th>
                                  <th scope="col">Volume of Production</th>
                                  <th scope="col">Gross Sales</th>
                                  <th scope="col">Estimated Cost of Production</th>
                                  <th scope="col">Net Sales</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="text" class="form-control" id="productName" name="productName"></td>
                                  <td><textarea class="form-control" id="packingDetails" name="packingDetails"></textarea></td>
                                  <td><input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction"></td>
                                  <td><input type="text" class="form-control" id="grossSales" name="grossSales"></td>
                                  <td><input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction"></td>
                                  <td><input type="text" class="form-control" id="netSales" name="netSales"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                    </fieldset>
                  </div>
                  <div class="col-sm-12">
                    <fieldset class="mt-4 p-0">
                      <!-- Your second fieldset content here -->
                      <legend class="w-auto px-2">
                        <h5 class="ms-2">3.2 Local Market</h5>
                      </legend>
                      <!-- FIXME: Improve the textfield format -->
                      <div id="productLocal" class="productLocal">
                        <div class="row">
                          <div class="col-12">
                            <div class="mt-2">
                              <div class="d-flex justify-content-end">
                                <button id="addLocalRow" class="btn btn-primary" data-toggle="tooltip" title="Add a new row">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                                    <path d="M0 18L0 46L11.666016 46L12.554688 50L6 50L15 62L24 50L17.445312 50L18.333984 46L35.052734 46C35.138734 44.612 35.583 43.27 36 42L4 42L4 22L60 22L60 35.779297C61.549 36.832297 62.904 38.149062 64 39.664062L64 18L0 18 z M 51 36C43.82 36 38 41.82 38 49C38 56.18 43.82 62 51 62C58.18 62 64 56.18 64 49C64 41.82 58.18 36 51 36 z M 50 42L52 42C52 42 52.632625 44.583375 52.890625 47.109375C55.416625 47.367375 58 48 58 48L58 50C58 50 55.416625 50.632625 52.890625 50.890625C52.632625 53.416625 52 56 52 56L50 56C50 56 49.367375 53.416625 49.109375 50.890625C46.583375 50.632625 44 50 44 50L44 48C44 48 46.583375 47.367375 49.109375 47.109375C49.367375 44.583375 50 42 50 42 z" fill="#FFFFFF" />
                                  </svg>
                                </button>
                                <button type="button" class="btn btn-danger mx-2 deleteLocalRow" data-toggle="tooltip" title="Delete row">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                                    <path d="M0 9L0 47L35.052734 47C35.138734 45.612 35.391594 44.27 35.808594 43L4 43L4 13L60 13L60 34.779297C61.549 35.832297 62.904 37.149062 64 38.664062L64 9L0 9 z M 51 34C43.82 34 38 39.82 38 47C38 54.18 43.82 60 51 60C58.18 60 64 54.18 64 47C64 39.82 58.18 34 51 34 z M 51 45C53.917 45 58 46 58 46L58 48C58 48 53.917 49 51 49C48.083 49 44 48 44 48L44 46C44 46 48.083 45 51 45 z" fill="#FFFFFF" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                            <table class="table local-Outlet">
                              <thead>
                                <tr class="table-primary">
                                  <th scope="col">Name of Product</th>
                                  <th scope="col">Packing Details</th>
                                  <th scope="col">Volume of Production</th>
                                  <th scope="col">Gross Sales</th>
                                  <th scope="col">Estimated Cost of Production</th>
                                  <th scope="col">Net Sales</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="text" class="form-control" id="productName" name="productName"></td>
                                  <td><textarea class="form-control" id="packingDetails" name="packingDetails"></textarea></td>
                                  <td><input type="text" class="form-control" id="volumeOfProduction" name="volumeOfProduction"></td>
                                  <td><input type="text" class="form-control" id="grossSales" name="grossSales"></td>
                                  <td><input type="text" class="form-control" id="estimatedCostOfProduction" name="estimatedCostOfProduction"></td>
                                  <td><input type="text" class="form-control" id="netSales" name="netSales"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
            </fieldset>
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

    </div>
  </div>
  <script>
    $(document).ready(function() {
      var counterExport = 0;
      var counterLocal = 0;
    
      function addRow(buttonSelector, tableSelector, counter) {
        $(buttonSelector).click(function() {
          counter++;
    
          var newRow = `
            <tr>
              <td><input type="text" class="form-control" name="productName${counter}"></td>
              <td><textarea class="form-control" name="packingDetails${counter}"></textarea></td>
              <td><input type="text" class="form-control" name="volumeOfProduction${counter}"></td>
              <td><input type="text" class="form-control" name="grossSales${counter}"></td>
              <td><input type="text" class="form-control" name="estimatedCostOfProduction${counter}"></td>
              <td><input type="text" class="form-control" name="netSales${counter}"></td>
            </tr>
          `;

        
    
          $(tableSelector).append(newRow);
          updateDeleteButtonState();
        });
      }
    
      function deleteRow(buttonSelector, tableSelector) {
        $(document).on('click', buttonSelector, function() {
          if ($(tableSelector + ' tr').length > 1) {
            $(tableSelector + ' tr:last').remove();
            updateDeleteButtonState();
          }
        });
      }
    
      function updateDeleteButtonState() {
        ['.deleteExportRow', '.deleteLocalRow'].forEach(function(buttonSelector) {
          var tableSelector = buttonSelector === '.deleteExportRow' ? '.Export-Outlet tbody' : '.local-Outlet tbody';
          if ($(tableSelector + ' tr').length <= 1) {
            $(buttonSelector).prop('disabled', true);
          } else {
            $(buttonSelector).prop('disabled', false);
          }
        });
      }
    
      addRow('#addExportRow', '.Export-Outlet tbody', counterExport);
      deleteRow('.deleteExportRow', '.Export-Outlet tbody');
    
      addRow('#addLocalRow', '.local-Outlet tbody', counterLocal);
      deleteRow('.deleteLocalRow', '.local-Outlet tbody');
    
      updateDeleteButtonState();
    });
  </script>
  <script>
      $(document).ready(function() {
        $('#approvedTable').DataTable();
        $('#ongoingTable').DataTable();

      });
  </script>
  <script>
    $(document).ready(function() {
      $('#sw-AddProject').smartWizard({
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
      $("#sw-AddProject").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
        var totalSteps = $('#sw-AddProject').find('ul li').length;
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
      $('#sw-AddProject').on('click', 'button', function() {
        // Your function goes here
        $('#sw-AddProject').smartWizard('fixHeight');
      });
    });
  </script>