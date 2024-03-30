<?php
$myArray = array(); // Array kosong
if (empty($myArray)) { // untuk memeriksa apakah array kosong atay tidak terdefinisikan
    echo "Array tidak terdefinisikan atau kosong.";
} else {
    echo "Array terdefinisikan dan tidak kosong.";
}

if (empty($nonExistentVar)) {
    // pada empty ini kita jadi tau untuk mengecek apaha variabel tersebut kosong atau tidak terdefinisikan
    echo "Variabel tidak terdefinisikan atau kosong.";
} else {
    echo "Variabel terdefinisikan dan tidak kosong.";
}
?>