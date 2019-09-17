<?php
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$sql="SELECT * FROM user
            WHERE user_id ='$user_id'
            AND password='$password'";
$exe = mysqli_query($con,$sql);
$num = mysqli_num_rows($exe);
if($num>0){
$row = mysqli_fetch_object($exe);
$_SESSION['Login']='ya';
$_SESSION['UserID']=$row->user_id;
$_SESSION['Nama']=$row->nama;
$_SESSION['Password']=$row->password;
$_SESSION['Level']=$row->level;
    header('Location:index.php');
}else{
    header('Location:index.php?page=login&error=1');
}
?>