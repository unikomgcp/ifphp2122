<?php
include 'koneksidb301.php';
// menyimpan data kedalam variabel
$kodebarang     = $_POST['kodebarang'];
$namabarang     = $_POST['namabarang'];
$jenisbarang    = $_POST['jenisbarang'];
$ukuran         = $_POST['ukuran'];
$harga          = $_POST['harga'];
$stok           = $_POST['stok'];

// query SQL untuk update data
$sql="UPDATE barang SET kodebarang='$kodebarang', namabarang='$namabarang', jenisbarang='$jenisbarang', ukuran='$ukuran', harga='$harga', stok='$stok' WHERE kodebarang='$kodebarang'";
mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert('Data dengan kode barang $kodebarang telah berhasil di update');document.location='pertemuan301db.php';</script>";

// mengalihkan ke halaman view tabel
//header("location:pertemuan301db.php");
?>