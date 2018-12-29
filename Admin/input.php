<?php 
include("koneksi.php"); 
$sql = "INSERT INTO admin(name,phone,email) 
VALUES ('".$_POST['nama']."',
		'".$_POST['telepon']."',
		'".$_POST['email']."')"; 
mysqli_query($koneksi, $sql) or exit("Error query : <b>".$sql."</b>."); 
header("location:index.php");?>

