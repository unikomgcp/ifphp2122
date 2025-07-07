<?php
include 'koneksidb301.php';

// menyimpan data id kedalam variabel
$nim   = $_GET['nim'];

// query SQL untuk delete data
$query="DELETE from mahasiswa where nim='$nim'";
mysqli_query($conn, $query);

// mengalihkan ke halaman tabel
header("location:pertemuan301db.php");
?>