<?php 
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$user_id = $_GET['user_id'];


// menghapus data dari database
mysqli_query($con,"delete from user where user_id='$user_id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=daftar_user");

?>