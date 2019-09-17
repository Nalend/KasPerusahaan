<?php
includeHeader();
include "config.php";

?>
<div class="container">
<legend>Daftar User</legend>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar User</li>
</ol> 
<div class="container text-right p-1">
      <a href="index.php?page=user_tambah" class="btn btn-primary">Tambah</a>
</div>
<table id= "example" class="table table-default table-bordered" width="100%" cellspacing="0">

<?php

$query = mysqli_query($con, "SELECT * FROM user ORDER BY user_id DESC");
?> 

  <thead>
  <tr class="table-primary">
      <th scope="col">No.</th>
      <th scope="col">User ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Password</th>
      <th scope="col">Level</th>
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
      <td><?php echo $data["user_id"];?></td>
      <td><?php echo $data["nama"];?></td>
      <td><?php echo $data["password"];?></td>
      <td><?php echo $data["level"];?></td>
      
      <td>
          <a href="index.php?page=edit_user&user_id=<?php echo $data['user_id']; ?>" class="btn btn-warning btn-sm " role="button">Edit</a>
          <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_user&user_id=<?php echo $data['user_id']; ?>" class="btn btn-danger btn-sm " role="button">Hapus</a>
                
      </td>
    </tr>
    <?php $no++;}?>
    </tbody>
    <?php
     }
     ?>
                

<script>
    $(document).ready(function(){
        $('#tabel-dosen').DataTable();
    });

</script>
</table> 
</div>
<?php
includeFooter();
// include "config.php";

?>