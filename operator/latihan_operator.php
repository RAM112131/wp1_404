<!--  
• Buat script menggunakan bahasa pemrograman PHP untuk
  menghitung volume Kubus menggunakan fungsi operator
  aritmatika dan operator string dengan ketentuan sebagai
  berikut :
• Panjang sisi kubus = 15cm
• Hitung volume balok dengan rumus = sisi x sisi x sisi
• Buat variable teks1 yang berisi = “Belajar Menghitung” dan
  teks2 yang berisi = “Volume Kubus”. Buat perintah untuk
  menggabungkan nilai dari variable teks1 dan teks2
  menggunakan operator string. -->

<?php 
$sisi = 15;
$volume = $sisi * $sisi * $sisi;
$teks1 = "Belajar Menghitung"; 
$teks2 = "Volume Kubus"; 

echo "
$teks1.$teks2<br>
Panjang sisi kubus = $sisi cm<br>
Volume Kubus = $volume m3";


?>