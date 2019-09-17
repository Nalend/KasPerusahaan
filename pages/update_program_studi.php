<?php
include 'config.php';

$program_studi_id=$_POST['program_studi_id'];
$nama_program    =$_POST['nama_program'];
$jenjang_program =$_POST['jenjang_program'];
$nama_kepala_program=$_POST['nama_kepala_program'];

mysqli_query($con,"update program_studi set program_studi_id='$program_studi_id', nama_program='$nama_program', jenjang_program='$jenjang_program', nama_kepala_program='$nama_kepala_program' WHERE program_studi_id='$program_studi_id'");

header('Location:index.php?page=daftar_program_studi');
?>