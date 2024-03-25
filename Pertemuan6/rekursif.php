<?php
// tampilkanAngka untuk menampilkan angka angka dalam perulangan
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // panggil diri sendiri selama $indeks <= $jumlah 
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20); // ketika fungsi dipanggil angka 20, maka fungsi akan dijalankan secara rekursif hingga mencapai perulangan ke 20 dan pesan akan dicetak disetiap iterasi.

?>