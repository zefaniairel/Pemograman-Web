<?php
// pada file proses_upload.php terdapat penambahan kode yang dimana kita bisa membuat secara otomatis folder untuk menyimpan dokumen yang diupload dengan menggunakan sintaks mkdir yang artinya make directory.
// Lalu, untuk melihat apakah dokumen yang di upload terkirimkan menuju server atau folder yang dituju kita menggunakan looping dengan menggunakan indeks array agar pengindexan gambar lebih mudah.
// Lokasi penyimpanan file yang di unggah
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
