<html>
    <head>
        <title>PHP Pertemuan 4</title>
    </head>
    <body align="center">
        <h1>Input Data Mahasiswa</h1>
        <hr>
        <form name="ftambahmahasiswa" action="simpan401.php" method="post">
            <table align="center">
                <tr>
                    <td>NIM</td>
                    <td>: <input name="nim" size="10" maxlength="8" placeholder="NIM"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="nama" size="55" maxlength="55" placeholder="Nama Lengkap"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: 
                        <input type="radio" name="jk" value="l">Laki-laki
                        <input type="radio" name="jk" value="p">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <input name="tanggallahir" type="date" placeholder="Tanggal Lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input name="alamat" size="50" placeholder="Alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>: <input name="nohp" size="15" placeholder="nohp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input name="email" type="email" size="30" placeholder="email" /></td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Simpan">
                <input type="reset" value="Reset">
                &nbsp; <a href="pertemuan301db.php">Kembali</a>
        </form>
    </body>
</html>