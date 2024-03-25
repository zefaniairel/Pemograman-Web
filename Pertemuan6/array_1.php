<html lang="en">
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    // Membuat array  untuk menyimpan data menggunakan variabel $Listdosen
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    // echo $Listdosen[2] . "<br>";
    // echo $Listdosen[0] . "<br>";
    // echo $Listdosen[1] . "<br>";

    // perulangan yg menampilkan array
    for($i = 0; $i < count($Listdosen); $i++){
        echo $Listdosen[$i] . "<br>";
    }
    ?>
</body>
</html>