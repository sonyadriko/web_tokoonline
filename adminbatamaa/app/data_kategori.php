    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tabel Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Kategori
                </button><br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                      while($ktg = mysqli_fetch_array($query)){
                      $no++
                    ?>
                    <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $ktg['nama_kategori'];?></td>
                    <td>
                      <a href="CRUD/hapus_datakategori.php?id_kategori=<?php echo $ktg['id_kategori'];?>" class="btn btn-sm btn-danger">Hapus</a>
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
              <h4 class="modal-title">Tambah Data Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="CRUD/tambah_datakategori.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group">
                  <label for="inputAddress">Nama Kategori</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Nama Kategori" name="nama_kategori">
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
                  Nama Kategori       : <span id="nama_kategori"></span>
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
