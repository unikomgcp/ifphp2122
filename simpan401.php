<html>
    <center>
    <font size=6>
        Informasi Data Barang
    </font>
    <hr width=320>
    <table>
    <?php
    require ("koneksidb301.php");
    $kodebarang=$_POST['kodebarang'];
    $namabarang=$_POST['namabarang'];
    $jenisbarang=$_POST['jenisbarang'];
    $ukuran=$_POST['ukuran'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    echo "<tr><td>Kode Barang<td>$kodebarang";
    echo "<tr><td>Nama Barang<td>$namabarang";
    echo "<tr><td>Jenis Barang<td>$jenisbarang";
    echo "<tr><td>Ukuran<td>$ukuran";
    echo "<tr><td>Harga<td>$harga";
    echo "<tr><td>Stok<td>$stok";
    echo "</table>";
    echo "<hr width=320>";
    if($kodebarang!='')
        {
            $sql="insert into barang values ('$kodebarang','$namabarang','$jenisbarang','$ukuran','$harga','$stok') ";
            $hasil=mysqli_query($conn,$sql);
            echo "Data telah ditambahkan";
        }
        else
        {
            echo "Kode Barang Tidak Boleh Kosong";
        }
    ?>
    <br/>
    <a href="pertemuan301db.php">View Barang</a>
</html>