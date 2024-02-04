<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Tabel User</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <!-- <th>Role</th> -->
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="userTableBody"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="module">
  import { app } from './firebase-config.js';
  import { getDatabase, ref, onValue, child, remove } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

  const database = getDatabase(app);

  // Define hapusData in the global scope
  window.hapusData = function(userId, userName) {
    const confirmation = confirm(`Apakah Anda yakin ingin menghapus user ${userName}?`);
    if (confirmation) {
      const userRef = child(ref(database, 'Users'), userId);
      remove(userRef)
        .then(() => {
          console.log(`User ${userName} berhasil dihapus.`);
        })
        .catch((error) => {
          console.error(`Error deleting user: ${error.message}`);
        });
    }
  };

  const reference = ref(database, '/Users');

  onValue(reference, function (snapshot) {
    const tableBody = document.getElementById('userTableBody');
    // Clear existing table rows
    tableBody.innerHTML = "";

    let index = 1; // Initialize the index

    snapshot.forEach((childSnapshot) => {
      const userId = childSnapshot.key;
      const userData = childSnapshot.val();

      const row = tableBody.insertRow();
      row.innerHTML = `
        <td>${index}</td>
        <td>${userData.nama}</td>
        <td>${userData.email}</td>
        <td>${userData.noTelepon}</td>
        <td><button class="btn btn-sm btn-danger" onclick="hapusData('${userId}', '${userData.nama}')">Hapus</button></td>
      `;

      index++; // Increment the index for the next row
    });
  }, function (error) {
    console.error("Error fetching data: ", error);
  });
</script>
