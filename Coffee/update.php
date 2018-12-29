<?php
include"koneksi.php";
 
 
 
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
 
$query = "UPDATE coffee SET
                                name = '$nama',
                                jenis = '$jenis',
                                jumlah = '$jumlah'
                                WHERE id_barang = '$id'
                                ";
 
mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');
 
?>