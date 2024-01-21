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
            <br></br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <th>Role</th>
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
  import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";
  
  const database = getDatabase(app);
  const reference = ref(database, '/Users');

  onValue(reference, function (snapshot) {
  const tableBody = document.getElementById('userTableBody');

  snapshot.forEach((childSnapshot) => {
    const userId = childSnapshot.key;
    const userData = childSnapshot.val();

    const row = tableBody.insertRow();
    row.innerHTML = `
      <td>${userId}</td>
      <td>${userData.nama}</td>
      <td>${userData.email}</td>
      <td>${userData.noTelepon}</td>
      <td>${userData.role}</td>
      <td>
        <button class="btn btn-sm btn-danger" onclick="hapusData('${userId}')">Hapus</button>
        <button class="btn btn-sm btn-success" onclick="viewData('${userId}', '${userData.email}', '${userData.nama}', '${userData.noTelepon}', '${userData.role}')">View</button>
      </td>
    `;
  });
}, function(error) {
    console.error("Data erro  : " + error);
});

function hapusData(userId) {
  dbref.child(userId).remove();
}

function viewData(userId, email, nama, noTelepon, role) {
  // Setel nilai pada elemen modal sesuai dengan data yang diterima
  document.getElementById('userId').innerText = userId;
  document.getElementById('email').innerText = email;
  document.getElementById('nama').innerText = nama;
  document.getElementById('noTelepon').innerText = noTelepon;
  document.getElementById('role').innerText = role;

  // Tampilkan modal
  $('#modal-view').modal('show');
}
</script>
