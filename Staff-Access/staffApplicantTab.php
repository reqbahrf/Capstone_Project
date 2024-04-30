<div>
  <div class="">
      <h1 class=" bg-dark text-white p-4 m-2">Applicant:</h1>
  </div>
  <div>
      <table id="example" class="table table-striped mb-5" style="width:100%;">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Applicant Name</th>
                  <th>Firm Name</th>
                  <th>Firm Address</th>
                  <th>Age</th>
                  <th>Date Applied</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody id="tableBody">
          </tbody>
          <tfoot>
              <tr>
                  <th>Id</th>
                  <th>Applicant Name</th>
                  <th>Firm Name</th>
                  <th>Firm Address</th>
                  <th>Age</th>
                  <th>Date Applied</th>
                  <th>Action</th>
              </tr>
          </tfoot>
      </table>
  </div>
</div>
<script>
  function generateRandomData() {
      const names = ["Alice", "Bob", "Charlie", "David", "Eve"];
      const firms = ["Acme Corp", "Globex", "Initech", "Umbrella", "Vehement"];
      const addresses = ["123 Elm St", "456 Oak St", "789 Pine St", "101 Maple St", "202 Birch St"];
      const actions = ["Review"];

      return {
          id: Math.floor(Math.random() * 1000),
          name: names[Math.floor(Math.random() * names.length)],
          firm: firms[Math.floor(Math.random() * firms.length)],
          address: addresses[Math.floor(Math.random() * addresses.length)],
          age: Math.floor(Math.random() * 100),
          dateApplied: new Date().toISOString().slice(0, 10),
          action: actions[Math.floor(Math.random() * actions.length)]
      };
  }

  function populateTable(rows = 10) {
      const tbody = document.getElementById('tableBody');
      for (let i = 0; i < rows; i++) {
          const data = generateRandomData();
          const tr = document.createElement('tr');
          tr.innerHTML = `
              <td>${data.id}</td>
              <td>${data.name}</td>
              <td>${data.firm}</td>
              <td>${data.address}</td>
              <td>${data.age}</td>
              <td>${data.dateApplied}</td>
              <td><button class="btn btn-primary" onclick="alert('${data.action}');">${data.action}</button></td>
          `;
          tbody.appendChild(tr);
      }
  }

  $(document).ready(function() {
      populateTable(100); // Populate the table first
      new DataTable('#example'); // Then initialize DataTables
  });
</script>