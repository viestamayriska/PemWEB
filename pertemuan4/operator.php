<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a <= $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;


echo "<tr><td>Penjumlahan ($a + $b)</td><td>$hasilTambah</td></tr>";
echo "<tr><td>Pengurangan ($a - $b)</td><td>$hasilKurang</td></tr>";
echo "<tr><td>Perkalian ($a * $b)</td><td>$hasilKali</td></tr>";
echo "<tr><td>Pembagian ($a / $b)</td><td>$hasilBagi</td></tr>";
echo "<tr><td>Sisa Bagi ($a % $b)</td><td>$sisaBagi</td></tr>";
echo "<tr><td>Pangkat ($a ** $b)</td><td>$pangkat</td></tr>";

echo "<tr><td>Sama ($a == $b)</td><td>";
echo ($hasilSama) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>Tidak Sama ($a != $b)</td><td>";
echo ($hasilTidakSama) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>Lebih Kecil ($a <= $b)</td><td>";
echo ($hasilLebihKecil) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>Lebih Besar ($a > $b)</td><td>";
echo ($hasilLebihBesar) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>Lebih Kecil Sama ($a <= $b)</td><td>";
echo ($hasilLebihKecilSama) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>Lebih Besar Sama ($a >= $b)</td><td>";
echo ($hasilLebihBesarSama) ? "Ya" : "Tidak";
echo "</td></tr>";


echo "<tr><td>AND ($a && $b)</td><td>";
echo ($hasilAnd) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>OR ($a || $b)</td><td>";
echo ($hasilOr) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>NOT A (!$a)</td><td>";
echo ($hasilNotA) ? "Ya" : "Tidak";
echo "</td></tr>";
echo "<tr><td>NOT B (!$b)</td><td>";
echo ($hasilNotB) ? "Ya" : "Tidak";
echo "</td></tr>";


echo "<tr><td>$a += $b</td><td>$a</td></tr>";
echo "<tr><td>$a -= $b</td><td>$a</td></tr>";
echo "<tr><td>$a *= $b</td><td>$a</td></tr>";
echo "<tr><td>$a /= $b</td><td>$a</td></tr>";
echo "<tr><td>$a %= $b</td><td>$a</td></tr>";



