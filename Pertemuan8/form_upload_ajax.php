<!-- Percobaan soal 3.1. -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype= "multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="upload.js"></script>
</body>
</html> -->


<!-- soal 3.1. -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Unggah File Gambar</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype= "multipart/form-data">
        <input type="file" name="file[]" id="file" multiple="multiple"> 
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="upload.js"></script>
</body>
</html> -->


<!-- Soal 4.1. -->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="upload.css">
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>

            <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file" id="file" class="file-input">
                    <label for="file" class="file-label">Pilih File</label>
                </div>

                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>
                
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>

<!-- •	$('#upload-form').submit(function(e){...}:digunakan untuk menangani unggahan file ketika pengguna mengirim formulir dengan ID "upload-form". 
•	e.preventDefault();:Ini mencegah perilaku default dari submit formulir, yang akan mengarahkan ke halaman lain. Dalam konteks ini, submit formulir dihentikan, dan AJAX akan digunakan untuk mengirim data formulir ke server tanpa perlu memuat ulang halaman. 
•	$.ajax({...});:Ini adalah fungsi AJAX yang digunakan untuk mengirim data formulir ke server tanpa perlu me-refresh halaman. Berikut adalah parameter-parameter yang digunakan: 
•	type: 'POST': Ini menentukan metode HTTP yang akan digunakan untuk mengirim data ke server. Dalam hal ini, itu adalah permintaan POST. 
•	url: 'upload_ajax.php': Ini adalah URL yang akan menerima permintaan AJAX dan menangani unggahan file serta logika pemrosesan di server. 
•	data: formData: Data yang dikirim dalam permintaan adalah objek FormData yang berisi file-file yang diunggah. 
•	cache: false: Ini memastikan bahwa permintaan AJAX tidak disimpan dalam cache peramban. 
•	contentType: false: Ini mengatur header Content-Type permintaan ke false, yang memungkinkan server untuk menentukan tipe konten dari permintaan. 
•	processData: false: Ini memastikan bahwa data yang dikirimkan tidak akan diproses oleh jQuery, karena data formulir sudah berada dalam bentuk yang sesuai untuk dikirim ke server. 
•	success: function(response){...}: Ini adalah fungsi yang akan dijalankan jika permintaan AJAX berhasil. Response dari server akan ditampilkan di dalam elemen dengan ID "status" dalam halaman HTML. 
•	error: function(){...}: Ini adalah fungsi yang akan dijalankan jika ada kesalahan dalam permintaan AJAX, misalnya, jika server mengalami masalah atau ada masalah jaringan. Pesan kesalahan "Terjadi kesalahan saat mengunggah file" akan ditampilkan dalam elemen dengan ID "status." 
 -->