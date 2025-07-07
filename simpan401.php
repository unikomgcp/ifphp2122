<html>
    <center>
    <font size=6>
        Informasi Data Mahasiswa
    </font>
    <hr width=320>
    <table>
    <?php
    require ("koneksidb301.php");
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $tanggallahir=$_POST['tanggallahir'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $email=$_POST['email'];
    echo "<tr><td>NIM<td>$nim";
    echo "<tr><td>Nama Lengkap<td>$nama";
    echo "<tr><td>Jenis Kelamin<td>$jk";
    echo "<tr><td>Tanggal Lahir<td>$tanggallahir";
    echo "<tr><td>Alamat<td>$alamat";
    echo "<tr><td>No. Handphone<td>$nohp";
    echo "<tr><td>E-Mail<td>$email";   
    echo "</table>";
    echo "<hr width=320>";
    if($nim!='')
        {
            $sql="insert into mahasiswa values ('$nim','$nama','$jk','$tanggallahir','$alamat','$nohp','$email') ";
            $hasil=mysqli_query($conn,$sql);
            echo "Data telah ditambahkan";
        }
        else
        {
            echo "NIM Tidak Boleh Kosong";
        }
    ?>
    <br/>
    <a href="pertemuan301db.php">View Mahasiswa</a>
</html>