<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();
    // var nama email pass diinisalisasi dengan nilai nila yg akan dikrim melalui formlir
    // var errors untuk menyimpan pesan kesalahan validasi(jika ada)

    // Validasi nama, dan tidak boleh kosong
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email, tidak boleh kosong dan harus valid
    if (empty($email)) {
        $errors[] = "Email harus diisi";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }

    // Validasi Password, tidak boleh kosong dan min 8 karakter
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } else if (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email, Password = $password";
    }
}
?>