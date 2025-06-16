<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pembagian Daging Kurban</title>
</head>
<body style="line-height: 1.5;">
    <div style="justify-content: center; display: flex;"> 
        <fieldset>
            <?php
    $daging_bersih = 65;
    $jumlah_sapi = $_POST["jumlah_sapi"];
    $total_daging = $jumlah_sapi * $daging_bersih;
    $nama = explode("\n", $_POST["daftar_nama"]);
    $nama = array_filter($nama, function($value) {
        return trim($value) !== '';
    });

    $jumlah_warga = count($nama);
    $jatah_daging = $total_daging / $jumlah_warga;

    echo "Total Daging : $total_daging Kg<br>";
    echo "Jumlah Warga : $jumlah_warga <br>";
    echo "Jatah Daging Kurban : $jatah_daging Kg<br><br>";
    
    echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse: collapse;'>
    <tr style='background-color: #00BFFF'>
        <th>Nomor Antrian</th>
        <th>Nama Warga</th>
        <th>Jatah Daging (Kg)</th>
    </tr>
    ";
    for ($i = 0; $i < count($nama); $i++) {
    $antrian = $i + 1;
    echo "<tr>
        <td>$antrian</td>
        <td>$nama[$i]</td>
        <td>$jatah_daging</td>
    </tr>";
    }

    echo"</table><br>";
    ?>
        </fieldset>
    </div>


</body>
</html>