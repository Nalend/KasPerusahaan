<?php 
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$nim = $_GET['nim'];


// menghapus data dari database
mysqli_query($con,"delete from mahasiswa where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=daftar_mahasiswa");

?>