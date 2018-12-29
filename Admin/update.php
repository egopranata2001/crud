<?php
include"koneksi.php";
 
 
 
$id = $_POST['id'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
 
$query = "UPDATE admin SET
                                name = '$nama',
                                phone = '$telepon',
                                email = '$email'
                                WHERE id_admin = '$id'
                                ";
 
mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');
 
?>