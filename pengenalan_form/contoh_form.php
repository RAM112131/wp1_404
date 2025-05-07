<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form</title>
    </head>
    <body>
        <pre>
        <form action="proses.php" method="post">
            Nama        : <input type="text" name="Nama" size="25"><br>            
            Jenis       : <input type="radio" name="jk" value="Laki-laki">Laki-Laki
                          <input type="radio" name="jk" value="Perempuan">Perempuan<br>
            Jurusan     : <select name="jurusan">
                          <option>-- Pilih Jurusan --</option>
                          <option>Komputer Jaringan</option>
                          <option>Teknik Informatika</option>
                          <option>Sistem Informasi</option>
            </select><br>
            Hobi        : <input type="checkbox" name=""> Membaca
                          <input type="checkbox" name=""> Main Game
                          <input type="checkbox" name=""> Olahraga
                          <input type="checkbox" name=""> Memancing
                          <input type="checkbox" name=""> Menulis<br>
            Email      : <input type="text" name="email"><br>            
            Alamat     : <textarea row="8" col="10" name="alamat"></textarea></<br>            
            
            <input type="submit" value="Simpan"> <input type="reset" value="Reset">
        </form>
        </pre>
        
    </body>
</html>
