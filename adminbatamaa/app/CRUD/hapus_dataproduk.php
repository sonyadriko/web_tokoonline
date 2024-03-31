<?php
include('../../conf/config.php');
$id_produk = $_GET['id_produk'];

$query = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk='$id_produk'");
header('Location: ../tabelproduk.php?page=data-produk');
?>