<style>
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
            <div class="checkbox-wrapper-26 mb-3 ms-3">
              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="_checkbox-TNA" value="TNA" onclick="checkOrder(this, null)">
                <label for="_checkbox-TNA" class="me-2">
                  <div class="tick_mark"></div>
                </label>
                <span>TNA</span>
              </div>
            </div>
            <div class="checkbox-wrapper-26 mb-3 ms-3">
              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="_checkbox-PDA" value="Project Deliberation Approval" onclick="checkOrder(this, '_checkbox-TNA')" disabled>
                <label for="_checkbox-PDA" class="me-2">
                  <div class="tick_mark"></div>
                </label>
                <span>Project Deliberation Approval</span>
              </div>
            </div>
            <div class="checkbox-wrapper-26 mb-3 ms-3">
              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="_checkbox-PDC" value="PDC-post Dated Cheque" onclick="checkOrder(this, '_checkbox-PDA')" disabled>
                <label for="_checkbox-PDC" class="me-2">
                  <div class="tick_mark"></div>
                </label>
                <span>PDC-post Dated Cheque</span>
              </div>
            </div>
            <div class="checkbox-wrapper-26 mb-3 ms-3">
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
  (function() {
    window.checkOrder = function(currentCheckbox, previousCheckboxId) {
      if (previousCheckboxId) {
        let previousCheckbox = document.getElementById(previousCheckboxId);
        if (!previousCheckbox.checked) {
          currentCheckbox.checked = false;
          alert('Please check the previous item first.');
        } else {
          enableNextCheckbox(currentCheckbox);
        }
      } else {
        enableNextCheckbox(currentCheckbox);
      }

      // If unchecking, uncheck and disable all subsequent checkboxes
      if (!currentCheckbox.checked) {
        let parentDiv = currentCheckbox.closest('.checkbox-wrapper-26');
        let nextDiv = parentDiv.nextElementSibling;
        while (nextDiv) {
          let nextCheckbox = nextDiv.querySelector('input[type="checkbox"]');
          if (nextCheckbox) {
            nextCheckbox.checked = false;
            nextCheckbox.disabled = true;
          }
          nextDiv = nextDiv.nextElementSibling;
        }
      }
    }

    function enableNextCheckbox(currentCheckbox) {
      let parentDiv = currentCheckbox.closest('.checkbox-wrapper-26');
      let nextDiv = parentDiv.nextElementSibling;
      let nextCheckbox = nextDiv ? nextDiv.querySelector('input[type="checkbox"]') : null;

      if (nextCheckbox) {
        nextCheckbox.disabled = false; // Enable the next checkbox
      }
    }
  })();
</script>