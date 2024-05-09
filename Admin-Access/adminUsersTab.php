<div>
  <div class="">
    <h1 class=" bg-dark text-white p-4 m-2">User Access</h1>
  </div>
  <div class="px-3">
    <div class="d-flex justify-content-end">
      <button class="btn btn-primary">Add User</button>
    </div>
    <div>
      <table id="user_staff" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>userName</th>
            <th>password</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          <tr>
            <td>1</td>
            <td>Pol You</td>
            <td>DOST_SETUP-Polyo</td>
            <td>43y5uiy3uiy88t78uiqy58yuikjqhjkhjkhq475y78uhjhfhwfg74792jtg8934258uihg</td>
            <td><strong>has access</strong></td>
            <td>
              <button class="btn btn-primary">Toggle Acess</button>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Michele Sam</td>
            <td>DOST_SETUP-MicheleSam</td>
            <td>fhjkahhu4uhfhjhjhajshjfhuu4888qkkffhbqjjeruuakkfjeueuqiogkhadhgjhjhue</td>
            <td><strong>no access</strong></td>
            <td>
              <button class="btn btn-primary">Toggle Access</button>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>userName</th>
            <th>password</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('#user_staff').DataTable(); // Then initialize DataTables
  });
</script>