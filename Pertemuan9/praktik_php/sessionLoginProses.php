<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password = md5($_POST['password']);

    $query="SELECT * FROM user WHERE username='$username' and password='$password'"; 
    $result = mysqli_query($connect, $query); 
    $cek=mysqli_num_rows($result);

    if ($cek) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda Berhasil Login, silahkan menuju
        <a href="homeSession.php"> Halaman Home </a> <?php
    }else{
        ?>
        Gagal login, silahkan login lagi
        <a herf="sessionLoginForm.html"> Halaman Login </a> <?php
        echo mysqli_error ($connect);
    } 
?>