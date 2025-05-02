<?php 
$bil1=200;
$bil2=40;
$teks1="PHP";
$teks2="php";

$hasil = $bil1 == $bil2;
echo "$bil1 == $bil2 = $hasil<br>";
// keterangan :
// jika hasilnya ()/kosong, maka itu false, jika hasilnya 1 maka hasilnya true

$hasil = $bil1 != $bil2;
echo "$bil1 == $bil2 = $hasil<br>";

$hasil = $bil1 >= $bil2;
echo "$bil1 >= $bil2 = $hasil<br>";

$hasil = $teks1 == $teks2;
echo "$teks1 == $teks2 = $hasil<br>";


$hasil2 = $teks1 != $teks2;
echo "$teks1 != $teks2 = $hasil2";


?>