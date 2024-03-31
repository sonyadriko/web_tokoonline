<?php
include('../../conf/config.php');
$id_kategori = $_GET['id_kategori'];

$query = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori='$id_kategori'");
header('Location: ../tabelkategori.php?page=data-kategori');
?>