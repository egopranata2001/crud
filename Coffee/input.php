<?php 
include("koneksi.php"); 
$sql = "INSERT INTO coffee(name,jenis,jumlah) 
VALUES ('".$_POST['nama']."',
		'".$_POST['jenis']."',
		'".$_POST['jumlah']."')"; 
mysqli_query($koneksi, $sql) or exit("Error query : <b>".$sql."</b>."); 
header("location:index.php");?>

