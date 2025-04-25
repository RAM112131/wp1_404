<!-- menghitung luas lingkaran dengan mengaplikasikan materi komentar dan konstanta -->
<html>
    <head>
        <title>Contoh 6 "Menghitung luas lingkaran"</title>
    </head>
    <body>
    <?php
    
    // konstanta untuk nilai judul
    define ("Judul","Hitung Luas Lingkaran");

    // konstanta untuk nilai phi
    define("phi",3.14);

    echo Judul;
    $r = 10;
    echo "<br>Jari-jari : $r<br>\n";
    $luas = phi * $r *$r;
    echo "Luas Lingkaran = $luas";
    ?>
    </body>
</html>