<?php
include"koneksi.php";
 
 
 
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
 
$query = "UPDATE customer SET
                                name = '$nama',
                                address = '$alamat',
                                phone = '$telepon',
                                email = '$email'
                                WHERE id_cust = '$id'
                                ";
 
mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');
 
?>