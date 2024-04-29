<?php
// Deklarasi variabel
$host = "localhost";
$user = "root";
$password = "";
$dbname = "prakwebdb";

// Buat koneksi
$connect = mysqli_connect($host, $user, $password, $dbname);

// Periksa koneksi
if (!$connect) {
die("Koneksi gagal: " . mysqli_connect_error());
}

// Tampilkan pesan sukses
echo "Koneksi berhasil!";
?>