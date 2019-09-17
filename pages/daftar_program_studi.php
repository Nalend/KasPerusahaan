<?php
includeHeader();
include "config.php";

?>
<div class="container">
<legend>Daftar Program Studi</legend>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Program Studi</li>
</ol> 
<div class="container text-right p-1">
      <a href="index.php?page=program_studi" class="btn btn-primary">Tambah</a>
</div>
<table id= "example" class="table table-default table-bordered" width="100%" cellspacing="0">

<?php

$query = mysqli_query($con, "SELECT * FROM program_studi ORDER BY program_studi_id DESC");
?> 

  <thead>
  <tr class="table-primary">
      <th scope="col">No.</th>
      <th scope="col">Program Studi ID</th>
      <th scope="col">Nama Program</th>
      <th scope="col">Jenjang Program</th>
      <th scope="col">Nama Kepala Program</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (mysqli_num_rows($query)>0){?>
    <?php
    $no=1;
    while($data = mysqli_fetch_array($query)){   
    
    ?>
    <tr>
      <th scope="row"><?php echo $no?></th>
      <td><?php echo $data["program_studi_id"];?></td>
      <td><?php echo $data["nama_program"];?></td>
      <td><?php echo $data["jenjang_program"];?></td>
      <td><?php echo $data["nama_kepala_program"];?></td>
      
      <td>
          <a href="index.php?page=edit_program_studi&program_studi_id=<?php echo $data['program_studi_id']; ?>" class="btn btn-warning btn-sm " role="button">Edit</a>
          <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_program_studi&program_studi_id=<?php echo $data['program_studi_id']; ?>" class="btn btn-danger btn-sm " role="button">Hapus</a>
                
      </td>
    </tr>
    <?php $no++;}?>
    </tbody>
    <?php
     }
     ?>
                

<script>
    $(document).ready(function(){
        $('#tabel-program-studi').DataTable();
    });

</script>
</table> 
</div>
<?php
includeFooter();
// include "config.php";

?>