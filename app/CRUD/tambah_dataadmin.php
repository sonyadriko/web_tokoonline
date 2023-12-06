<?php
include('../../conf/config.php');
$nama_admin = $_GET['nama_admin'];
$email = $_GET['email'];
$password = $_GET['password'];
$query = mysqli_query($koneksi, "INSERT INTO tb_admin(id_admin,nama_admin,email,password) VALUES('','$nama_admin','$email','$password')");
header('Location: ../tabeladmin.php?page=data-admin');
?>