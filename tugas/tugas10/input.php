<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pembagian Daging Kurban</h1>
    <form method="POST" action="hasil_daging_kurban.php">
        <fieldset>
            <p>
                <label for>Jumlah Sapi Kurban : </label><br>
                <input type="number" name="jumlah_sapi" required min="1"></td>
            </p>
            <p>
                <label for>Daftar Nama Warga (satu nama per baris) : </label><br>
                <textarea name="daftar_nama" cols="30" rows="10" required></textarea>
            </p>
            <p>
                <input type="submit" value="Hitung dan Tampilkan Jatah">
            </p>
        </fieldset>
    </form>
</body>
</html>