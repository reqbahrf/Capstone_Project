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
    <div class="bg-white bg-white d-flex justify-content-start">
      <div id="progressBar"></div>
    </div>
    <div class="row px-2">
      <div class="col-md-6">
        <fieldset>
          <legend>
            <h6>Production Generated:</h6>
          </legend>
          <div id="productionGeneChart">
          </div>
        </fieldset>
      </div>
      <div class="col-md-6">
        <fieldset>
          <legend>
            <h6>Employment Generated</h6>
          </legend>
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
  </fieldset>
</div>