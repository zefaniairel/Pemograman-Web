<?php
// mulai sesi jika belum dimulai
session_start();

// ini untuk deklarasi variable ke database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "openvolunteer";

// membuat koneksi ke database
$connect = mysqli_connect($host, $user, $password, $dbname);

// memeriksa koneksi ke database, jika gagal akan muncul pesan
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// memeriksa apakah user ini telah mengirimkan formulir pendaftaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ini untuk mengambil data yang dikirimkan dari formulir pendaftaran
    $email = $_POST['email'];
    $nama_panjang = $_POST['nama_panjang'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $nomor = $_POST['nomor'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $asal = $_POST['asal'];
    $alasan = $_POST['alasan'];

    // Query untuk menyisipkan data pendaftaran ke dalam tabel 'register'
    $query = "INSERT INTO register (email, nama_panjang, nama_panggilan, asal, nomor, tempat_lahir, tanggal_lahir, jenis_kelamin, alasan) 
              VALUES ('$email', '$nama_panjang', '$nama_panggilan', '$asal', '$nomor', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alasan')";

   // eksekusi query
   if (mysqli_query($connect, $query)) {
    echo "Yeyy! Pendaftaran kamu terkirim!";
    
    // set cookie setelah berhasil mendaftar
    setcookie("user_email", $email, time() + (86400 * 2), "/"); // di sini cookie yang berlaku hanya selama 2 hari
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);

    }
}
?>
