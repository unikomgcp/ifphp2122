<?php
include 'koneksidb301.php';
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jk             = $_POST['jk'];
$tanggallahir   = $_POST['tanggallahir'];
$alamat         = $_POST['alamat'];
$nohp           = $_POST['nohp'];
$email          = $_POST['email'];

// query SQL untuk update data
$sql="UPDATE mahasiswa SET nim='$nim', namalengkap='$nama', jeniskelamin='$jk', tanggallahir='$tanggallahir', alamat='$alamat', nohp='$nohp', email='$email' WHERE nim='$nim'";
mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert('Data dengan NIM $nim atas nama $nama telah berhasil di update');document.location='pertemuan301db.php';</script>";

?>