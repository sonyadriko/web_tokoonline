<footer class="main-footer">
    <strong>Copyright &copy;  <a href="">AdminBatama</a>.</strong>
    All rights reserved.
  </footer>

  
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  //user
  $('.view-data').click(function(){
    var email           = $(this).attr('data-email');
    var password        = $(this).attr('data-password');
    var nama_user       = $(this).attr('data-nama_user');
    var validasi        = $(this).attr('data-validasi');
    var account_number  = $(this).attr('data-account_number');
    var expired_date    = $(this).attr('data-expired_date');
    var nomer_rekening  = $(this).attr('data-nomer_rekening');
    document.getElementById('email').innerHTML          = email;
    document.getElementById('password').innerHTML       = password;
    document.getElementById('nama_user').innerHTML      = nama_user;
    document.getElementById('validasi').innerHTML       = validasi;
    document.getElementById('account_number').innerHTML = account_number;
    document.getElementById('expired_date').innerHTML   = expired_date;
    document.getElementById('nomer_rekening').innerHTML = nomer_rekening;
    console.log(nomer_rekening);
  })
  //admin
  $('.view-data2').click(function(){
    var nama_admin      = $(this).attr('data2-nama_admin');
    var email           = $(this).attr('data2-email');
    var password        = $(this).attr('data2-password');
    document.getElementById('nama_admin').innerHTML      = nama_admin;
    document.getElementById('email').innerHTML          = email;
    document.getElementById('password').innerHTML       = password;
    console.log(email);
  })
  //produk
  $('.view-data3').click(function(){
    var nama_produk       = $(this).attr('data3-nama_produk');
    var harga_produk      = $(this).attr('data3-harga_produk');
    var deskripsi_produk  = $(this).attr('data3-deskripsi_produk');
    document.getElementById('nama_produk').innerHTML      = nama_produk;
    document.getElementById('harga_produk').innerHTML     = harga_produk;
    document.getElementById('deskripsi_produk').innerHTML = deskripsi_produk;
    console.log(nama_produk);
  })
 //alamat
 $('.view-data4').click(function(){
    var nama           = $(this).attr('data4-nama');
    var type           = $(this).attr('data4-type');
    var phone          = $(this).attr('data4-phone');
    var alamat_detail  = $(this).attr('data4-alamat_detail');
    document.getElementById('nama').innerHTML          = nama;
    document.getElementById('type').innerHTML          = type;
    document.getElementById('phone').innerHTML         = phone;
    document.getElementById('alamat_detail').innerHTML = alamat_detail;
    console.log(nama);
  })
 
</script>
