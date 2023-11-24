<?php
include 'koneksi.php';

$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$fasilitas = $_POST['fasilitas'];
$ketersediaan = $_POST['ketersediaan'];

mysqli_query($koneksi,"UPDATE data_kamar SET id_kamar='$id_kamar',
tipe_kamar='$tipe_kamar',fasilitas='$fasilitas',ketersediaan='$ketersediaan'WHERE id_kamar='$id_kamar'");
header("location: kamar.php");

?>