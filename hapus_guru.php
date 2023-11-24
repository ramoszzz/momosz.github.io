<?php
include 'momos.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from raport where NIP='$id'");

header("location: raport.php");
?>