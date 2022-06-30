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
        <?php
        require ("koneksidb301.php");
        $sql="select * from barang";
        $hasil=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($hasil);
        $n=1;
        do
        {
        list($kodebrg,$namabarang,$jenisbarang,$ukuran,$harga,$stok)=$row;
        echo "<tr><td>$n<td>$kodebrg<td>$namabarang<td>$jenisbarang<td>$ukuran<td align=right>$harga<td align=right>$stok";
        $n++;
        }
        while($row=mysqli_fetch_row($hasil));
        ?>
            <tr><td align="center" colspan="7"><a href="pertemuan401.php">Tambah Barang</a></td>
    </body>
</html>