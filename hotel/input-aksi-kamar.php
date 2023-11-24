<?php
include 'koneksi.php';

$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$fasilitas = $_POST['fasilitas'];
$ketersediaan = $_POST['ketersediaan'];
mysqli_query($koneksi,"INSERT INTO data_kamar VALUES ('$id_kamar', '$tipe_kamar','$fasilitas', '$ketersediaan')");
header("location:kamar.php");
?>