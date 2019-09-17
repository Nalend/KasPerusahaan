<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$program_studi_id = $_POST['program_studi_id'];
$nama_program = $_POST['nama_program'];
$jenjang_program = $_POST['jenjang_program'];
$nama_kepala_program = $_POST['nama_kepala_program'];
// menginput data ke database
mysqli_query($con,"insert into program_studi values('$program_studi_id','$nama_program','$jenjang_program','$nama_kepala_program')");
 
// mengalihkan halaman kembali ke index.php
header("Location:index.php?page=daftar_program_studi");
 
?>