<?php

// soal terkait Array multi dimensional yang berisi data siswa dan juga gambar siswa
$biodata = [
    'DataB' => [
        ["<img src='beomgyu.jpeg' height=120 width=120>","Beomgyu", "Jakarta", "22", "Teknologi Informasi"],
    ],
    'DataY' => [
        ["<img src='yeonjun.jpeg' height=120 width=90>", "Yeonjun", "Bandung", "25", "Teknologi Informasi"],
    ],
];

// lalu menggunaka loop foreach untuk mengiterasi melalui array $biodata
foreach($biodata as $dataA){
    echo "{$dataA[0][0]}";
    echo "<br>";
    echo "Name      : {$dataA[0][1]}";
    echo "<br>";
    echo "Address   : {$dataA[0][2]}";
    echo "<br>";
    echo "Age       : {$dataA[0][3]}";
    echo "<br>";
    echo "Jurusan   : {$dataA[0][4]}";
    echo "<br>";
}

?>
