<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // ini memeriksa apakah formulir telah disubmit dengan menggunakan metode POSt
     // var nama dan email digunakan untuk menyiman nilai yang dikirimkan melalui formulir
     // $_POST[".."] mengambil data dari input formulir dengan menggunakan nama input sebagai kunci
    $nama= $_POST["nama"];
    $email = $_POST["email"]; 

    // setelah input akan dicetak
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>