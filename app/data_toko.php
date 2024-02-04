    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tabel Toko</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Alamat</th>
                    <th>Nama Toko</th>
                    <th>Action</th>
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

    snapshot.forEach((userSnapshot) => {
      const userId = userSnapshot.key;

      userSnapshot.forEach((tokoSnapshot) => {
        const tokoId = tokoSnapshot.key;
        const tokoData = tokoSnapshot.val();

        // Fetch user details based on id_users
        const userId = tokoData.id_users;
        const userRef = ref(database, `/Users/${userId}`);
        onValue(userRef, (userSnapshot) => {
          const userData = userSnapshot.val();

          // Fetch address details based on id_alamat
          const alamatId = tokoData.id_alamat;
          const alamatRef = ref(database, `/Alamat/${userId}/${alamatId}`);
          console.log(alamatId);
          onValue(alamatRef, (alamatSnapshot) => {
            const alamatData = alamatSnapshot.val();

            const row = tableBody.insertRow();
            row.innerHTML = `
              <td>${rowIndex}</td>
              <td>${userData.nama}</td>
              <td>${alamatData.alamat}</td>
              <td>${tokoData.nama}</td>
              <td>
                <button class="btn btn-sm btn-danger" onclick="hapusData('${userId}')">Hapus</button>
              </td>
            `;

            rowIndex++; // Increment the rowIndex for the next row
          });
        });
      });
    });
  }, function (error) {
    console.error("Data error: " + error);
  });

  window.hapusData = function (userId) {
    const tokoRef = ref(database, `Toko/${userId}`);
    console.log(tokoRef);
  };

</script>
<!-- remove(tokoRef); -->