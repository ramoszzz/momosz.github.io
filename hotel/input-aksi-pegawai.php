<?php
include 'koneksi.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];
mysqli_query($koneksi,"INSERT INTO data_pegawai VALUES ('$id', '$Nama')");
header("location: pegawai.php");
?>