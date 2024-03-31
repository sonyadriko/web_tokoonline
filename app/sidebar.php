<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    <!-- <script type="module" src="../firebase-config.js"></script>  -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <script type="module">
         import { app } from './firebase-config.js';
import { getDatabase, ref, onValue, set } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";

const firebaseDatabase = getDatabase(app);
const firebaseAuth = getAuth(app);

const auth = getAuth(app);

const currentUser = auth.currentUser;
const uidPenggunaSaatIni = currentUser ? currentUser.uid : null;

// Mendapatkan UID pengguna saat ini
if (uidPenggunaSaatIni) {
  const userRef = ref(firebaseDatabase, 'users/' + uidPenggunaSaatIni);
  onValue(userRef, (snapshot) => {
    const user = snapshot.val();
    // console.log('Informasi Pe  ngguna yang Login:', user);
  });
} else {
  // console.log('Tidak ada pengguna yang login.');
}

          </script>
        <div class="info">
          <a href="#" class="d-block"><?php echo "Admin";?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tabeluser.php?page=date-user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tabelproduk.php?page=date-produk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tabeltoko.php?page=date-toko" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Toko</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tabelkategori.php?page=date-kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  
