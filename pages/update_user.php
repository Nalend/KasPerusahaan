<?php
include 'config.php';

$user_id =$_POST['user_id'];
$nama    =$_POST['nama'];
$password=$_POST['password'];
$level   =$_POST['level'];

mysqli_query($con,"update user set user_id='$user_id', nama='$nama', password='$password', level='$level' WHERE user_id='$user_id'");

header('Location:index.php?page=daftar_user');
?>