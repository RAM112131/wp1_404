<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan daging</title>
</head>
<body>
    <div style="justify-content: center; display: flex; line-height: 1.5;">
        <form method="POST" action="hasil_daging_kurban.php">
        <fieldset>
            <h2 >Pembagian Daging Kurban</h2>
            <p>
                <label >Jumlah Sapi Kurban : </label><br>
                <input type="number" name="jumlah_sapi" required min="1" style="width: 270px;"></td>
            </p>
            <p>
                <label >Daftar Nama Warga (satu nama per baris) : </label><br>
                <textarea name="daftar_nama" cols="35" rows="10" required></textarea>
            </p>
            <p style="text-align: center;">
                <input type="submit" value="Hitung dan Tampilkan Jatah">
            </p>
        </fieldset>
        </form>
    </div>

<script type="text/javascript">
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); 
        alert('Data berhasil diproses!');
        this.submit();
    });
</script>
</body>
</html>

