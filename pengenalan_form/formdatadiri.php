<html> 
<head> 
<title> Masukan Data</title> 
</head> 
<body> 
<h1> Masukan Identitas Anda<h1> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
<pre> 
Isikan Nama         : <input type="text" name="nama"> 
Isikan No Telp      : <input type="text" name="notelp"> 
Isikan Alamat       : <textarea name="alamat" rows="5" cols="40"></textarea> 
<input type="submit" value="TAMPIL"> <input type="reset" value="BATAL"> 
</pre> 
</form> 


<?php 

$nama_sendiri = $_POST['nama']; 
$nomor_telp = $_POST['notelp']; 
$alamat = $_POST['alamat'];
 
if(!empty ($nama_sendiri)) {echo "Nama : $nama_sendiri <br>"; } 
if(!empty ($nomor_telp)) {echo "No Telp : $nomor_telp <br>"; } 
if(!empty ($alamat)) {echo "Alamat : $alamat <br>";} 
?> 

</body> 
</html>
