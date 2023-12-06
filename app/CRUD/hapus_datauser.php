<?php
include('../../conf/config.php');
$id_user = $_GET['id_user'];

$query = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user='$id_user'");
header('Location: ../tabeluser.php?page=data-user');
?>