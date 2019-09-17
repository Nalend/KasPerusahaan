<?php
includeHeader();
include "config.php";

?>
<div class="container">
<legend>Daftar Mahasiswa</legend>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Mahasiswa</li>
</ol> 
<div class="container text-right p-1">
      <a href="index.php?page=mahasiswa_tambah" class="btn btn-primary">Tambah</a>
</div>
<table id= "example" class="table table-default table-bordered" width="100%" cellspacing="0">

<?php

$query = mysqli_query($con, "SELECT * FROM mahasiswa ORDER BY nim DESC");
?> 

  <thead>
  <tr class="table-primary">
      <th scope="col">No.</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Tahun Masuk</th>
      <th scope="col">Program Studi ID</th>
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
      <td><?php echo $data["nim"];?></td>
      <td><?php echo $data["nama"];?></td>
      <td><?php echo $data["tempat"];?></td>
      <td><?php echo $data["tanggal_lahir"];?></td>
      <td><?php echo $data["tahun_masuk"];?></td>
      <td><?php echo $data["program_studi_id"];?></td>
      <td><?php echo $data["dosen_pa"];?></td>
      <i class="fa fa-coffee"></i>
      <td>
          <a href="index.php?page=edit_mahasiswa&nim=<?php echo $data['nim']; ?>" class="btn btn-warning btn-sm " role="button">Edit</a>
          <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_mahasiswa&nim=<?php echo $data['nim']; ?>" class="btn btn-danger btn-sm " role="button">Hapus</a>
                
      </td>
    </tr>
    <?php $no++;}?>
    </tbody>
    <?php
     }
     ?>
                

<script>
    $(document).ready(function(){
        $('#tabel-mahasiswa').DataTable();
    });

</script>
</table> 
</div>
<?php
includeFooter();
// include "config.php";

?>