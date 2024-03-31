<?php
session_start();
include ('config.php');
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE email='$email' AND password='$password'");
if(mysqli_num_rows($query)==1){
    header('Location:../app');
    $admin = mysqli_fetch_array($query);
    $_SESSION['nama'] = $admin['nama_admin'];
}
else if($email == '' || $password == ''){
    header('Location:../index.php?error=2');
}
else{
    header('Location:../index.php?error=1');
}
?>