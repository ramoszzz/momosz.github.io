<h3>Edit Table Informasi Kamar</h3>

<?php
include 'koneksi.php';
$ID= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM data_tamu WHERE id_tamu='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-tamu.php">
<table>
    <tr>
        <td>$id_tamu</td>
        <td><input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama" value="<?php echo $tampil['Nama']; ?>"></td>
    </tr>
    <tr>
        <td>no_hp</td>
        <td><input type="number" name="no_hp" value="<?php echo $tampil['no_hp']; ?>"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>