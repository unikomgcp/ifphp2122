<?php
            echo "<center>";
            echo "<h1>";
            echo "Program Penjualan";
            echo "<hr>";
            echo "<table>";

            $namabarang = $_POST['namabarang'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['jumlah'];
            $voucher = $_POST['voucher'];
            $subtotal = $harga*$jumlah;

            if ($voucher == "GCP" && $subtotal>=40000){
                $diskon=0.5;
            } else {
                $diskon=0;
            }

            $totaldiskon = $subtotal*$diskon;
            if ($totaldiskon >=30000){
                $totaldiskon = 30000;
            }

            $total = $subtotal - $totaldiskon;

            echo "<tr><td>Nama Barang<td>:$namabarang";
            echo "<tr><td>Harga<td>:$harga";
            echo "<tr><td>Jumlah<td>:$jumlah";
            echo "<tr><td colspan=3><hr>";
            echo "<tr><td>Subtotal<td>:$subtotal";
            echo "<tr><td>Diskon<td>:$totaldiskon";
            echo "<tr><td>Total<td>:$total";
?>