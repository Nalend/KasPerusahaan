<?php
include 'config.php';

$dosen_id   =$_POST['dosen_id'];
$nama_dosen =$_POST['nama_dosen'];
$pendidikan_terakhir =$_POST['pendidikan_terakhir'];
$alamat     =$_POST['alamat'];
$email      =$_POST['email'];
$no_hp      =$_POST['no_hp'];
$dosen_pa   =$_POST['dosen_pa'];

mysqli_query($con,"update dosen set dosen_id='$dosen_id', nama_dosen='$nama_dosen', pendidikan_terakhir='$pendidikan_terakhir', alamat='$alamat', email='$email', no_hp='$no_hp', dosen_pa='$dosen_pa WHERE dosen_id='$dosen_id'");

header('Location:index.php?page=daftar_dosen');
?>