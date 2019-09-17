<?php
includeHeader();
?>
<?php 
	include "config.php";
    $nim = $_GET['nim'];
	$query = mysqli_query($con,"select * from mahasiswa where nim='$nim'");
	while($data = mysqli_fetch_array($query)){
?>
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=update_mahasiswa">
            <fieldset>
                <legend>Edit Mahasiswa</legend>
                <table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>Tempat</td>
				<td><input type="text" name="tempat" value="<?php echo $data['tempat'] ?>"></td>					
			</tr>
            <tr>
            <td>Tanggal Lahir</td>
				<td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>"></td>
            </tr>
			<tr>
            <td>Tahun Masuk</td>
				<td><input type="text" name="tahun_masuk" value="<?php echo $data['tahun_masuk'] ?>"></td>
            </tr>
			<tr>
            <td>program_studi_id</td>
				<td><input type="text" name="program_studi_id" value="<?php echo $data['program_studi_id'] ?>"></td>
            </tr>
			<tr>
            <td>Dosen PA</td>
				<td><input type="text" name="dosen_pa" value="<?php echo $data['dosen_pa'] ?>"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
           
        </fieldset>
    </form>
    <?php
    }
    ?>
    </div>
    </div>
<?php
includeFooter();