<?php
$id_user        = $_GET['id_user'];
$query          = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id_user'");
$view           = mysqli_fetch_array($query);
?>
<section class="content">
  <div class="container-fluid">
</section>
<div class="card card-warning">
              <div class="card-header">
                <h5 class="card-title">Edit Data User </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form methode="get" action="CRUD/update_datauser.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama </label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap ..." name='nama_user' value="<?php echo $view['nama_user'];?>">
                        <input type="text" class="form-control" placeholder="Nama Lengkap ..." name='id_user' value="<?php echo $view['id_user'];?>" hidden>
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
                    <div class="col-sm-6">
                      <!-- password -->
                      <div class="form-group">
                        <label>Nomer Rekening</label>
                        <input type="text" class="form-control" placeholder="Nomer Rekening ..." name='nomer_rekening' value="<?php echo $view['nomer_rekening'];?>">
                      </div>
                    </div>
                   <!-- <div class="col-sm-6">
                      textarea 
                      <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                      </div>
                    </div> -->
                  </div>

                  <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Validasi</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="OK / Tidak ..." name='validasi' value="<?php echo $view['validasi'];?>">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Account Number </label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Number ..." name='account_number' value="<?php echo $view['account_number'];?>">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="input"><i class="far fa-times-circle"></i> Expired Date</label>
                    <input type="text" class="form-control is-" id="input" placeholder="Date ..." name='expired_date' value="<?php echo $view['expired_date'];?>">
                  </div>
              <button type="submit" class="btn btn-sm btn-info">Simpan</button>
              <!-- /.card-body -->
            </div>
  </div>
</section>