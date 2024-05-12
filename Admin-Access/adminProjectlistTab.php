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
<div class=" bg-dark text-white p-4">
    <h1>Project List</h1>
</div>
<!-- Applicant Modal -->
<div class="modal fade" id="ApplicantModal" tabindex="-1" aria-labelledby="ApplicantModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="ApplicantModalLabel">Applicant Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Applicant details go here -->

                <div class="container">
                    <fieldset>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <strong>Cooperator Name:</strong> Sam Son<br>
                                <strong>Designation:</strong> Owner<br>
                                <strong>Contact Details:</strong>
                                <p><strong class="p-2">Landline:</strong> 1234567 <br><Strong class="p-2">Mobile Phone:</Strong> 09123456789</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p><strong>Business Address:</strong> Carmen, Davao Del Norte <br> <strong>Type of Enterprise:</strong> Sole Proprietorship</p>
                                <p>
                                    <Strong>
                                        Assets:
                                    </Strong> <br>
                                    <span class="ps-2">Land: 144,000</span><br>
                                    <span class="ps-2">Building: 122,000</span><br>
                                    <span class="ps-2">Equipment: 143,000</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <strong>Contact Details:</strong>
                                <p><strong class="p-2">Landline:</strong> 1234567 <br><Strong class="p-2">Mobile Phone:</Strong> 09123456789</p>
                                <br>
                                <br>
                                <Strong>Evaluated by:</Strong>
                                <p class="ps-2">Staff-1</p>
                                <br>
                                <br>
                                <strong>Assign to:</strong>
                                <select class="form-select form-control-lg w-50" aria-label="Default select example">
                                    <option selected>Select Staff</option>
                                    <option value="staff1">Staff 1</option>
                                    <option value="staff2">Staff 2</option>
                                    <option value="staff3">Staff 3</option>
                                    <option value="staff4">Staff 4</option>
                                    <option value="staff5">Staff 5</option>
                                    <option value="staff6">Staff 6</option>
                                    <option value="staff7">Staff 7</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info"> Approve</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Applicant Modal End -->
<!-- Ongoing Modal -->
<div class="modal fade" id="OngoingModal" tabindex="-1" aria-labelledby="OngoingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="OngoingModalLabel">Ongoing Project Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Ongoing details go here -->

                <div class="container">
                    <fieldset>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <strong>Project Title:</strong> Imploving the Business.....<br>
                                <strong>Firm Name:</strong> XYZ Company<br>
                                <strong>Refund Progress:</strong> 500,000/1,000,000
                            </div>
                            <div class="col-12 col-md-6">
                                <p><strong>Business Address:</strong> tagum, Davao Del Norte <br> <strong>Type of Enterprise:</strong> Sole Proprietorship</p>
                                <p>
                                    <Strong>
                                        Assets:
                                    </Strong> <br>
                                    <span class="ps-2">Land: 100,000</span><br>
                                    <span class="ps-2">Building: 100,000</span><br>
                                    <span class="ps-2">Equipment: 100,000</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>Name:</strong> Jorge Walt</p>
                                <strong>Contact Details:</strong>
                                <p><strong class="p-2">Landline:</strong> 1234567 <br><Strong class="p-2">Mobile Phone:</Strong> 09123456789</p>
                                <br>
                                <br>
                                <Strong>Handled by:</Strong>
                                <select class="form-select form-control-lg w-50" aria-label="Default select example">
                                    <option selected>Select Staff</option>
                                    <option value="staff1">Staff 1</option>
                                    <option value="staff2">Staff 2</option>
                                    <option value="staff3">Staff 3</option>
                                    <option value="staff4">Staff 4</option>
                                    <option value="staff5">Staff 5</option>
                                    <option value="staff6">Staff 6</option>
                                    <option value="staff7">Staff 7</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" data-bs-dismiss="modal" onclick="loadPage('/org-access/viewCooperatorInfo.php','projectList');">View Project</button>
                <button class="btn btn-success">save</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="CompleteModal" tabindex="-1" aria-labelledby="CompleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="CompleteModalLabel">Complete Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Project Title:</h6><br>
                <p class="ps-2">"Imploving the Business....."</p>
            </div>
            <div class="modal-footer">
                <h6>Action to perform:</h6>
                <button class="btn btn-primary" id="dashboardLink" onclick="loadPage('staffProjectInfoTab.php','projectLink');">View</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>


<div class="mt-4">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Applicant</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ongoing</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Completed</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <!-- Where the applicant is displayed -->
            <div>
                <table id="applicant" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Client Name</th>
                            <th>Designation</th>
                            <th>Firm Name</th>
                            <th>Additional Info</th>
                            <th>Status</th>
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
                            <td>To be review</td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#ApplicantModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
                                        <path d="M56.177,16.832c-0.547-4.731-4.278-8.462-9.009-9.009C43.375,7.384,38.264,7,32,7S20.625,7.384,16.832,7.823c-4.731,0.547-8.462,4.278-9.009,9.009C7.384,20.625,7,25.736,7,32s0.384,11.375,0.823,15.168c0.547,4.731,4.278,8.462,9.009,9.009C20.625,56.616,25.736,57,32,57s11.375-0.384,15.168-0.823c4.731-0.547,8.462-4.278,9.009-9.009C56.616,43.375,57,38.264,57,32S56.616,20.625,56.177,16.832z M36,32c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,29.791,36,32z M36,45c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,42.791,36,45z M36,19c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,16.791,36,19z" fill="#000000" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sam Son</td>
                            <td>Owner</td>
                            <td>XYZ company</td>
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
                            <td>waiting for approval</td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#ApplicantModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
                                        <path d="M56.177,16.832c-0.547-4.731-4.278-8.462-9.009-9.009C43.375,7.384,38.264,7,32,7S20.625,7.384,16.832,7.823c-4.731,0.547-8.462,4.278-9.009,9.009C7.384,20.625,7,25.736,7,32s0.384,11.375,0.823,15.168c0.547,4.731,4.278,8.462,9.009,9.009C20.625,56.616,25.736,57,32,57s11.375-0.384,15.168-0.823c4.731-0.547,8.462-4.278,9.009-9.009C56.616,43.375,57,38.264,57,32S56.616,20.625,56.177,16.832z M36,32c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,29.791,36,32z M36,45c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,42.791,36,45z M36,19c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,16.791,36,19z" fill="#000000" />
                                    </svg>
                                </button>
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- Where the applicant table end -->
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <!-- Where the ongoing project are displayed -->
            <div>
                <table id="ongoing" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project Title</th>
                            <th>Firm Name</th>
                            <th>Firm Info</th>
                            <th>Owner Info</th>
                            <th>Refund Progress</th>
                            <th>Status</th>
                            <th>Handled by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>1</td>
                            <td>Imploving the Business.....</td>
                            <td>XYZ Company</td>
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

                            </td>
                            <td>
                                <p><strong>Name:</strong> Jorge Walt</p>
                                <strong>Contact Details:</strong>
                                <p><strong class="p-2">Landline:</strong> 1234567 <br><Strong class="p-2">Mobile Phone:</Strong> 09123456789</p>
                            </td>
                            <td>500,000/1,000,000</td>
                            <td>On-going</td>
                            <td>John Smitty</td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#OngoingModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
                                        <path d="M56.177,16.832c-0.547-4.731-4.278-8.462-9.009-9.009C43.375,7.384,38.264,7,32,7S20.625,7.384,16.832,7.823c-4.731,0.547-8.462,4.278-9.009,9.009C7.384,20.625,7,25.736,7,32s0.384,11.375,0.823,15.168c0.547,4.731,4.278,8.462,9.009,9.009C20.625,56.616,25.736,57,32,57s11.375-0.384,15.168-0.823c4.731-0.547,8.462-4.278,9.009-9.009C56.616,43.375,57,38.264,57,32S56.616,20.625,56.177,16.832z M36,32c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,29.791,36,32z M36,45c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,42.791,36,45z M36,19c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,16.791,36,19z" fill="#000000" />
                                    </svg>
                                </button>

                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Project Title</th>
                            <th>Firm Name</th>
                            <th>Firm Info</th>
                            <th>Owner Info</th>
                            <th>Refund Progress</th>
                            <th>Status</th>
                            <th>Handled by</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- Where the ongoing table end -->
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <!-- Where the Complete Table is displayed -->
            <div>
                <table id="completed" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project Title</th>
                            <th>Firm Name</th>
                            <th>Firm Info</th>
                            <th>Owner Info</th>
                            <th>Refund Progress</th>
                            <th>Status</th>
                            <th>Handled by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>1</td>
                            <td>Imploving the Business.....</td>
                            <td>XYZ Company</td>
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

                            </td>
                            <td>
                                <p><strong>Name:</strong> Jorge Walt</p>
                                <strong>Contact Details:</strong>
                                <p><strong class="p-2">Landline:</strong> 1234567 <br><Strong class="p-2">Mobile Phone:</Strong> 09123456789</p>
                            </td>
                            <td>1,000,000/1,000,000</td>
                            <td>Completed</td>
                            <td>John Smitty</td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#CompleteModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
                                        <path d="M56.177,16.832c-0.547-4.731-4.278-8.462-9.009-9.009C43.375,7.384,38.264,7,32,7S20.625,7.384,16.832,7.823c-4.731,0.547-8.462,4.278-9.009,9.009C7.384,20.625,7,25.736,7,32s0.384,11.375,0.823,15.168c0.547,4.731,4.278,8.462,9.009,9.009C20.625,56.616,25.736,57,32,57s11.375-0.384,15.168-0.823c4.731-0.547,8.462-4.278,9.009-9.009C56.616,43.375,57,38.264,57,32S56.616,20.625,56.177,16.832z M36,32c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,29.791,36,32z M36,45c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,42.791,36,45z M36,19c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,16.791,36,19z" fill="#000000" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Project Title</th>
                            <th>Firm Name</th>
                            <th>Firm Info</th>
                            <th>Owner Info</th>
                            <th>Refund Progress</th>
                            <th>Status</th>
                            <th>Handled by</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>


            <!-- Where the Complete Table end -->
        </div>
    </div>
</div>

<script>
    $(document).ready(function() { // Populate the table first
        $('#applicant').DataTable(); // Then initialize DataTables
        $('#ongoing').DataTable();
        $('#completed').DataTable();
    });
</script>