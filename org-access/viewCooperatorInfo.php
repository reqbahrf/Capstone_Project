<style>
  .increase_in::before {
    content: "";
    display: inline-block;
    width: 10px;
    height: 10px;
    background-color: #25A0FC;
    margin-right: 5px;
  }

  .decrease_in::before {
    content: "";
    display: inline-block;
    width: 10px;
    height: 10px;
    background-color: #FEB019;
    margin-right: 5px;
  }
</style>
<div class="row g-3 mt-3 ms-1 me-1 mb-2 p-3">
  <fieldset>
    <legend class="w-auto">
      <h2>Cooperator Info:</h2>
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
  </fieldset>
  <fieldset>
    <legend class="w-auto">
      <h2>Cooperator's Progress:</h2>
    </legend>
    <div class="row mb-4">
      <div class="col d-flex flex-column align-items-center">
        <!-- Add content for ProgressPer div here -->
        <!-- Assuming your ApexChart is here -->
        <div id="progressBar" class="mx-auto" style="order: 1;"></div>
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
    <div class="row px-2">
      <div class="col-md-6">
        <fieldset>
          <legend>
            <h6>Production Generated:</h6>
          </legend>
          <div class="text-center">
            <span class="increase_in px-3">Increased in Production</span>
            <span class="decrease_in">Decreased in Production</span>
          </div>
          <div id="productionGeneChart">
          </div>
        </fieldset>
      </div>
      <div class="col-md-6">
        <fieldset>
          <legend>
            <h6>Employment Generated</h6>
          </legend>
          <div class="text-center">
            <span class="increase_in px-3">Increased in Employment</span>
            <span class="decrease_in">Decreased in Employment</span>
          </div>
          <div id="employmentGeneChart">
          </div>
        </fieldset>
      </div>
    </div>

  </fieldset>
  <fieldset>
    <legend class="w-auto">
      <h2>Requirements:</h2>
    </legend>
    <fieldset class="mt-4">
      <!-- Your first fieldset content goes here -->
      <legend class="w-auto">
        <h5>Application requirements</h5>
      </legend>
      <div>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <input class="form-check-input me-1" type="checkbox" value="" id="letterOfIntentCheckbox">
              <label class="form-check-label" for="letterOfIntentCheckbox">Letter of Intent</label>
              <a href="path/to/letter_of_intent.pdf" target="_blank">Review File</a>
            </div>
            <span class="badge bg-success">Reviewed</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <input class="form-check-input me-1" type="checkbox" value="" id="dtiSecCdaCheckbox">
              <label class="form-check-label" for="dtiSecCdaCheckbox">DTI/SEC/CDA</label>
              <a href="path/to/dti_sec_cda.pdf" target="_blank">Review File</a>
            </div>
            <span class="badge bg-success">Reviewed</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <input class="form-check-input me-1" type="checkbox" value="" id="businessPermitCheckbox">
              <label class="form-check-label" for="businessPermitCheckbox">Business Permit</label>
              <a href="path/to/business_permit.pdf" target="_blank">Review File</a>
            </div>
            <span class="badge bg-success">Reviewed</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <input class="form-check-input me-1" type="checkbox" value="" id="fdaLtoCheckbox">
              <label class="form-check-label" for="fdaLtoCheckbox">FDA/LTO</label>
              <a href="path/to/fda_lto.pdf" target="_blank">Review File</a>
            </div>
            <span class="badge bg-success">Reviewed</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <input class="form-check-input me-1" type="checkbox" value="" id="officialReceiptCheckbox">
              <label class="form-check-label" for="officialReceiptCheckbox">Official Receipt of the Business</label>
              <a href="path/to/official_receipt.pdf" target="_blank">Review File</a>
            </div>
            <span class="badge bg-success">Reviewed</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <input class="form-check-input me-1" type="checkbox" value="" id="govValidIdCheckbox">
              <label class="form-check-label" for="govValidIdCheckbox">Copy of Government Valid ID</label>
              <a href="path/to/government_id.pdf" target="_blank">Review File</a>
            </div>
            <span class="badge bg-success">Reviewed</span>
          </li>
        </ul>
      </div>
    </fieldset>
  </fieldset>
</div>