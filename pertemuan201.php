<html>
    <head>
        <title>PHP Pertemuan 2</title>
    </head>
    <body align="center">
        <h1>Data Penjualan</h1>
        <hr>
        <form id="fpenjualan" action="proses201.php" method="POST">
            <table align="center">
                <tr>
                    <td>Nama Barang</td>
                    <td>: <input name="namabarang" size="20"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: <input name="harga" size="10"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: <input name="jumlah" size="2"></td>
                </tr>
                <tr>
                    <td>Kode Voucher</td>
                    <td>: <input name="voucher" size="5"></td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Proses">
                <input type="reset" value="Reset">
        </form>
    </body>
</html>