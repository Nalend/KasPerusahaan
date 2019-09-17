<?php
#-variable database
$DbHost= 'localhost';
$DbUser= 'root';
$DbPass= '';
$DbName= 'siakad';

#-koneksi ke mysql /mariadb
$con =mysqli_connect($DbHost,$DbUser,$DbPass,$DbName);

?>