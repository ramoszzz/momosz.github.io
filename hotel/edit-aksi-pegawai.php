<?php
include 'koneksi.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];

mysqli_query($koneksi,"UPDATE data_pegawai SET id='$id',
Nama='$Nama'WHERE id='$id'");
header("location: pegawai.php");

?>