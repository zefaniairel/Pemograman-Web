<?php
$umur; // variabel $umur dideklarasikan tetapi tidak diinisialisasi dengan nilai apapun, oleh itu nilai NULL
if(isset($umur) && $umur >= 18){ // $umur didefinisikan dannilainya lebih besar/sama dengan maka mencetak 'anda sudah dewasa'
    echo "Anda sudah dewasa.<br>";
}else{
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br>";
}

// $data merupakan array asosiatif
$data = array("nama" => "Jane", "usia"=>25);
if(isset($data["nama"])){ // ini memeriksa apakah "nama" ada dalam array $data, jika ada maka akan dicetak namun jika tidak ada maka tidak ditemukan
    echo "Nama: " . $data["nama"] . "<br>"; // jika ada maka akan mencetak nama yang di array
}else{
    echo "Variabel 'nama' tidak ditemukan dalam array.<br>"; // ini jika tidak ada
}
?>