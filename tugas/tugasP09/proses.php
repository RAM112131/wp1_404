<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Perbelanjaan</title>
</head>
<body>
    <h1>Program Diskon Belanja</h1>
    <h3>Masukan Data Barang</h3>
    <form method="POST" action="output.php">
        <fieldset>
            <?php
            if (isset($_POST['jumlah_barang']) && is_numeric($_POST['jumlah_barang'])) {
                $jumlah_barang = (int)$_POST['jumlah_barang'];
                echo "<input type='hidden' name='jumlah_barang' value='$jumlah_barang'>";
                
                for ($jml_brg = 1; $jml_brg <= $jumlah_barang; $jml_brg++) {
                    echo "<p>";
                    echo "Barang Ke-$jml_brg :<br> ";
                    echo "<label>Nama Barang </label>";
                    echo "<input type='text' name='nama_barang[]' required>";
                    echo "<br><label>Harga Barang </label>";
                    echo "<input type='number' name='harga_barang[]' required min='0'>";
                    echo "</p>";
                }
            } else {
                echo "<p>Jumlah barang tidak valid.</p>";
            }
            ?>
            <p>
                <input type="submit" value="Proses">
            </p>
        </fieldset>
    </form>
</body>
</html>