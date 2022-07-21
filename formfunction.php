<?php

require_once ('koneksidb301.php');

function sbjenisbarang (){
    
    $sql="select kodejenisbarang, namajenisbarang from jenisbarang";
    $hasil=mysqli_query($conn,$sql);
    $row=mysqli_fetch_row($hasil);

}

?>