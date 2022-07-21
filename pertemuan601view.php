<html>
    <head>
        <title>PHP Pertemuan 5</title>
    </head>
    <body align="center">
        <h1>View Data Barang</h1>
        <hr>
        <?php
            include 'koneksidb301.php';
            $kodebarang = $_GET['kodebarang'];
            $sql = "SELECT * FROM barang WHERE kodebarang = '$kodebarang'";
            $query  = mysqli_query($conn, $sql);
            $row   = mysqli_fetch_array($query);

        ?>


        <form name="fpenjualan" action="update501.php" method="post">
            <input type="hidden" name="kodebarang" value="<?php echo $kodebarang; ?>" />
            <table align="center">
                <tr>
                    <td>Kode Barang</td>
                    <td>: <?php echo $row['kodebarang']; ?></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>: <?php echo $row['namabarang']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Barang</td>
                    <td>: <?php echo $row['jenisbarang']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td>: <?php echo $row['ukuran']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: <?php echo $row['harga']; ?></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>: <?php echo $row['stok']; ?></td>
                </tr>
            </table>
            <hr>
                <?php
                    echo "<a href='pertemuan501edit.php?kodebarang=$kodebarang'>Edit</a> "; 
                    echo "<a href='pertemuan401.php'>Tambah Baru</a> ";
                    echo "<a href='pertemuan301db.php'>Kembali</a>";
                ?>
        </form>
    </body>
</html>