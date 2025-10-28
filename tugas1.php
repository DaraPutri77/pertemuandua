<?php
//variabel
$pemasukan = 50000000;
$a = 16500000;
$bunga_a = $a * 0.05;
$b = 9500000;
$bunga_b = $b * 0.045;

//kita hitung
$total_bunga = $bunga_a + $bunga_b;
$total_hutang = ($a + $bunga_a) + ($b + $bunga_b);
$sisa_uang = $pemasukan - $total_hutang;

//hasil
echo "sisa uang = Rp $sisa_uang <br>";
echo "jumlah total bunga hutang = Rp $total_bunga <br>";
echo "jumlah total hutang = Rp $total_hutang <br>"

?>
