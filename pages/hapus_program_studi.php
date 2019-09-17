<?php 
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$program_studi_id = $_GET['program_studi_id'];


// menghapus data dari database
mysqli_query($con,"delete from program_studi where program_studi_id='$program_studi_id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=daftar_program_studi");

?>