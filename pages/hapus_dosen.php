<?php 
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$dosen_id = $_GET['dosen_id'];


// menghapus data dari database
mysqli_query($con,"delete from dosen where dosen_id='$dosen_id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=dosen_user");

?>