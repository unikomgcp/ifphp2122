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
            
            // membuat data Jurusan menjadi dinamis dalam bentuk array
            $jurusan  = array('IF','SI');
            
            // membuat function untuk set aktif radio button
            function active_radio_button($value,$input){
                // apabila value dari radio sama dengan yang di input
                $result =  $value==$input?'checked':'';
                return $result;
            }
        ?>
        <form name="fupdate" action="update501.php" method="post">
        <input type="hidden" name="nim" value="<?php echo $nim; ?>" />
            <table align="center">
                <tr>
                    <td>NIM</td>
                    <td>: <input name="nim" size="10" maxlength="8" value="<?php echo $row['nim']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="nama" size="55" maxlength="55" value="<?php echo $row['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: 
                        <input type="radio" name="jk" value="L" <?php echo active_radio_button("L", $row['jk']); ?> >Laki-laki
                        <input type="radio" name="jk" value="P" <?php echo active_radio_button("P", $row['jk']); ?> >Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input name="alamat" size="100" value="<?php echo $row['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>No Handphone</td>
                    <td>: <input name="nohp" size="15" value="<?php echo $row['nohp']; ?>"></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td>: <input name="email" type="email" size="30" value="<?php echo $row['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>: 
                        <select name="jurusan">
                        <?php
                            foreach ($jurusan as $jur){
                                echo "<option value='$jur' ";
                                echo $row['kodejurusan']==$jur?'selected="selected"':'';
                                echo ">$jur</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Update">
                <input type="reset" value="Reset">
                &nbsp; <a href="pertemuan301db.php">Kembali</a>
        </form>
    </body>
</html>