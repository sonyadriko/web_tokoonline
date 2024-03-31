    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Produk</th>
                    <th>ID Toko</th>
                    <th>Nama Produk</th>
                    <th>Harga_Produk</th>
                    <th>Deskripsi_Produk</th>
                    <th>Gambar</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_produk");
                      while($prd = mysqli_fetch_array($query)){
                        $no++
                    ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $prd['id_produk'];?></td>
                    <td><?php echo $prd['id_toko'];?></td>
                    <td><?php echo $prd['nama_produk'];?></td>
                    <td><?php echo $prd['harga_produk'];?></td>
                    <td><?php echo $prd['deskripsi_produk'];?></td>
                    <td><?php echo $prd['image'];?></td>
                    <td>
                    <a href="CRUD/hapus_dataproduk.php?id_produk=<?php echo $prd['id_produk'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="" class="view-data3 btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                        data3-nama_produk="<?php echo $prd['nama_produk'];?>"
                        data3-harga_produk="<?php echo $prd['harga_produk'];?>"
                        data3-deskripsi_produk="<?php echo $prd['deskripsi_produk'];?>">View Data</a>
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
                  Nama Produk  : <span id="nama_produk"></span>
                </div>
                <div class="form-group col-md-6">
                  Harga        : <span id="harga_produk"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  Deskripsi    : <span id="deskripsi_produk"></span>
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