    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Users</th>
                    <th>ID Alamat</th>
                    <th>Nama Toko</th>
                  </tr>
                  </thead>
                  <tbody id="userTableBody"></tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <script type="module">
  import { app } from './firebase-config.js';
  import { getDatabase, ref, onValue, remove } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";
  
  const database = getDatabase(app);
  const reference = ref(database, '/Toko');

  onValue(reference, function (snapshot) {
    const tableBody = document.getElementById('userTableBody');

    // Clear existing table rows
    tableBody.innerHTML = "";

    let rowIndex = 1; // Initialize the rowIndex

    snapshot.forEach((childSnapshot) => {
      const userId = childSnapshot.key;
      const userData = childSnapshot.val();

      const row = tableBody.insertRow();
      row.innerHTML = `
        <td>${rowIndex}</td>
        <td>${userData.id_users}</td>
        <td>${userData.id_alamat}</td>
        <td>${userData.nama}</td>
        <td>
          <button class="btn btn-sm btn-danger" onclick="hapusData('${userId}')">Hapus</button>
        </td>
      `;

      rowIndex++; // Increment the rowIndex for the next row
    });
  }, function(error) {
    console.error("Data error: " + error);
  });

  function hapusData(userId) {
    // Assuming dbref is a reference to your database
    // Make sure you have dbref defined
    const produkRef = ref(database, `Produks/${userId}`);
    remove(produkRef);
  }

  function viewData(userId, email, nama, noTelepon, role) {
    // Set values in the modal
    document.getElementById('userId').innerText = userId;
    document.getElementById('email').innerText = email;
    document.getElementById('nama').innerText = nama;
    document.getElementById('noTelepon').innerText = noTelepon;
    document.getElementById('role').innerText = role;

    // Assuming you have a modal with the id 'modal-view'
    $('#modal-view').modal('show');
  }
</script>
