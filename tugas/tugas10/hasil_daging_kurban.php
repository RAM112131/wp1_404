<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $daging_bersih = 65;
    $jumlah_sapi = $_POST["jumlah_sapi"];
    $total_daging = $jumlah_sapi * $daging_bersih;
    $nama = explode("\n", $_POST["daftar_nama"]);
    $jumlah_warga = count($nama);
    $jatah_daging = $total_daging / $jumlah_warga;

    echo "Total Daging : $total_daging Kg<br>";
    echo "Jumlah Warga : $jumlah_warga <br>";
    echo "Jatah Daging Kurban : $jatah_daging Kg<br><br>";
    
    for ($i = 0; $i < count($nama); $i++) {
        echo $nama[$i] . "<br>";
    }
    ?>

</body>
</html>