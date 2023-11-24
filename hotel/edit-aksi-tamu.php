<?php
include 'koneksi.php';

$id_kamar = $_POST['id_tamu'];
$Nama = $_POST['Nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"UPDATE data_tamu SET id_tamu='$id_tamu',
Nama='$Nama',no_hp='$no_hp',alamat='$alamat'WHERE id_tamu='$id_tamu'");
header("location: tamu.php");

?>