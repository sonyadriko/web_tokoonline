<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Batama</title>

  <script type="module" src="firebase-config.js"></script> 
  <script type="module" src="login.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>Admin</b>Batama</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <!-- <form action="conf/autentikasi.php" method="post"> -->
      <form id="loginForm">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
        </div>
      </form>
  </div>
</div>

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>



</body> 
<?php
if(isset ($_GET['error'])){
$x =($_GET['error']);
if($x==1){
  echo "
  <script>
  var Toast = Swal.mixin({
    toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
  Toast.fire({
    icon: 'error',
    title: 'Mohon Maaf, Login Anda Gagal'
  });
  </script>";
}
else if($x==2){
  echo "
  <script>
  var Toast = Swal.mixin({
    toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
  Toast.fire({
    icon: 'error',
    title: 'Mohon Maaf, Masukan Email dan Password terlebih dahulu'
  });
  </script>";
}
else{
  echo '';
}}
?>
</html>
