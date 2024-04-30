<div class="">
      <h1 class=" bg-dark text-white p-4 m-2">Project List</h1>
  </div>
  <div>
  <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
              <th>id</th>
              <th>Project Name</th>
              <th>Client Name</th>
              <th>Enterprise Level</th>
              <th>status</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody id="tableBody">
        </tbody>
        <tfoot>
            <tr>
              <th>id</th>
              <th>Project Name</th>
              <th>Client Name</th>
              <th>Enterprise Level</th>
              <th>status</th>
              <th>Action</th>
            </tr>
        </tfoot>
    </table>
  </div>
</div>
<script>
  function generateRandomProject(id) {
      const projectNames = ['Alpha', 'Beta', 'Gamma', 'Delta', 'Epsilon'];
      const clientNames = ['Client X', 'Client Y', 'Client Z', 'Client W', 'Client V'];
      const enterpriseLevels = ['High', 'Medium', 'Micro'];
      const statuses = ['Active', 'Inactive', 'Pending'];

      return {
          id: id,
          projectName: projectNames[Math.floor(Math.random() * projectNames.length)],
          clientName: clientNames[Math.floor(Math.random() * clientNames.length)],
          enterpriseLevel: enterpriseLevels[Math.floor(Math.random() * enterpriseLevels.length)],
          status: statuses[Math.floor(Math.random() * statuses.length)],
          action: 'View Details'
      };
  }

  function populateTable(rows = 10) {
      const tbody = document.getElementById('tableBody');
      tbody.innerHTML = ''; // Clear existing rows
      for (let i = 0; i < rows; i++) {
          const data = generateRandomProject(i+1);
          const tr = document.createElement('tr');
          tr.innerHTML = `
              <td>${data.id}</td>
              <td>${data.projectName}</td>
              <td>${data.clientName}</td>
              <td>${data.enterpriseLevel}</td>
              <td>${data.status}</td>
              <td><button class="btn btn-primary" onclick="alert('Action: ${data.action}');">${data.action}</button></td>
          `;
          tbody.appendChild(tr);
      }
  }

  $(document).ready(function() {
      populateTable(100); // Populate the table first
      $('#example').DataTable(); // Then initialize DataTables
});
</script>