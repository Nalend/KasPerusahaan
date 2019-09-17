<?php
includeHeader();
?>
<?php 
	include "config.php";
    $dosen_id = $_GET['dosen_id'];
	$query = mysqli_query($con,"select * from dosen where dosen_id='$dosen_id'");
	while($data = mysqli_fetch_array($query)){
?>
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=update_dosen">
            <fieldset>
                <legend>Edit Dosen</legend>
                <table>
			<tr>
				<td>Dosen ID</td>
				<td><input type="text" name="dosen_id" value="<?php echo $data['dosen_id'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama Dosen</td>
				<td><input type="text" name="nama_doen" value="<?php echo $data['nama_dosen'] ?>"></td>					
			</tr>	
			<tr>
            <td><label for="pendidikan_terakhir">Pendidikan Terakhir</label></td>
            <td><select class="custom-select" name="pendidikan_terakhir" value="<?php echo $data['pendidikan_terakhir'] ?>">
                        <option value="0">D3</option>
                        <option value="1">S1</option>
                        <option value="2">S2</option>
                        <option value="3">S3</option>
                        </select></td>
            </tr>
            <tr>
                </select></td>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
            </tr>
			<tr>
            <td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
            </tr>
			<tr>
            <td>No Handphone</td>
				<td><input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>					
            </tr>
			<tr>
            <td><label for="dosen_pa">Dosen PA</label></td>
            <td><select class="custom-select" name="dosen_pa" value="<?php echo $data['dosen_pa'] ?>">
                        <option value="Y">Ya</option>
                        <option value="N">Tidak</option>
                        </select></td>
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