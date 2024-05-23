<?php

$conn = include_once '../db_connection/database_connection.php';


function getApplicant($conn)
{
    $sql = "SELECT personal_info.user_id, personal_info.f_name, personal_info.l_name, personal_info.designation, personal_info.mobile_number, personal_info.email_address, personal_info.landline, business_info.firm_name, business_info.enterprise_type, business_info.B_address, assets.building_value, assets.equipment_value, assets.working_capital, application_info.date_applied 

    FROM personal_info 
    INNER JOIN business_info ON business_info.user_info_id = personal_info.id 
    INNER JOIN assets ON assets.business_id = business_info.id
    INNER JOIN application_info ON application_info.business_id = business_info.id;";

    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows;
}

$applicants = getApplicant($conn);

foreach ($applicants as $applicant) {
    $ApplicantTable [] = $applicant;
}

            // [user_id] => 1
            // [f_name] => Reanz Arthur 
            // [l_name] => Monera
            // [designation] => CEO
            // [mobile_number] => 0982-322-3232
            // [email_address] => re@erer
            // [landline] => 1121
            // [firm_name] => Resf
            // [enterprise_type] => Partnership
            // [B_address] => Mats
            // [building_value] => 1.00
            // [equipment_value] => 343.00
            // [working_capital] => 43.00
            // [date_applied] => 2024-05-22








?>
<div>
    <h4 class="p-3">Applicant:</h4>
</div>
<div class="bg-white py-2 rounded-5">
    <div class="modal fade" id="ApplicantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title" id="exampleModalLabel">Info</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div>
                        <fieldset class="mt-2">
                            <legend class="w-auto">
                                <h5>Firm Info</h5>
                            </legend>
                            <div class="p-3">
                                <div class="form-group row mt-2">
                                    <label for="firm_name" class="col-12 col-sm-2">Name of Firm:</label>
                                    <div class="col-12 col-sm-10">
                                        <input type="text" class="form-control" id="firm_name" value="[Firm Name Value]" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="address" class="col-12 col-sm-2">Address:</label>
                                    <div class="col-12 col-sm-10">
                                        <input type="text" class="form-control" id="address" value="[Address Value]" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="contact_person" class="col-12 col-sm-2">Contact Person:</label>
                                    <div class="col-12 col-sm-4">
                                        <input type="text" class="form-control" id="contact_person" value="[Contact Person Value]" readonly>
                                    </div>
                                    <label for="designation" class="col-12 col-sm-2">Designation:</label>
                                    <div class="col-12 col-sm-4">
                                        <input type="text" class="form-control" id="designation" value="[Designation Value]" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="enterpriseType" class="col-12 col-sm-2">Type Of Enterprise</label>
                                    <div class="col-12 col-sm-10">
                                        <select class="form-select" id="enterpriseType">
                                            <option selected value="Sole Proprietorship">Sole Proprietorship</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Corporation">Corporation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="landline" class="col-12 col-sm-2">Landline:</label>
                                    <div class="col-12 col-sm-2">
                                        <input type="text" class="form-control" id="landline" value="[Landline Value]" readonly>
                                    </div>
                                    <label for="mobile_phone" class="col-12 col-sm-2">Mobile Phone:</label>
                                    <div class="col-12 col-sm-2">
                                        <input type="text" class="form-control" id="mobile_phone" value="[Mobile Phone Value]" readonly>
                                    </div>
                                    <label for="email" class="col-12 col-sm-2">Email Address:</label>
                                    <div class="col-12 col-sm-2">
                                        <input type="text" class="form-control" id="email" value="[Email Address Value]" readonly>
                                    </div>
                                </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-8">
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
                            </div>
                            <div class="col-md-4">
                                <fieldset class="mt-4">
                                    <!-- Your second fieldset content goes here -->
                                    <legend>
                                        <h5>Schedule an Evaluation</h5>
                                    </legend>
                                    <div class="input-group date" id="datepicker" data-date-format="mm-dd-yyyy">
                                        <input type="text" id="bDate" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
                                                    <path d="M8 8L8 20L56 20L56 8L46 8L46 9C46 10.657 44.657 12 43 12C41.343 12 40 10.657 40 9L40 8L24 8L24 9C24 10.657 22.657 12 21 12C19.343 12 18 10.657 18 9L18 8L8 8 z M 8 22L8 56L32.259766 56C31.739766 54.74 31.379687 53.4 31.179688 52L12 52L12 22.169922L8 22 z M 52 23.830078L52 32.359375C53.41 32.639375 54.75 33.089453 56 33.689453L56 24L52 23.830078 z M 19 29L19 35L25 35L25 29L19 29 z M 29 29L29 35L35 35L35 29L29 29 z M 39 29L39 34.810547C40.8 33.640547 42.82 32.789375 45 32.359375L45 29L39 29 z M 49 34C40.739414 34 34 40.73942 34 49C34 57.26058 40.739414 64 49 64C57.260586 64 64 57.26058 64 49C64 40.73942 57.260586 34 49 34 z M 49 38C55.098827 38 60 42.901177 60 49C60 55.098823 55.098827 60 49 60C42.901173 60 38 55.098823 38 49C38 42.901177 42.901173 38 49 38 z M 19 39L19 45L25 45L25 39L19 39 z M 29 39L29 45L31.589844 45C32.169844 42.8 33.17 40.77 34.5 39L29 39 z M 48 41L47.039062 49.630859L47.009766 49.859375L47.199219 50L53.439453 54.509766L54.800781 53.039062L50.830078 48.289062L50 41L48 41 z" fill="#000000" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                    <button class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="m-3">
        <!-- Where the applicant table start -->
        <table id="applicant" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Client Name</th>
                    <th>Designation</th>
                    <th>Firm Name</th>
                    <th>Additional Info</th>
                    <th>Date Applied</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php foreach ($ApplicantTable as $item): ?>
                    <tr>
                        <td><?= $item['user_id'] ?></td>
                        <td><?= $item['f_name'] . " " . $item['l_name'] ?></td>
                        <td><?= $item['designation'] ?></td>
                        <td><?= $item['firm_name'] ?></td>
                        <td>
                            <p><strong>Business Address:</strong> <?= $item['B_address'] ?> <br> <strong>Type of Enterprise:</strong> <?= $item['enterprise_type'] ?></p>
                            <p>
                                <Strong>Assets:</Strong> <br>
                                <span class="ps-2">Building: <?= number_format($item['building_value'], 2) ?></span><br>
                                <span class="ps-2">Equipment: <?= number_format($item['equipment_value'], 2) ?></span> <br>
                                <span class="ps-2">Working Capital: <?= number_format($item['working_capital'], 2) ?></span>
                            </p>
                            <strong>Contact Details:</strong>
                            <p>
                                <strong class="p-2">Landline:</strong> <?= $item['landline'] ?> <br>
                                <Strong class="p-2">Mobile Phone:</Strong> <?= $item['mobile_number'] ?> <br>
                                <strong class="p-2">Email:</strong> <?= $item['email_address'] ?>
                            </p>
                        </td>
                        <td><?= $item['date_applied'] ?></td>
                        <td>To be review</td>
                        <td>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#ApplicantModal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
                                    <path d="M56.177,16.832c-0.547-4.731-4.278-8.462-9.009-9.009C43.375,7.384,38.264,7,32,7S20.625,7.384,16.832,7.823c-4.731,0.547-8.462,4.278-9.009,9.009C7.384,20.625,7,25.736,7,32s0.384,11.375,0.823,15.168c0.547,4.731,4.278,8.462,9.009,9.009C20.625,56.616,25.736,57,32,57s11.375-0.384,15.168-0.823c4.731-0.547,8.462-4.278,9.009-9.009C56.616,43.375,57,38.264,57,32S56.616,20.625,56.177,16.832z M36,32c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,29.791,36,32z M36,45c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,42.791,36,45z M36,19c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,16.791,36,19z" fill="#000000" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Client Name</th>
                    <th>Designation</th>
                    <th>Firm Name</th>
                    <th>Additional Info</th>
                    <th>Date Applied</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- Where the applicant table end -->
</div>
<script>
    $(document).ready(function() {
        new DataTable('#applicant'); // Then initialize DataTables
        $('#datepicker').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "opens": "center",
            "drops": "up",
            "autoUpdateInput": false
        });

        $('#datepicker').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('#datepicker').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
</script>