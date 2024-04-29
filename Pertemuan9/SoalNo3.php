<?php
    // soal nomor 3 : insert table with mysqli_connect()

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prakwebdb";

    // konseksi ke database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Data yang akan dimasukkan
    $nama_pengguna = "username";
    $kata_sandi = md5("kata_sandi");

    // Query untuk memasukkan data ke dalam tabel user
    $query = "INSERT INTO user (username, password) VALUES ('$nama_pengguna', '$kata_sandi')";

    // Mengeksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dimasukkan ke tabel user.";
    } else {
        echo "Error saat memasukkan data: " . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
?>