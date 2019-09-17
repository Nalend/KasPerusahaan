<?php
includeHeader();
include "config.php";

?>
<div class="container">
<legend>Daftar Dosen</legend>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Dosen</li>
</ol> 
<div class="container text-right p-1">
      <a href="index.php?page=dosen_tambah" class="btn btn-primary">Tambah</a>
</div>
<table id= "example" class="table table-default table-bordered" width="100%" cellspacing="0">

<?php

$query = mysqli_query($con, "SELECT * FROM dosen ORDER BY dosen_id DESC");
?> 

  <thead>
  <tr class="table-primary">
      <th scope="col">No.</th>
      <th scope="col">Dosen ID</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">Pendidikan Terakhir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">No Handphone</th>
      <th scope="col">Dosen PA</th>
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
      <td><?php echo $data["dosen_id"];?></td>
      <td><?php echo $data["nama_dosen"];?></td>
      <td><?php
      if($data['pendidikan_terakhir']=='0'){
        echo "D3";
      }else if($data['pendidikan_terakhir']=='1'){
        echo "S1";
      }else if($data['pendidikan_terakhir']=='2'){
        echo "S2";
      }else{
        echo "S3";
      }?></td>
      <td><?php echo $data["alamat"];?></td>
      <td><?php echo $data["email"];?></td>
      <td><?php echo $data["no_hp"];?></td>
      <td><?php 
      if($data['dosen_pa']=='Y'){
        echo "Ya";
      }else{
        echo "Tidak";
      }?></td>
      <i class="fa fa-coffee"></i>
      <td>
          <a href="index.php?page=edit_dosen&dosen_id=<?php echo $data['dosen_id']; ?>" class="btn btn-warning btn-sm " role="button">Edit</a>
          <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_dosen&dosen_id=<?php echo $data['dosen_id']; ?>" class="btn btn-danger btn-sm " role="button">Hapus</a>
                
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