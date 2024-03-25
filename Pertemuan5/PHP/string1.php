<?php
$loremIpsum = "Lorem ipsum dolor sit amet consecteteur adipisicing elit.";

echo "<p> {$loremIpsum} </p>"; // ini mencetak teks $loremIpsum didalam tag <p>
echo "Panjang karakter: ". strlen($loremIpsum) . "<br>"; // ini menghitung dan mencetak jumlah karakter dalam string menggunakan fungsi strlen()
echo "Panjang kata: ". str_word_count($loremIpsum)."<br>";// menghitung dan mencetak jumlah karakter dalam string menggunakan fungsi str_word_count()
echo "<p>". strtoupper($loremIpsum)."</p>"; // ini mengubah karakter menjadi huruf kapital
echo "<p>". strtolower($loremIpsum)."</p>"; // ini merubah karakter menjadi uruf kecil
?>