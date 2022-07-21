<html>
    <head>
        <title>PHP Pertemuan 5</title>
    </head>
    <body align="center">
        <h1>Update Data Barang</h1>
        <hr>
        <?php
            include 'koneksidb301.php';
            $kodebarang = $_GET['kodebarang'];
            $sql = "SELECT * FROM barang WHERE kodebarang = '$kodebarang'";
            $query  = mysqli_query($conn, $sql);
            $row   = mysqli_fetch_array($query);

            // membuat data Jenis Barang menjadi dinamis dalam bentuk array
            $jenisbarang  = array('O-Neck','V-Neck','T-Neck');

            // membuat function untuk set aktif radio button
            function active_radio_button($value,$input){
                // apabila value dari radio sama dengan yang di input
                $result =  $value==$input?'checked':'';
                return $result;
            }
        ?>


        <form name="fpenjualan" action="update501.php" method="post">
            <input type="hidden" name="kodebarang" value="<?php echo $kodebarang; ?>" />
            <table align="center">
                <tr>
                    <td>Kode Barang</td>
                    <td>: <input name="kodebarang" size="5" value="<?php echo $row['kodebarang']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>: <input name="namabarang" size="20" value="<?php echo $row['namabarang']; ?>" /></td>
                </tr>
                <tr>
                    <td>Jenis Barang</td>
                    <td>: 
                        <select name="jenisbarang">
                        <?php
                            foreach ($jenisbarang as $jb){
                                echo "<option value='$jb' ";
                                echo $row['jenisbarang']==$jb?'selected="selected"':'';
                                echo ">$jb</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td>: 
                        <input type="radio" name="ukuran" value="S" <?php echo active_radio_button("S", $row['ukuran']); ?>>S
                        <input type="radio" name="ukuran" value="M" <?php echo active_radio_button("M", $row['ukuran']); ?>>M
                        <input type="radio" name="ukuran" value="L" <?php echo active_radio_button("L", $row['ukuran']); ?>>L
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: <input name="harga" size="10" value="<?php echo $row['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>: <input name="stok" size="2" value="<?php echo $row['stok']; ?>"></td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Update">
                <input type="reset" value="Reset">
                <a href="pertemuan301db.php">Batal</a>
        </form>
    </body>
</html>