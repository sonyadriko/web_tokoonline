<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    <!-- <script type="module" src="../firebase-config.js"></script>  -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block"><?php echo $_SESSION['nama'];?></a> -->
          <a href="#" class="d-block"><?php echo "Admin";?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

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
              <!-- <li class="nav-item">
                <a href="tabeladmin.php?page=date-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Admin</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="tabelproduk.php?page=date-produk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Produk</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="tabelalamat.php?page=date-alamat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Alamat</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="tabeltoko.php?page=date-toko" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Toko</p>
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
  
