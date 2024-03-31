    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tabel Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button><br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Admin</th>
                    <th>Nama Admin</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_admin");
                      while($adm = mysqli_fetch_array($query)){
                      $no++
                    ?>
                    <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td width='5%'><?php echo $adm['id_admin'];?></td>
                    <td width='5%'><?php echo $adm['id_admin'];?></td>
                    <td><?php echo $adm['nama_admin'];?></td>
                    <td><?php echo $adm['email'];?></td>
                    <td><?php echo $adm['password'];?></td>
                    <td>
                      <a href="CRUD/hapus_dataadmin.php?id_admin=<?php echo $adm['id_admin'];?>" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="edit_dataadmin.php?id_admin=<?php echo $adm['id_admin'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a href="" class="view-data2 btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                        data2-nama_admin="<?php echo $adm['nama_admin'];?>"
                        data2-email="<?php echo $adm['email'];?>"
                        data2-password="<?php echo $adm['password'];?>">View Data</a>
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
              <h4 class="modal-title">Tambah Data Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="CRUD/tambah_dataadmin.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group">
                  <label for="inputAddress">Nama Admin</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap" name="nama_admin">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
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
            <form method="get" action="CRUD/tambah_datauser.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  Nama Admin       : <span id="nama_admin"></span>
                </div>
                <div class="form-group col-md-6">
                  Email           : <span id="email"></span>
                </div>
                <div class="form-group col-md-6">
                  Password        : <span id="password"></span>
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
