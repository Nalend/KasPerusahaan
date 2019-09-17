<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tahun_masuk = $_POST['tahun_masuk'];
$program_studi_id = $_POST['program_studi_id'];
$dosen_pa = $_POST['dosen_pa'];
// menginput data ke database
mysqli_query($con,"insert into mahasiswa values('$nim','$nama','$tempat','$tanggal_lahir','$tahun_masuk','$program_studi_id','$dosen_pa')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=daftar_mahasiswa");
 
?>