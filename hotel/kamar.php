<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styletable.css">
    </head>
   <h3> KAMAR <h3>
    <table border="1">
        <tr>
            <td>id_kamar</td>
            <td>tipe_kamar</td>
            <td>fasilitas</td>
            <td>ketersediaan</td>
        </tr>
    <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi,"select * from data_kamar");
        while($tampil=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td> <?php echo $tampil['id_kamar']?></td>
            <td> <?php echo $tampil['tipe_kamar']?></td>
            <td> <?php echo $tampil['fasilitas']?></td>
            <td> <?php echo $tampil['ketersediaan']?></td>
            <td><a href="hapus_kamar.php?id=<?php echo $tampil['id_kamar']; ?>">Hapus</a>
            <td><a href="edit-kamar.php?id=<?php echo $tampil['id_kamar']; ?>">Edit</a>
        </td>

        </tr>
<?php
        }
?>
    </table>
    <a href="input-kamar.php"> tambahkan data baru </a>
</html>