<html>
    <head>
        <title>PHP Pertemuan 4</title>
    </head>
    <body align="center">
        <h1>Update Data Mahasiswa</h1>
        <hr>
        <?php
            include 'koneksidb301.php';
            $nim = $_GET['nim'];
            $sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
            $query  = mysqli_query($conn, $sql);
            $row   = mysqli_fetch_array($query);

        ?>
        <form name="fview" action="" method="">
        <input type="hidden" name="nimawal" value="<?php echo $nim; ?>" />
            <table align="center">
                <tr>
                    <td>NIM</td>
                    <td>: <?php echo $row['nim']; ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <?php echo $row['namalengkap']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:  <?php 
                                $jk = strtoupper($row['jeniskelamin']);
                                if ($jk === 'L'){
                                    echo "Laki-laki";
                                } else {
                                    echo "Perempuan";
                                }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <?php echo date('d F Y', strtotime($row['tanggallahir'])); ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $row['alamat']; ?></td>
                </tr>
                <tr>
                    <td>No Handphone</td>
                    <td>: <?php echo $row['nohp']; ?></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td>: <?php echo $row['email']; ?></td>
                </tr>
            </table>
            <hr>
                <a href="pertemuan301db.php">Kembali</a>
        </form>
    </body>
</html>