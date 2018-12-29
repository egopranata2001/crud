<?php 
include("koneksi.php"); 
$sql = "INSERT INTO customer(name,address,phone,email) 
VALUES ('".$_POST['nama']."',
		'".$_POST['alamat']."',
		'".$_POST['telepon']."',
		'".$_POST['email']."')"; 
mysqli_query($koneksi, $sql) or exit("Error query : <b>".$sql."</b>."); 
header("location:index.php");?>

