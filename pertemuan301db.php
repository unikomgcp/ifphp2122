<html>
    <head>
        <title>Latihan Database Dasar</title>
    </head>
    <body>
        <center>
        <font size=7>
        Tampil Data Mahasiswa <a href="session/logout.php">Logout</a><br>
        <hr>
        <table border=10>
        <tr bgcolor=silver>
            <td width=50><center>No
            <td width=100><center>NIM
            <td width=200><center>Nama
            <td width=50><center>JK
            <td width=100><center>Tanggal Lahir
            <td width=100><center>Alamat
            <td width=50><center>No. HP
            <td width=200><center>Proses</td>
        <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: session/login.php"); // Redirect jika belum login
            exit();
        }

        require ("koneksidb301.php");
        $sql="select * from mahasiswa";
        $hasil=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($hasil);
        
        $n=1;
        do
        {
        list($nim,$namalengkap,$jk,$tanggallahir,$alamat,$nohp)=$row;
        echo "<tr>
                <td>$n</td>
                <td>$nim</td>
                <td>$namalengkap</td>
                <td>$jk</td>
                <td>$tanggallahir</td>
                <td>$alamat</td>
                <td>$nohp</td>
                <td align=center>
                    <a href='pertemuan601view.php?nim=$nim'>View</a>
                    <a href='pertemuan501edit.php?nim=$nim'>Edit</a> 
                    <a href='hapus501.php?nim=$nim' onclick=\"return confirm('Anda yakin mau menghapus data ini?')\" >Delete</a>
                </td>
             </tr>";
        $n++;
        }
        while($row=mysqli_fetch_row($hasil));
        ?>
            <tr><td align="center" colspan="8"><a href="pertemuan401.php">Tambah Mahasiswa</a></td>
    </body>
</html>