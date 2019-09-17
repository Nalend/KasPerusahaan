<?php
includeHeader();
?>
<?php 
	include "config.php";
    $program_studi_id = $_GET['program_studi_id'];
	$query = mysqli_query($con,"select * from program_studi where program_studi_id='$program_studi_id'");
	while($data = mysqli_fetch_array($query)){
?>
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=update_program_studi">
            <fieldset>
                <legend>Edit Program Studi</legend>
                <table>
			<tr>
				<td>Program Studi ID</td>
				<td><input type="text" name="program_studi_id" value="<?php echo $data['program_studi_id'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama Program</td>
				<td><input type="text" name="nama_program" value="<?php echo $data['nama_program'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jenjang Program</td>
				<td><input type="text" name="jenjang_program" value="<?php echo $data['jenjang_program'] ?>"></td>					
			</tr>
            <tr>
            <td>Nama Kepala Program</td>
				<td><input type="text" name="nama_kepala_program" value="<?php echo $data['nama_kepala_program'] ?>"></td>
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