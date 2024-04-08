
<?php

/* 
- Perubahan yang di upload.php adalah terdapat pengecekan tipe atau ekstensi file yg diupload harus sesuai dengan kondisi. 
- Pada var $fileTYpe disini digunakan untuk mendapatkan tipe atau ekstensi file yang diupload. 
- Fungsi getimagesize digunakan untuk mendapatkan dimensi (lebar dan tinggi) gambar asli yang diunggah 
- $height = ($originalHeight / $originalWidth) * $width; : Ini adalah langkah untuk menghitung tinggi thumbnail yang akan dibuat berdasarkan perbandingan aspek asli gambar dengan lebar yang diinginkan untuk thumbnail. 
- Fungsi imagecopyresampled digunakan untuk mengubah ukuran gambar asli menjadi ukuran thumbnail yang telah dihitung
- fungsi imagejpeg digunakan untuk menyimpan gambar thumbnail yang telah dibuat ke direktori tujuan yang telah ditentukan (variabel $destination). 
*/


// if(isset($_POST["submit"])){
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

//     if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
//         echo "File berhasil diunggah.";
//     }else{
//         echo "Gagal Mengunggah file.";
//     }
// }

// if(isset($_POST["submit"])){
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");

//     $maxFileSize = 5 * 1024 * 1024;

//     if(in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
//         if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
//             echo "File berhasil diunggah.";
//         }else{
//             echo "Gagal Mengunggah file.";
//         }
//     }else{
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

// if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
//     $maxFileSize = 5 * 1024 * 1024;

//     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah.";

//             // Tambahkan langkah untuk membuat thumbnail gambar
//             $thumbnailFile = $targetDirectory . 'thumbnail.jpg'; // Menyimpan thumbnail dalam folder yang sama
//             createThumbnail($targetFile, $thumbnailFile, 200);
//         } else {
//             echo "Gagal Mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

// function createThumbnail($source, $destination, $width) {
    // list($originalWidth, $originalHeight) = getimagesize($source); 
//     $height = ($originalHeight / $originalWidth) * $width;

//     $sourceImage = imagecreatefromjpeg($source);
//     $thumbnail = imagecreatetruecolor($width, $height);

//     imagecopyresampled($thumbnail, $sourceImage, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);

//     imagejpeg($thumbnail, $destination);
// }

if(isset($_POST["submit"])){
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt","pdf","doc","docx");

    $maxFileSize = 10 * 1024 * 1024;

    if(in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo "Dokumen berhasil diunggah.";
        }else{
            echo "Gagal Mengunggah dokumen.";
        }
    }else{
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>

