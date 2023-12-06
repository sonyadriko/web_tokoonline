<?php
include('../../conf/config.php');
$email = $_GET['email'];
$password = $_GET['password'];
$nama_user = $_GET['nama_user'];
$validasi = $_GET['validasi'];
$nomer_rekening = $_GET['nomer_rekening'];
$account_number = $_GET['account_number'];
$expired_date = $_GET['expired_date'];
$query = mysqli_query($koneksi, "INSERT INTO tb_user(id_user,nama_user,email,password,validasi,nomer_rekening,account_number,expired_date) VALUES('','$nama_user','$email','$password','$validasi','$nomer_rekening','$account_number','$expired_date')");
header('Location: ../tabeluser.php?page=data-user');
?>