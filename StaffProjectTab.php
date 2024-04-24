<style>
  .nav-link {
    background-color: black;
    color: white; /* Change the text color to white for better contrast */
}

.nav-link.active {
    font-weight: bolder;
    background-color: white;
    color: black; /* Change the text color to black for better contrast */
}
</style>
<div>
    <div>
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
                  <button class="btn btn-secondary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
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
                  <button class="btn btn-primary"  onclick="loadPage('staffProjectInfoTab.php');">Create</button>
                  <button class="btn btn-secondary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
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
                    <button class="btn btn-primary"  id="dashboardLink" onclick="loadPage('staffProjectInfoTab.php','projectLink');">View</button>
                    <button class="btn btn-secondary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
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
          <h1>3</h1>
      </div>
    </div>
<script> new DataTable('#example');</script>
