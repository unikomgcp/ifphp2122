<html>
    <head>
        <title>Latihan Database Dasar</title>
    </head>
    <body>
        <center>
        <font size=7>
        Tampil Data Barang<br>
        <hr>
        <table border=10>
        <tr bgcolor=silver>
            <td width=50><center>No
            <td width=100><center>Kode Barang
            <td width=200><center>Nama Barang
            <td width=100><center>Jenis Barang
            <td width=50><center>Ukuran
            <td width=100><center>Harga
            <td width=50><center>Stok
            <td width=100><center>Proses</td>
        <?php
        require ("koneksidb301.php");
        $sql="select * from barang";
        $hasil=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($hasil);
        
        $n=1;
        do
        {
        list($kodebarang,$namabarang,$jenisbarang,$ukuran,$harga,$stok)=$row;
        echo "<tr>
                <td>$n</td>
                <td>$kodebarang</td>
                <td>$namabarang</td>
                <td>$jenisbarang</td>
                <td>$ukuran</td>
                <td align=right>$harga</td>
                <td align=right>$stok</td>
                <td align=center>
                    <a href='pertemuan501edit.php?kodebarang=$kodebarang'>Edit</a> 
                    <a href='hapus501.php?kodebarang=$kodebarang'>Delete</a>
                </td>
             </tr>";
        $n++;
        }
        while($row=mysqli_fetch_row($hasil));
        ?>
            <tr><td align="center" colspan="8"><a href="pertemuan401.php">Tambah Barang</a></td>
    </body>
</html>