<?php

// variabel
$bil1 = 200;
$bil2 = 40;

$hasil_jumlah = $bil1 + $bil2;
$hasil_kurang = $bil1 - $bil2;
$hasil_kali = $bil1 * $bil2;
$hasil_bagi = $bil1 / $bil2;
$hasil_hasilbagi = $bil1 % $bil2;

echo 
"Ini adalah latihan operator aritmatika<br>
penjumlahan : <br>
$bil1 + $bil2 = $hasil_jumlah<br>
pengurangan :<br>
$bil1 - $bil2 = $hasil_kurang<br>
perkalian : <br>
$bil1 * $bil2 = $hasil_kali<br>
pembagian : <br>
$bil1 / $bil2 = $hasil_bagi<br>
hasil bagi : <br>
$bil1 % $bil2 = $hasil_hasilbagi<br>
";

$angka1 = 22;
$angka2 = 7;
$hasilbagi = $angka1 / $angka2;

echo 
"pembagian dengan mengambil sebagian angka dibelakang koma<br>
hasil dari $angka1 / $angka2 = ".round($hasilbagi, 4)."<br>";
?>