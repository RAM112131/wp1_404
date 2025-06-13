<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 7</title>
</head>
<body>
    <h2>Tiket Online Jakarta - Malaysia</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
        <pre>

<label>Nama                 : </label> <input type="text" name="nama" size="30" placeholder="Isi Nama Anda">
<label>Pilih Kode Pesawat   : </label> <select name="kode" id="">
    <option value="MPT">MPT</option>
    <option value="GRD">GRD</option>
    <option value="BTV">GTV</option>
</select>
<label>Pilih Kelas          : </label> <input type="radio" name="kelas" value="Eksklusif">Eksklusif
                        <input type="radio" name="kelas" value="Bisnis">Bisnis
                        <input type="radio" name="kelas" value="Ekonomi">Ekonomi
<label>Jumlah Tiket         : </label> <input type="number" name="jml_tiket" min="1" max="100">
<input type="submit" name="beli" value="Beli"> <input type="reset" name="batal" value="Batal">        
</pre>
        
    </fieldset>    
    </form>
    <br>
<?php

// konstanta garis
define('garis', '====================================================');

// variabel nama pesawat
$mpt="Merpati Air";
$grd="Garuda Indonesia";
$gtv="Batavia Air";

// harga tiket merpati air
$harga_mpt_eksklusif = 1500000;
$harga_mpt_bisnis = 900000;
$harga_mpt_ekonomi = 500000;

// harga tiket garuda indonesia
$harga_grd_eksklusif = 1200000;
$harga_grd_bisnis = 800000;
$harga_grd_ekonomi = 400000;

// harga tiket batavia air
$harga_gtv_eksklusif = 1000000;
$harga_gtv_bisnis = 700000;
$harga_gtv_ekonomi = 300000;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $kelas = $_POST['kelas'];
    $jml_tiket = $_POST['jml_tiket'];


    // tampilan jika tidak kososng
    if (!empty($nama) && !empty($kode) && !empty($kelas) && !empty($jml_tiket)) {
        echo garis;
        echo "<h3>PEMESANAN TIKET ONLINE JAKARTA - MALAYSIA</h3>";
        echo garis;
        echo "<br>Nama Pemesan : $nama <br>";
        echo "Kode Pesawat : $kode <br>";
        
        // tampilan nama pesawat jika memilih kode pesawat
        if ($kode == "MPT") {
            echo "Nama Pesawat : $mpt <br>";
        } elseif ($kode == "GRD") {
            echo "Nama Pesawat : $grd <br>";
        } elseif ($kode == "GTV") {
            echo "Nama Pesawat : $gtv <br>";
        }

        echo "Kelas Tiket  : $kelas <br>";
        echo "Jumlah Tiket : $jml_tiket <br>";

        // perhitungan harga tiket
        if ($kode == "MPT") {
            if ($kelas == "Eksklusif") {
                $harga_tiket = $harga_mpt_eksklusif * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            } elseif ($kelas == "Bisnis") {
                $harga_tiket = $harga_mpt_bisnis * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            } elseif ($kelas == "Ekonomi") {
                $harga_tiket = $harga_mpt_ekonomi * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            }
        } elseif ($kode == "GRD") {
            if ($kelas == "Eksklusif") {
                $harga_tiket = $harga_grd_eksklusif * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            } elseif ($kelas == "Bisnis") { 
                $harga_tiket = $harga_grd_bisnis * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            } elseif ($kelas == "Ekonomi") {
                $harga_tiket = $harga_grd_ekonomi * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            }
        } elseif ($kode == "GTV") {
            if ($kelas == "Eksklusif") {
                $harga_tiket = $harga_gtv_eksklusif * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            } elseif ($kelas == "Bisnis") {
                $harga_tiket = $harga_gtv_bisnis * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            } elseif ($kelas == "Ekonomi") {
                $harga_tiket = $harga_gtv_ekonomi * $jml_tiket;
                echo "Total Harga : $harga_tiket <br>";
            }
        }
        echo garis;
    }    
}
?>
<br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<input type="reset" name="kembali" value="Kembali">
</form>

</body>
</html>