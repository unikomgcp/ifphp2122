<?php

function simpanbarang (){
    require ("koneksidb301.php");
    $kodebarang=$_POST['kodebarang'];
    $namabarang=$_POST['namabarang'];
    $jenisbarang=$_POST['jenisbarang'];
    $ukuran=$_POST['ukuran'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    if($kodebarang!='')
        {
            $sql="insert into barang values ('$kodebarang','$namabarang','$jenisbarang','$ukuran','$harga','$stok') ";
            $hasil=mysqli_query($conn,$sql);
            echo "Data telah ditambahkan";
        }
        else
        {
            echo "Kode Barang Tidak Boleh Kosong";
        }
}

function updatebarang ($id){
    require 'koneksidb301.php';
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

}

?>