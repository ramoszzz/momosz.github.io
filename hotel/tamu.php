<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styletable.css">
    </head>
    Informasi tamu
    <table border="1">
        <tr>
            <td>id_tamu</td>
            <td>Nama</td>
            <td>no_hp</td>
            <td>alamat</td>
        </tr>
    <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi,"select * from data_tamu");
        while($tampil=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td> <?php echo $tampil['id_tamu']?></td>
            <td> <?php echo $tampil['Nama']?></td>
            <td> <?php echo $tampil['no_hp']?></td>
            <td> <?php echo $tampil['alamat']?></td>
            <td><a href="hapus-tamu.php?id=<?php echo $tampil['id_tamu']; ?>">Hapus</a>
            <td><a href="edit-tamu.php?id=<?php echo $tampil['id_tamu']; ?>">Edit</a>
        </td>

        </tr>
<?php
        }
?>
    </table>
    <a href="input-tamu.php"> tambahkan data baru </a>
</html>