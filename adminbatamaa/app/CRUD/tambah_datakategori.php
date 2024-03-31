<?php
include('../../conf/config.php');
$nama_kategori = $_GET['nama_kategori'];
$query = mysqli_query($koneksi, "INSERT INTO tb_kategori(id_kategori,nama_kategori) VALUES('','$nama_kategori')");
header('Location: ../tabelkategori.php?page=data-kategori');
?>