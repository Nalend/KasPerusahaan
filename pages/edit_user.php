<?php
includeHeader();
?>
<?php 
	include "config.php";
    $user_id = $_GET['user_id'];
	$query = mysqli_query($con,"select * from user where user_id='$user_id'");
	while($data = mysqli_fetch_array($query)){
?>
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=update_user">
            <fieldset>
                <legend>Edit User</legend>
                <table>
			<tr>
				<td>User ID</td>
				<td><input type="text" name="user_id" value="<?php echo $data['user_id'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>					
			</tr>
            <tr>
            <td><label for="level">Level</label></td>
            <td><select class="custom-select" name="level" value="<?php echo $data['level'] ?>">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
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