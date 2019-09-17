<?php
include 'config.php';

$nim   =$_POST['nim'];
$nama  =$_POST['nama'];
$tempat=$_POST['tempat'];
$tanggal_lahir =$_POST['tanggal_lahir'];
$tahun_masuk  =$_POST['tahun_masuk'];
$program_studi_id =$_POST['program_studi_id'];
$dosen_pa =$_POST['dosen_pa'];

mysqli_query($con,"update mahasiswa set nim='$nim', nama='$nama', tempat='$tempat', tanggal_lahir='$tanggal_lahir', tahun_masuk='$tahun_masuk', program_studi_id='$program_studi_id', dosen_pa='$dosen_pa' WHERE nim='$nim'");

header('Location:index.php?page=daftar_mahasiswa');
?>