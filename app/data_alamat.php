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
                    <th>ID alamat</th>
                    <th>Nama</th>
                    <th>Type</th>
                    <th>Nomer Telpone</th>
                    <th>Alamat Detail</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_alamat");
                      while($alm = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td width='5%'><?php echo $alm['id_alamat'];?></td>
                    <td><?php echo $alm['nama'];?></td>
                    <td><?php echo $alm['type'];?></td>
                    <td><?php echo $alm['phone'];?></td>
                    <td><?php echo $alm['alamat_detail'];?></td>
                    <td>
                      <a href="" class="view-data4 btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                        data4-nama="<?php echo $alm['nama'];?>"
                        data4-type="<?php echo $alm['type'];?>"
                        data4-phone="<?php echo $alm['phone'];?>"
                        data4-alamat_detail="<?php echo $alm['alamat_detail'];?>">View data</a>
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
                  Nama   : <span id="nama"></span>
                </div>
                <div class="form-group col-md-6">
                  Type   : <span id="type"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  phone   : <span id="phone"></span>
                </div>
                <div class="form-group col-md-6">
                  Alamat  : <span id="alamat_detail"></span>
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