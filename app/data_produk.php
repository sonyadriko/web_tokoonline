<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Tabel Produk</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Toko</th>
                  <th>Nama Produk</th>
                  <th>Harga Produk</th>
                  <th>Deskripsi Produk</th>
                  <th>Gambar</th>
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
  import { getAuth } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js';
  import { getDatabase, ref, onValue, remove } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

  const auth = getAuth(app);
  const database = getDatabase(app);
  const reference = ref(database, '/Produks');

  // Define hapusData in the global scope
  window.hapusData = function(userId) {
    if (auth.currentUser) {
      console.log('Deleting data for userId:', userId);
      const produkRef = ref(database, `Produks/${userId}`);
      console.log('Produk Reference:', produkRef);
      
      remove(produkRef)
        .then(() => {
          console.log('Data deleted successfully.');
        })
        .catch((error) => {
          console.error('Error deleting data:', error);
        });
    } else {
      console.error('User is not authenticated.');
    }
  };

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
        <td>${userData.idSeller}</td>
        <td>${userData.nama}</td>
        <td>${userData.harga}</td>
        <td>${userData.deskripsi}</td>
        <td><img src="${userData.image}" alt="Product Image" style="max-width: 100px; max-height: 100px;"></td>
        <td>
          <button class="btn btn-sm btn-danger" onclick="hapusData('${userId}')">Hapus</button>
        </td>
      `;

      rowIndex++; // Increment the rowIndex for the next row
    });
  }, function(error) {
    console.error("Data error: " + error);
  });
</script>
