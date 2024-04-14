<?php
session_start();

// ini untuk deklarasi variabel 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "openvolunteer";

// ini untuk membuat koneksi ke database
$connect = mysqli_connect($host, $user, $password, $dbname);

// ini untuk periksa koneksi, jika gagal akan muncul seperti dibawah
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ini untuk memeriksa apakah user sudah submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ini mnampilkan nilai dari $_POST untuk debugging
    echo "Username: " . $_POST['username'] . "<br>";
    echo "Password: " . $_POST['password'] . "<br>";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($connect, $query); 
    $cek = mysqli_num_rows($result);

    if ($cek) {
        // jika login berhasil maka akan diarahkan langsung ke halaman pendaftaran
        $_SESSION['username'] = $username;
        header("Location: registrasiForm.html");
        exit();
    } else {
        // jika username/pass tidak terdaftar atau gagal login maka akan tampil pesan seperti dibawah ini
        echo "Username atau password salah.";
    }
}
?>
