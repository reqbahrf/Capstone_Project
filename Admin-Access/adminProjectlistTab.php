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
                                <button class="btn btn-primary">View</button>
                                <button class="btn btn-danger">Delete</button>
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
                                <button class="btn btn-primary">View</button>
                                <button class="btn btn-danger">Delete</button>
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
                                <button class="btn btn-primary" id="dashboardLink" onclick="loadPage('staffProjectInfoTab.php','projectLink');">View</button>
                                <button class="btn btn-secondary">Edit</button>
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
                                <button class="btn btn-primary" id="dashboardLink" onclick="loadPage('staffProjectInfoTab.php','projectLink');">View</button>
                                <button class="btn btn-secondary">Edit</button>
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