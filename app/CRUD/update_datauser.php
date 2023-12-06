<?php
include('../../conf/config.php');
$id_user        = $_GET['id_user'];
$email          = $_GET['email'];
$password       = $_GET['password'];
$nama_user      = $_GET['nama_user'];
$validasi       = $_GET['validasi'];
$nomer_rekening = $_GET['nomer_rekening'];
$account_number = $_GET['account_number'];
$expired_date   = $_GET['expired_date'];
$query = mysqli_query($koneksi, "UPDATE tb_user SET nama_user='$nama_user', email='$email', password='$password', validasi='$validasi', nomer_rekening='$nomer_rekening', account_number='$account_number', expired_date='$expired_date' WHERE id_user='$id_user'");
header('Location: ../tabeluser.php?page=update-user');
?>