<?php
include"koneksi.php";
 
 
$query = "DELETE FROM equipment WHERE id_equipment ='$_GET[id]'";
 
mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');
 
?>