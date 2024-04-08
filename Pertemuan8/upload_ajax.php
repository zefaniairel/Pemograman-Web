<?php
if(isset($_FILES['file'])){
    $errors = array(); //membuat array kosong untuk menyimpan pesan kesalahan
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    // diatas ini untuk mengambil nama ukuran nama sementara dan tipe file dari array $_FILES
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    // $extensions = array("pdf", "doc", "docx", "txt");
    $extensions = array("jpg", "jpeg", "png");

    if(in_array($file_ext, $extensions) === false){
        // $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, PNG, JPEG.";
        // Untuk mengubah hingga hanya khsus gambar kita hanya perlu mengubah pada bagian ekstensi nya kita ganti dengan ekstensi gambar pada file upload_ajax.php. Pada variabel $extensions. Lalu, untuk ukuran disesuaikan masing-masing.
    }
    if($file_size > 2097152){
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
    }
    if(empty($errors) == true){ // ini memeriksa apakah tidak ada kesalahan yg terdeteksi
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    }else{ // jika ada kesalahan maka akan ditampilkan
        echo implode(" ", $errors);
    }
}
?>