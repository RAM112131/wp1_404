<!DOCTYPE html>
<html>
    <head>
        <title>
            Tugas WP Pertemuan 03
        </title>
    </head>
    <body align=center>
        <table border=1 align=center>
            <tr>
                <td>
                <h1>Reas Store</h1>
        <p>Jl. Majapahit No 3, Mataram<br>081928729311</p>
        <?php
// konstanta garis
define ("garis"," ======================================== ");

// variabel harga
$harga_buku = 5000;
$harga_pulpen = 3000;
$harga_penghapus = 2000;

// variabel diskon
$diskon = 10/100;

// subtotal pembelian
$subtotal_buku = 3 * $harga_buku;
$subtotal_pulpen = 2 * $harga_pulpen; 
$subtotal_penghapus = $harga_penghapus;

// total harga
$total_harga = $subtotal_buku + $subtotal_pulpen + $subtotal_penghapus;

// total diskon
$total_diskon = $total_harga * $diskon;

// total harga setelah diskon
$harga_setelah_diskon = $total_harga - $total_diskon;

// cetak hasil
echo garis, 
"<pre>
Bon : RS99-099-250502ARP       Kasir : Reka Ansori
</pre>", garis,
"<pre>
Barang          Qty       Harga          Sub total
Buku Tulis       3        $harga_buku            Rp $subtotal_buku
Pulpen           2        $harga_pulpen             Rp $subtotal_pulpen
penghapus        1        $harga_penghapus             Rp $subtotal_penghapus
</pre>", garis,
"<pre>
                         Total harga     Rp $total_harga
                         Diskon (10%)     Rp $total_diskon
                         Total Bayar     Rp $harga_setelah_diskon
</pre>", garis;?>
        <p>kirim kritik dan saran ke :<br>reasstore@gmail.com </p>
                </td>
            </tr>
        </table>
    </body>
    <body>
</html>