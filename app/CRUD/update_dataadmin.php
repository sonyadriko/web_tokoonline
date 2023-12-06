<?php
include('../../conf/config.php');
$id_admin        = $_GET['id_admin'];
$nama_admin      = $_GET['nama_admin'];
$email          = $_GET['email'];
$password       = $_GET['password'];
$query = mysqli_query($koneksi, "UPDATE tb_admin SET nama_admin='$nama_admin', email='$email', password='$password' WHERE id_admin='$id_admin'");
header('Location: ../tabeladmin.php?page=update-admin');
?>