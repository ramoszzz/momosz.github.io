<h3>Edit Table Informasi Reservasi</h3>

<?php
include 'koneksi.php';
$ID= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM reservasi WHERE id_reservasi='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-reservasi.php">   
<table>
    <tr>
        <td>id_reservasi</td>
        <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
    </tr>
    <tr>
        <td>id_kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>id_pegawai</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>id_tamu</td>
        <td><input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>check_in</td>
        <td><input type="date" name="check_in" value="<?php echo $tampil['check_in']; ?>"></td>
    </tr>
    <tr>
        <td>check_out</td>
        <td><input type="date" name="check_out" value="<?php echo $tampil['check_out']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>