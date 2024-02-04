<script type="module">
  import { app } from './firebase-config.js';
  import { getDatabase, ref, onValue, remove } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";
  
  const database = getDatabase(app);
  const reference = ref(database, '/Users');
  const reference2 = ref(database, '/Toko');
  const reference3 = ref(database, '/Produks');

  onValue(reference, function(snapshot) {
    const jmlUser = Object.keys(snapshot.val()).length;
    // console.log(`Jumlah user: ${jmlUser}`);
    document.getElementById('jmlUserPlaceholder').textContent = jmlUser;
  });

  onValue(reference2, function(snapshot) {
    const jmlToko = Object.keys(snapshot.val()).length;
    // console.log(`Jumlah Toko: ${jmlToko}`);
    document.getElementById('jmlTokoPlaceholder').textContent = jmlToko;
  });

  onValue(reference3, function(snapshot) {
    const jmlProduk = Object.keys(snapshot.val()).length;
    // console.log(`Jumlah Produk: ${jmlProduk}`);
    document.getElementById('jmlProdukPlaceholder').textContent = jmlProduk;
  });



</script>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" >

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3 id="jmlUserPlaceholder">0</h3>
              
                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="tabeluser.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3 id="jmlProdukPlaceholder">0</h3>
                <p>Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="tabelproduk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3 id="jmlTokoPlaceholder">0</h3>

                <p>Toko</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="tabeltoko.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
        </div>
        <!-- /.row -->

          </section>
          

          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
            
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
     <!-- const jmlUser = snapshot.numChildren(); -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  