<?php
include 'koneksidb301.php';
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jk             = $_POST['jk'];
$alamat         = $_POST['alamat'];
$nohp           = $_POST['nohp'];
$email          = $_POST['email'];
$kodejurusan    = $_POST['jurusan'];

// query SQL untuk update data
$sql="UPDATE mahasiswa SET nim='$nim', nama='$nama', jk='$jk', alamat='$alamat', nohp='$nohp', email='$email', kodejurusan='$kodejurusan' WHERE nim='$nim'";
mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert('Data dengan NIM $nim atas nama $nama telah berhasil di update');document.location='pertemuan301db.php';</script>";

// mengalihkan ke halaman view tabel
//header("location:pertemuan301db.php");
?>