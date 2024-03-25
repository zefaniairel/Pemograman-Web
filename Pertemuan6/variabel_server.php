<?php
    echo $_SERVER['PHP_SELF']; // menampilkan script php
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; // tampilkan nama server
    echo "<br>";
    echo $_SERVER['HTTP_HOST']; // tampilkan nama j=host dari URl yg sedang diakses oleh user
    echo "<br>";
    echo $_SERVER['HTTP_REFERER']; // tampilkan URL dari halaman
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT']; // memberikan infromasi tentang web browser yg digunakan user
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME']; // menampilkan jalur skrip php yg dijalankan
?>