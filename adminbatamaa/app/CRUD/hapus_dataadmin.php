<?php
include('../../conf/config.php');
$id_admin = $_GET['id_admin'];

$query = mysqli_query($koneksi, "DELETE FROM tb_admin WHERE id_admin='$id_admin'");
header('Location: ../tabeladmin.php?page=data-admin');
?>