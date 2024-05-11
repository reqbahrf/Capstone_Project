<div>
  <h1 class=" bg-dark text-white p-4 m-2">Dashboard</h1>
</div>
<div class="row g-3 mt-3 ms-3 me-3 mb-2 p-3 bg-white">
  <fieldset>
    <legend class="w-auto">
      <h2>Client Info:</h2>
    </legend>
    <div class="p-3">
      <div class="form-group row mt-2">
        <label for="project_title" class="col-12 col-sm-2"><strong>Project Title:</strong></label>
        <div class="col-12 col-sm-10">
          <input type="text" class="form-control" id="project_title" value="[Project Title Value]" readonly>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="firm_name" class="col-12 col-sm-2"><strong>Name of Firm:</strong></label>
        <div class="col-12 col-sm-10">
          <input type="text" class="form-control" id="firm_name" value="[Firm Name Value]" readonly>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="address" class="col-12 col-sm-2"><strong>Address:</strong></label>
        <div class="col-12 col-sm-10">
          <input type="text" class="form-control" id="address" value="[Address Value]" readonly>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="contact_person" class="col-12 col-sm-2"><strong>Contact Person:</strong></label>
        <div class="col-12 col-sm-4">
          <input type="text" class="form-control" id="contact_person" value="[Contact Person Value]" readonly>
        </div>
        <label for="designation" class="col-12 col-sm-2"><strong>Designation:</strong></label>
        <div class="col-12 col-sm-4">
          <input type="text" class="form-control" id="designation" value="[Designation Value]" readonly>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="landline" class="col-12 col-sm-2"><strong>Landline:</strong></label>
        <div class="col-12 col-sm-2">
          <input type="text" class="form-control" id="landline" value="[Landline Value]" readonly>
        </div>
        <label for="mobile_phone" class="col-12 col-sm-2"><strong>Mobile Phone:</strong></label>
        <div class="col-12 col-sm-2">
          <input type="text" class="form-control" id="mobile_phone" value="[Mobile Phone Value]" readonly>
        </div>
        <label for="email" class="col-12 col-sm-2"><strong>Email Address:</strong></label>
        <div class="col-12 col-sm-2">
          <input type="text" class="form-control" id="email" value="[Email Address Value]" readonly>
        </div>
      </div>
    </div>
  </fieldset>
  <fieldset class="mt-4">
    <legend class="w-auto">
      <h2>Progress:</h2>
    </legend>
    <div class="container">
      <div class="row">
        <div class="col d-flex flex-column align-items-center">
          <!-- Add content for ProgressPer div here -->
          <!-- Assuming your ApexChart is here -->
          <div id="ProgressPer" class="mx-auto" style="order: 1;"></div>
          <div class="text-center" style="order: 2;">
            <h5>750,000/1,000,000</h5>
          </div>
        </div>
        <div class="col">
          <div>

          </div>
          <div>
            <fieldset class="w-auto">
              <legend class="w-auto">
                <h6><strong>Refund History:</strong></h6>
              </legend>
              <table class="table">
                <thead>
                  <tr>
                    <th>Amount</th>
                    <th>Due For</th>
                    <th>Remark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>₱83,000.33</td>
                    <td>1/15/2022</td> <!-- First quarter -->
                    <td><span class="badge rounded-pill text-bg-success">Refunded</span></td>
                  </tr>
                  <tr>
                    <td>₱83,000.33</td>
                    <td>4/15/2022</td> <!-- Second quarter -->
                    <td><span class="badge rounded-pill text-bg-success">Refunded</span></td>
                  </tr>
                  <tr>
                    <td>₱83,000.33</td>
                    <td>7/15/2022</td> <!-- Third quarter -->
                    <td><span class="badge rounded-pill text-bg-success">Refunded</span></td>
                  </tr>
                  <tr>
                    <td>₱83,000.33</td>
                    <td>10/15/2022</td> <!-- Fourth quarter -->
                    <td><span class="badge rounded-pill text-bg-success">Refunded</span></td>
                  </tr>
                </tbody>
              </table>
            </fieldset>
          </div>
        </div>
      </div>
    </div>

    <div id="stackColumnChartPercent">

    </div>

  </fieldset>
</div>