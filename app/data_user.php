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
   import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
  import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";
  
  const firebaseConfig = {
    apiKey: "AIzaSyD_jni1wD5X76VKKQEmW3Z_E2am7_4kQf0",
    authDomain: "febriani-tokoonline.firebaseapp.com",
    databaseURL: "https://febriani-tokoonline-default-rtdb.firebaseio.com",
    projectId: "febriani-tokoonline",
    storageBucket: "febriani-tokoonline.appspot.com",
    messagingSenderId: "935116086644",
    appId: "1:935116086644:web:b6cb7db2564731629e2021",
    measurementId: "G-WCGR3DKS1E"
  };
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
  const dbref = ref(database, '/users');

  dbref.on('value', function (snapshot) {
  const tableBody = document.getElementById('userTableBody');
  tableBody.innerHTML = '';

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
    console.error(error);
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

<!-- Modal untuk menampilkan data -->
<div class="modal fade" id="modal-view">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">View Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-6">
            Email: <span id="email"></span>
          </div>
          <div class="form-group col-md-6">
            Nama User: <span id="nama"></span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            No Telepon: <span id="noTelepon"></span>
          </div>
          <div class="form-group col-md-6">
            Role: <span id="role"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
