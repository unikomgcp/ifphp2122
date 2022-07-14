<?php
include 'koneksidb301.php';

// menyimpan data id kedalam variabel
$kodebarang   = $_GET['kodebarang'];

// query SQL untuk delete data
$query="DELETE from barang where kodebarang='$kodebarang'";
mysqli_query($conn, $query);

// mengalihkan ke halaman tabel
header("location:pertemuan301db.php");
?>