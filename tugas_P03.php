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
                <h1>Berkaa Shop</h1>
        <p>Jl. Medayu Utara 50, Surabaya<br>81529620220414142434</p>
        <?php
        // konstanta garis
        define ("garis"," ======================================== ");

        // variabel harga
        $h_ayam_geprek = 12000;
        $h_ayam_kremes = 15000;
        $harga_nasgor = 20000;

        // variabel hasil hitung
        $total_ayam_geprek = 1 * $h_ayam_geprek;
        $total_ayam_kremes = 4 * $h_ayam_kremes;
        $total_nasgor = 3 * $harga_nasgor;

        
        
        // hitung jumlah total harga
        $total = $total_ayam_geprek + $total_ayam_kremes + $total_nasgor;
        $bayar = 200000;
        $kembali = $bayar - $total;

        // cetak hasil
        echo garis, 
"<pre>
2022-04-14                                      alfi
14:24:34                                     shelfia
No.0-24                                             
</pre>", garis,
"<pre>
Nasi Ayam geprek                                    
1 x $h_ayam_geprek                                   Rp $total_ayam_geprek
Nasi Ayam kremes                                    
4 x $h_ayam_kremes                                   Rp $total_ayam_kremes
Nasi Goreng Spesial                                 
3 x $harga_nasgor                                   Rp $total_nasgor
</pre>", garis,
"<pre>
Sub Total                                  Rp $total
Total                                      Rp $total
Bayar (cash)                               Rp $bayar
Kembali                                     Rp $kembali
</pre>", garis
;
        ?>
        <p>kirim kritik dan saran ke :<br>https://berkaashop.com</p>
                </td>
            </tr>
        </table>
    </body>
</html>


