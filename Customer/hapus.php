<?php
include"koneksi.php";
 
 
$query = "DELETE FROM customer WHERE id_cust ='$_GET[id]'";
 
mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');
 
?>