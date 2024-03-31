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
                    <th>ID Toko</th>
                    <th>ID User</th>
                    <th>ID Alamat</th>
                    <th>Nama Toko</th>
                    <th>Gambar</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_toko");
                      while($usr = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td width='5%'><?php echo $usr['id_toko'];?></td>
                    <td width='5%'><?php echo $usr['id_user'];?></td>
                    <td width='5%'><?php echo $usr['id_alamat'];?></td>
                    <td><?php echo $usr['nama_toko'];?></td>
                    <td><?php echo $usr['image'];?></td>
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
