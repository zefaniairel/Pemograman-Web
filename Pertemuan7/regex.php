<?php
$pattern = '/[a-z]/';// cocokan huruf kecil
$text ='This Is A Sample Text.'; // variabel $text adalah texk yg akan diuji
if (preg_match($pattern, $text)) { // digunakan untuk mencocokan pola dalam teks
    echo "Huruf kecil ditemukan! <br>";
} else {
    echo "Tidak ada huruf kecil! <br>";
}

$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if(preg_match($pattern, $text, $matches)){ 
    echo "Cocokkan: " . $matches[0] . "<br>";
}else{
    echo "Tidak ada yang cocok! <br>";
}

$pattern = '/apple/'; // vari $patter adlh pola yg akan diganti dengan kata "banana"
$replacement = 'banana'; // berisi kata yang akan menggantikan pola yg cocok
$text = 'I Like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text); // digunakan untuk mencari dan mengganti yg cocok dengan pola
echo $new_text; // Output: "I like banana pie."

$pattern = '/go*d/'; // cocokan "god", "good, "goooo", dll.
$text = 'god is good.';
if (preg_match($pattern, $text, $matches))  {
    echo "Cocokan: " . $matches[0]. "<br>";
} else {
    echo "Tidak ada yang cocok! <br>";
}

$pattern = '/go?d/'; // cocokkan "god", "good", "gooood", dll.
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: ". $matches[0] . "<br>";
}else{
    echo "Tidak ada yang cocok! <br>";
}

$pattern = '/go{2,3}d/'; // cocokkan "god", "good", "gooood", dll.
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: ". $matches[0] . "<br>";
}else{
    echo "Tidak ada yang cocok! <br>";
}
?>

<!-- semu adiats ini adalah penggunaan untuk mencocokan dan mengganti teks sesuai dengan pola -->