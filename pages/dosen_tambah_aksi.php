<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$dosen_id = $_POST['dosen_id'];
$nama_dosen = $_POST['nama_dosen'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$dosen_pa = $_POST['dosen_pa'];
// menginput data ke database
mysqli_query($con,"insert into dosen values('$dosen_id','$nama_dosen','$pendidikan_terakhir','$alamat','$email','$no_hp','$dosen_pa')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=daftar_dosen");
 
?>