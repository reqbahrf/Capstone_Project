<style>
    div .cards {
        max-width: 24rem;
        min-width: 20rem;
        height: 15rem
    }

    .cards {
        transition: transform 0.3s ease-in-out;
    }

    .cards:hover {
        transform: scale(1.05);
        font-weight: bolder;
    }
</style>
<div>
    <div>
        <h1 class="bg-dark text-white p-4">Dashboard</h1>
    </div>
    <div class="row sparkboxes m-4">
        <div class="col-md-4">
            <div class="box box1 pt-2 bg-white shadow rounded-3">
                <div id="Applicant"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box2 pt-2  bg-white shadow rounded-3">
                <div id="Ongoing"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box3 pt-2 bg-white shadow rounded-3">
                <div id="Completed"></div>
            </div>
        </div>
    </div>
    <div class="m-4 p-3 shadow">
        <h3 class="p-4 bg-black text-white">Handle Projects</h3>
        <table id="handledProject" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Title</th>
                    <th>Firm Name</th>
                    <th>Firm Info</th>
                    <th>Owner Info</th>
                    <th>Refund Progress</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>