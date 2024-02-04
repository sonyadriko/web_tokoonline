<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable Produk</h3>
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

  <!-- Modal for Product Details -->
  <div class="modal fade" id="productDetailsModal" tabindex="-1" role="dialog" aria-labelledby="productDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productDetailsModalLabel">Product Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="productDetailsBody">
          <!-- Product details will be displayed here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="module">
  import { app } from './firebase-config.js';
  import { getDatabase, ref, onValue, remove } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

  document.addEventListener('DOMContentLoaded', function () {
  const database = getDatabase(app);
  const reference = ref(database, '/Produks');

  onValue(reference, function (snapshot) {
    const tableBody = document.getElementById('userTableBody');

    // Clear existing table rows
    tableBody.innerHTML = "";

    let rowIndex = 1; // Initialize the rowIndex

    snapshot.forEach((childSnapshot) => {
      const userId = childSnapshot.key;
      const userData = childSnapshot.val();

      const tokoId = userData.idToko;
      const userId2 = userData.idSeller;
      const tokoRef = ref(database, `/Toko/${userId2}/${tokoId}`);
      onValue(tokoRef, (snapshot) => {
        const tokoData = snapshot.val();
        const row = tableBody.insertRow();
      row.innerHTML = `
        <td>${rowIndex}</td>
        <td>${tokoData.nama}</td>
        <td>${userData.nama}</td>
        <td>${userData.harga}</td>
        <td>${userData.deskripsi}</td>
        <td><img src="${userData.image}" alt="Product Image" style="max-width: 100px; max-height: 100px;"></td>
        <td>
          <button class="btn btn-sm btn-danger" onclick="hapusData('${userId}')">Hapus</button>
          <button class="btn btn-sm btn-primary" onclick="viewDetail('${userId}')">View Detail</button>
        </td>
      `;

      rowIndex++; // Increment the rowIndex for the next row
      });

     
    });
  }, function (error) {
    console.error("Data error: " + error);
  });

  // Function to view product details in the modal
  window.viewDetail = function (userId) {
    const produkRef = ref(database, `Produks/${userId}`);
    onValue(produkRef, function (snapshot) {
      const userData = snapshot.val();

      const productDetailsBody = document.getElementById('productDetailsBody');
      productDetailsBody.innerHTML = `
        <p>ID Toko: ${userData.idSeller}</p>
        <p>Nama Produk: ${userData.nama}</p>
        <p>Harga Produk: ${userData.harga}</p>
        <p>Stok Produk: ${userData.stok}</p>
        <p>Berat Produk: ${userData.beratProduk}</p>
        <p>Deskripsi Produk: ${userData.deskripsi}</p>
        <img src="${userData.image}" alt="Product Image" style="max-width: 200px; max-height: 200px;">
      `;

      // Show the modal
      $('#productDetailsModal').modal('show');
    });
  };

  // Function to remove data
  window.hapusData = function (userId) {
    const produkRef = ref(database, `Produks/${userId}`);
    remove(produkRef);
  };

});
</script>
