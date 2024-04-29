<?php
    // soal nomor 2 : create table with mysqli_query()

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prakwebdb";

    // Buat konseksi ke database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query untuk membuat tabel
    $query = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
    )";

    // Mengeksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Tabel user berhasil dibuat atau sudah ada sebelumnya.";
    } else {
        echo "Error saat membuat tabel: " . mysqli_error($conn);    
    }

    // Tutup koneksi
    mysqli_close($conn);
?>