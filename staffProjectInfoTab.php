<style>
  .nav-link {
    background-color: black;
    color: white; /* Change the text color to white for better contrast */
}

.nav-link.active {
    background-color: white;
    color: black; /* Change the text color to black for better contrast */
}
</style>
<div>
  <div >
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
      <Div class="m-2 p-2">
        <!-- create a checklist or checkboxs here for the following requirments; TNA, Project Deliberation Approval, PDC-post Dated Cheque, Fund release and monitoring. -->
        <form action="">
          <input type="checkbox" id="checkboxTNA" name="requirements[]" value="TNA" onclick="checkOrder(this, null)"> TNA<br>
          <input type="checkbox" id="checkboxPDA" name="requirements[]" value="Project Deliberation Approval" onclick="checkOrder(this, 'checkboxTNA')" disabled> Project Deliberation Approval<br>
          <input type="checkbox" id="checkboxPDC" name="requirements[]" value="PDC-post Dated Cheque" onclick="checkOrder(this, 'checkboxPDA')" disabled> PDC-post Dated Cheque<br>
          <input type="checkbox" id="checkboxFR" name="requirements[]" value="Fund release" onclick="checkOrder(this, 'checkboxPDC')" disabled> Fund release<br>
        </form>
      </Div>
    </div>
    <div class="tab-pane fade" id="Project-tab-pane" role="tabpanel" aria-labelledby="Project-tab" tabindex="0">
      <!-- Where the project infomation sheets will be displayed. -->
      <?php include("ProjectInformationSheetTable.php"); ?>
    </div>
    <div class="tab-pane fade" id="ProjectData-tab-pane" role="tabpanel" aria-labelledby="ProjectData-tab" tabindex="0">
      <!-- Where the project Data sheets will be displayed. -->
      <?php include("ProjectDataSheetTable.php"); ?>
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
</div>

<script>
function checkOrder(currentCheckbox, previousCheckboxId) {
    if (previousCheckboxId) {
        var previousCheckbox = document.getElementById(previousCheckboxId);
        if (!previousCheckbox.checked) {
            currentCheckbox.checked = false;
            alert('Please check the previous item first.');
        } else {
            enableNextCheckbox(currentCheckbox);
        }
    } else {
        enableNextCheckbox(currentCheckbox);
    }

    // If unchecking, uncheck all subsequent checkboxes
    if (!currentCheckbox.checked) {
        var nextCheckbox = currentCheckbox.nextElementSibling.nextElementSibling;
        while (nextCheckbox && nextCheckbox.type === "checkbox") {
            nextCheckbox.checked = false;
            nextCheckbox.disabled = true;
            nextCheckbox = nextCheckbox.nextElementSibling.nextElementSibling;
        }
    }
}

function enableNextCheckbox(currentCheckbox) {
    var nextCheckbox = currentCheckbox.nextElementSibling.nextElementSibling;
    if (nextCheckbox && nextCheckbox.type === "checkbox") {
        nextCheckbox.disabled = false;
    }
}

</script>
