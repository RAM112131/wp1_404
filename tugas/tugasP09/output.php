<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Belanja</title>
</head>
<body>

    <h1>Program Diskon Belanja</h1>
    <fieldset>
    <?php
    $jumlah_barang = $_POST['jumlah_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    
    $total_belanja = 0;
    
    echo "<h2>Daftar Belanja:</h2>";
    
    for ($jml_brg = 0; $jml_brg < $jumlah_barang; $jml_brg++) {

        $harga = $harga_barang[$jml_brg];
        $total_belanja += $harga;
        
        echo "<p>";
        echo "<ul>";
        echo "<li>";
        echo "<strong>" . $nama_barang[$jml_brg] . "</strong>";
        echo "- Rp " . number_format($harga, 0, ',', '.') . "<br>";
        echo "</li>";
        echo "</ul>";
        echo "</p>";
    }
    
    // Menentukan diskon berdasarkan total belanja
    $diskon_persen = 0;
    $diskon_nominal = 0;
    
    if ($total_belanja > 500000) {
        $diskon_persen = 20;
        $diskon_nominal = $total_belanja * 0.20;
    } elseif ($total_belanja > 250000) {
        $diskon_persen = 10;
        $diskon_nominal = $total_belanja * 0.10;
    } else {
        $diskon_persen = 0;
        $diskon_nominal = 0;
    }
    
    $total_bayar = $total_belanja - $diskon_nominal;
    
    echo "<p><br>Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "</p>";
    echo "<p>Diskon ($diskon_persen%): Rp " . number_format($diskon_nominal, 0, ',', '.') . "</p>";
    echo "<p><strong>Total Bayar:</strong> Rp " . number_format($total_bayar, 0, ',', '.') . "</p>";
    ?>    
    <p>
        <a href="input.php">Hitung Lagi</a>
    </p>
    </fieldset>
    
</body>
</html>