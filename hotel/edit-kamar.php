<link rel="stylesheet" type="text/css" href="styleedit.css">
<h3>Edit Table Informasi Kamar</h3>

<?php
include 'koneksi.php';
$ID= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM data_kamar WHERE id_kamar='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<table>
    <tr>
        <td>id_kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>tipe_kamar</td>
        <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>fasilitas</td>
        <td><input type="text" name="fasilitas" value="<?php echo $tampil['fasilitas']; ?>"></td>
    </tr>
    <tr>
        <td>ketersediaan</td>
        <td><input type="text" name="ketersediaan" value="<?php echo $tampil['ketersediaan']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>