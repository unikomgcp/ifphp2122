<html>
    <head>
        <title>PHP Pertemuan 1</title>
    </head>
    <body>
        <h1>Pengenalan PHP</h1>
        <?php
            echo "<h3>Hello World!</h3>";

            $nilaia = 10;
            $nilaib = 25;

            $total = $nilaia + $nilaib;

            echo "<h2>Jumlah bilangan = ";
            echo $total;
            echo "</h2>";

            for ($i=1; $i<=5; $i++){
                echo "$i <br/>";
            }
        ?>

        <h2>Jumlah bilangan = <?php echo $total; ?></h2>
    </body>
</html>