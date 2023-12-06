    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tabel User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>ID Alamat</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Validasi</th>
                    <th>Nomer Rekening</th>
                    <th>Account Number</th>
                    <th>Expired Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_user");
                      while($usr = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $usr['id_user'];?></td>
                    <td><?php echo $usr['id_alamat'];?></td>
                    <td><?php echo $usr['nama_user'];?></td>
                    <td><?php echo $usr['email'];?></td>
                    <td><?php echo $usr['password'];?></td>
                    <td><?php echo $usr['validasi'];?></td>
                    <td><?php echo $usr['nomer_rekening'];?></td>
                    <td><?php echo $usr['account_number'];?></td>
                    <td><?php echo $usr['expired_date'];?></td>
                    <td>
                      <a href="CRUD/hapus_datauser.php?id_user=<?php echo $usr['id_user'];?>" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="edit_datauser.php?id_user=<?php echo $usr['id_user'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a href="" class="view-data btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                        data-email="<?php echo $usr['email'];?>"
                        data-password="<?php echo $usr['password'];?>"
                        data-nama_user="<?php echo $usr['nama_user'];?>"
                        data-validasi="<?php echo $usr['validasi'];?>"
                        data-expired_date="<?php echo $usr['expired_date'];?>"
                        data-account_number="<?php echo $usr['account_number'];?>"
                        data-nomer_rekening="<?php echo $usr['nomer_rekening'];?>">View Data</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
                  <!--
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                  -->
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
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="CRUD/tambah_datauser.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Nama User</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap" name="nama_user">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Validasi</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="OK / Tidak" name="validasi">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Nomer Rekening</label>
                  <input type="text" class="form-control" id="inputCity" name="nomer_rekening">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Account Number</label>
                  <input type="text" class="form-control" id="inputCity" name="account_number">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Expired Date</label>
                  <input type="text" class="form-control" id="inputZip" name="expired_date">
                </div>
              </div>
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!--Modal view Data-->
      <div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="" action="">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  Email           : <span id="email"></span>
                </div>
                <div class="form-group col-md-6">
                  Password        : <span id="password"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  Nama User       : <span id="nama_user"></span>
                </div>
                <div class="form-group col-md-6">
                  Validasi        : <span id="validasi"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  Nomer Rekening  : <span id="nomer_rekening"></span>
                </div>
                <div class="form-group col-md-6">
                  Account Number  : <span id="account_number"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  Expired Date    : <span id="expired_date"></span>
                </div>
              </div>
              </div>
              </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>