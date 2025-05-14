<html>
<head>
    <title>Latihan Operator</title>
</head>
<body>
    <h1>Latihan Operator</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <pre>
Nilai A         : <input type="text" name="nilaia" size="25"><br>            
Nilai B         : <input type="text" name="nilaib" size="25"><br>            
Pilih Operator  : <input type="radio" name="operator" value="perkalian">Kali<br>
                  <input type="radio" name="operator" value="penjumlahan">Tambah<br>
                  <input type="radio" name="operator" value="pengurangan">Kurang<br>
                  <input type="radio" name="operator" value="pembagian">Bagi<br>
                 
<input type="submit" value="HITUNG"> <input type="reset" value="BATAL">
    </pre>    
    </form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nilai_A = $_POST['nilaia']; 
    $Nilai_B = $_POST['nilaib'];
    $operator = $_POST['operator'];

    // Tampilkan hanya jika semua nilai tidak kosong
    if (!empty($Nilai_A) && !empty($Nilai_B) && !empty($operator)) {
        echo "========================================";
        echo "<h3>Hasil Perhitungan</h3>";
        echo "Nilai A: $Nilai_A <br>";
        echo "Nilai B: $Nilai_B <br>";

        if (is_numeric($Nilai_A) && is_numeric($Nilai_B)) {
            if ($operator == "penjumlahan") {
                $hasil = $Nilai_A + $Nilai_B;
                echo "Hasil: $Nilai_A + $Nilai_B = $hasil";
            } else if ($operator == "pengurangan") {
                $hasil = $Nilai_A - $Nilai_B;
                echo "Hasil: $Nilai_A - $Nilai_B = $hasil";
            } else if ($operator == "perkalian") {
                $hasil = $Nilai_A * $Nilai_B;
                echo "Hasil: $Nilai_A × $Nilai_B = $hasil";
            } else if ($operator == "pembagian") {
                    $hasil = $Nilai_A / $Nilai_B;
                    echo "Hasil: $Nilai_A ÷ $Nilai_B = $hasil";
                }
        }
    }
}
?>
</body>
</html>
