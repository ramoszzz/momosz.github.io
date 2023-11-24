<?php
include 'koneksi.php';

$id_tamu = $_POST['id_tamu'];
$Nama = $_POST['Nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"INSERT INTO data_tamu VALUES ('$id_tamu', '$Nama','$no_hp', '$alamat')");
header("location:tamu.php");
?>