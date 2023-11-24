<h3>Edit Table Informasi Pegawai</h3>

<?php
include 'koneksi.php';
$ID= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM data_pegawai WHERE id='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pegawai.php">
<table>
    <tr>
        <td>id</td>
        <td><input type="number" name="id" value="<?php echo $tampil['id']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama" value="<?php echo $tampil['Nama']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>