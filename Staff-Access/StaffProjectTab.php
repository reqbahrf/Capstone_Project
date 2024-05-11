<style>
  .nav-link {
    background-color: black;
    color: white;
    /* Change the text color to white for better contrast */
  }

  .nav-link.active {
    font-weight: bold;
    background-color: white;
    color: black;
    border-top: 6px solid;
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
      <h1 class=" bg-dark text-white p-4">Projects</h1>
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
        <!-- Where the applicant table start -->
        <div>
          <table id="approvedTable" class="table table-striped" style="width:100%">
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
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Manager</td>
                <td>XYZ company</td>
                <td>
                  <p><strong>Business Address:</strong> tagum, Davao Del Norte <br> <strong>Type of Enterprise:</strong> Sole Proprietorship</p>
                  <p>
                    <Strong>
                      Assets:
                    </Strong> <br>
                    <span class="ps-2">Land: 100,000</span><br>
                    <span class="ps-2">Building: 100,000</span> <br>
                    <span class="ps-2">Equipment: 100,000</span>
                  </p>
                  <strong>Contact Details:</strong>
                  <p><strong class="p-2">Landline:</strong> 1234567 <br><Strong class="p-2">Mobile Phone:</Strong> 09123456789</p>
                </td>
                <td>
                  <p>
                    <strong>
                      Title of the Project:
                    </strong> <br>
                    <span class="ps-2"> "Imploving the business processes of LCC company"</span>
                    <br>
                    <strong>
                      Approved fund:
                    </strong>
                    <br>
                    <span class="ps-2">1,000,000</span><br>
                    <Strong>
                      Approved Date:
                    </Strong><br>
                    <span class="ps-2">5/05/2024</span>
                    <br><br>
                    <strong>
                      Assinged Staff:
                    </strong>
                    <br>
                    <span class="ps-2">Josh Nikly</span>
                  </p>
                </td>
                <td>
                  <button class="btn btn-primary">Review</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Sam Son</td>
                <td>Owner</td>
                <td>LCC company</td>
                <td>
                  <p><strong>Business Address:</strong> Carmen, Davao Del Norte <br> <strong>Type of Enterprise:</strong> Sole Proprietorship</p>
                  <p>
                    <Strong>
                      Assets:
                    </Strong> <br>
                    <span class="ps-2">Land: 144,000</span><br>
                    <span class="ps-2">Building: 122,000</span> <br>
                    <span class="ps-2">Equipment: 143,000</span>
                  </p>
                  <strong>Contact Details:</strong>
                  <p><strong class="p-2">Landline:</strong> 1234567 <br><Strong class="p-2">Mobile Phone:</Strong> 09123456789</p>
                </td>
                <td>
                  <p>
                    <strong>
                      Title of the Project:
                    </strong> <br>
                    <span class="ps-2"> "Imploving the business processes of LCC company"</span>
                    <br>
                    <strong>
                      Approved fund:
                    </strong>
                    <br>
                    <span class="ps-2">1,000,000</span>
                    <br>
                    <Strong>
                      Approved Date:
                    </Strong><br>
                    <span class="ps-2">5/05/2024</span>
                    <br><br>
                    <strong>
                      Assinged Staff:
                    </strong> <br>
                    <span class="ps-2">Josh Nikly</span>
                  </p>
                </td>
                <td>
                  <button class="btn btn-primary" disabled>Review</button>
                </td>
              </tr>
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
          <table id="ongoingTable" class="table table-striped" style="width:100%;">
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
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $('#approvedTable').DataTable();
        $('#ongoingTable').DataTable();
      });
    </script>