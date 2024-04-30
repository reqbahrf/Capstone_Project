
<div>
<div class="">
      <h1 class=" bg-dark text-white p-4 m-2">User Access</h1>
  </div>
  <div>
  <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
              <th>id</th>
              <th>Name</th>
              <th>Position</th>
              <th>userName</th>
              <th>password</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            
        </tbody>
        <tfoot>
            <tr>
              <th>id</th>
              <th>Name</th>
              <th>Position</th>
              <th>userName</th>
              <th>password</th>
              <th>Action</th>
            </tr>
        </tfoot>
    </table>
  </div>
</div>

<script>
function generateRandomData() {
  const names = ["Alice", "Bob", "Charlie", "David", "Eve"];
  const positions = ["Manager", "Assistant", "Clerk", "Supervisor"];
  const usernames = ["alice123", "bob234", "charlie345", "david456", "eve567"];
  const passwords = ["pass1", "pass2", "pass3", "pass4", "pass5"];
  const randomHashes = passwords.map(() => {
    // Generate random bytes and convert to hex
    return crypto.getRandomValues(new Uint8Array(16)).join("");
  });

  const actions = ["Permit Access"];

  return {
    id: Math.floor(Math.random() * 1000),
    name: names[Math.floor(Math.random() * names.length)],
    position: positions[Math.floor(Math.random() * positions.length)],
    username: usernames[Math.floor(Math.random() * usernames.length)],
    password: randomHashes[Math.floor(Math.random() * randomHashes.length)],
    action: actions[Math.floor(Math.random() * actions.length)]
  };
}

function populateTable(rows = 10) {
  const tbody = document.getElementById('tableBody');
  tbody.innerHTML = ''; // Clear existing rows
  for (let i = 0; i < rows; i++) {
    const data = generateRandomData();
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td>${data.id}</td>
      <td>${data.name}</td>
      <td>${data.position}</td>
      <td>${data.username}</td>
      <td>${data.password}</td>
      <td><button class="btn btn-primary" onclick="alert('Action: ${data.action}');">${data.action}</button></td>
    `;
    tbody.appendChild(tr);
  }
}

$(document).ready(function() {
  populateTable(15); // Populate the table first
  $('#example').DataTable(); // Then initialize DataTables
});
</script>