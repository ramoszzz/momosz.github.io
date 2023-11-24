<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styletable.css">
    </head>
    Reservasi
    <table border="1">
        <tr>
            <td>id_reservasi</td>
            <td>id_kamar</td>
            <td>id_pegawai</td>
            <td>id_tamu</td>
            <td>check_in</td>
            <td>check_out</td>
        </tr>
    <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi,"select * from reservasi");
        while($tampil=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td> <?php echo $tampil['id_reservasi']?></td>
            <td> <?php echo $tampil['id_kamar']?></td>
            <td> <?php echo $tampil['id_pegawai']?></td>
            <td> <?php echo $tampil['id_tamu']?></td>
            <td> <?php echo $tampil['check_in']?></td>
            <td> <?php echo $tampil['check_out']?></td>
            <td><a href="hapus-reservasi.php?id=<?php echo $tampil['id_reservasi']; ?>">Hapus</a>
            <td><a href="edit-reservasi.php?id=<?php echo $tampil['id_reservasi']; ?>">Edit</a>
        </td>

        </tr>
<?php
        }
?>
    </table>
    <a href="input-reservasi.php"> tambahkan data baru </a>
</html>