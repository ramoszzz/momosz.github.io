<html>
<head>
    <link rel="stylesheet" type="text/css" href="styletable.css">
    </head>
   Informasi pegawai
    <table border="1">
        <tr>
            <td>id</td>
            <td>Nama</td>

        </tr>
    <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi,"select * from data_pegawai");
        while($tampil=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td> <?php echo $tampil['id']?></td>
            <td> <?php echo $tampil['Nama']?></td>

            <td><a href="hapus-pegawai.php?id=<?php echo $tampil['id']; ?>">Hapus</a>
            <td><a href="edit-pegawai.php?id=<?php echo $tampil['id']; ?>">Edit</a>
        </td>

        </tr>
<?php
        }
?>
    </table>
    <a href="input-pegawai.php"> tambahkan data baru </a>
</html>