<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Variabel a = $a <br>";
echo "Variabel b = $b <br>";
echo "1. $a + $b = $hasilTambah <br>";
echo "2. $a - $b = $hasilKurang <br>";
echo "3. $a x $b = $hasilKali <br>";
echo "4. $a / $b = $hasilBagi <br>";
echo "5. $a % $b = $sisaBagi <br>";
echo "6. $a ** $b = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "7. $a sama dengan $b = $hasilSama <br>";
echo "8. $a tidak sama dengan $b = $hasilTidakSama <br>";
echo "9. $a Lebih Kecil $b = $hasilLebihKecil <br>";
echo "10. $a Lebih Besar $b = $hasilLebihBesar <br>";
echo "11. $a Lebih Kecil Sama Dengan $b = $hasilLebihKecilSama <br>";
echo "12. $a Lebih Besar Sama Dengan $b = $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "13. $a And $b = $hasilAnd <br>";
echo "14. $a Or $b = $hasilOr <br>";
echo "15. Not $a  = $hasilNotA <br>";
echo "16. Not $b  = $hasilNotB <br>";

$a += $b;
echo "17. a += b : $a <br>";
$a -= $b;
echo "18. a -= b : $a <br>";
$a *= $b;
echo "19. a *= b : $a <br>";
$a /= $b;
echo "20. a /= b : $a <br>";
$a %= $b;
echo "21. a %= b : $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "22. $a identik dengan $b = $hasilIdentik <br>";
echo "23. $a tidak identik dengan $b = $hasilTidakIdentik <br>";

// echo "<br>";
// echo "Pertanyaan <br>";
// echo "Sebuah restoran memiliki 45 kursi didalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut? <br>";
// $jawaban = ((45 - 28) / 45) * 100;
// echo "- Hasilnya adalah : $jawaban%";

?>