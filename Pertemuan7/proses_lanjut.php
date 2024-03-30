<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $selectedBuah = $_POST['buah']; //mengambil nilai buah yg dipilih dari formulir
    if(isset($_POST['warna'])){
        $selectedWarna = $_POST['warna'];
    }else{
        $selectedWarna = [];
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    if(!empty($selectedWarna)){ // memriksa apakah array $selectedWarna tidak kosong
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>"; // dignakan untuk menggabungkan nilai nilai array $selectedWarna menjadi string dgn koma sebgaai pemisah
    }else{
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>