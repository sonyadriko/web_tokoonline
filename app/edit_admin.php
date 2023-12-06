<?php
$id_admin        = $_GET['id_admin'];
$query          = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin='$id_admin'");
$view           = mysqli_fetch_array($query);
?>
<section class="content">
  <div class="container-fluid">
</section>
<div class="card card-warning">
              <div class="card-header">
                <h5 class="card-title">Edit Data admin</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form methode="get" action="CRUD/update_dataadmin.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama </label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap ..." name='nama_admin' value="<?php echo $view['nama_admin'];?>">
                        <input type="text" class="form-control" placeholder="Nama Lengkap ..." name='id_admin' value="<?php echo $view['id_admin'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- password -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="Email" class="form-control" placeholder="Email ..." name='email' value="<?php echo $view['email'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- password -->
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password ..." name='password' value="<?php echo $view['password'];?>">
                      </div>
                      </div>
                    </div><br>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
              <!-- /.card-body -->
            </div>
  </div>
</section>
