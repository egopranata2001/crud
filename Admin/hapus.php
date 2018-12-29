<?php
include"koneksi.php";
 
 
$query = "DELETE FROM admin WHERE id_admin ='$_GET[id]'";
 
mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');
 
?>