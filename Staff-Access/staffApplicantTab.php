<div>
    <div class="">
        <h1 class=" bg-dark text-white p-4 m-2">Applicant:</h1>
    </div>
    <!-- Where the applicant table start -->
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
                        <button class="btn btn-primary">Review</button>
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
    });
</script>