<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
    </body>
</html>

<!-- Pada bagian html sebenarnya sama seperti form biasa. 
Namun, disini inputan berupa file dan agar file tersebut bisa terkirimkan dari form website nya menuju server maka digunakan enctype = “multipart/form-data”
Lalu, pada file upload.php disitu hanya sebagai detektor apakah file sudah di submit atau tidak. 
Tidak hanya itu terdapat proses juga basename() yang dimana fungsinya untuk mengambil nama file pada saat di upload agar sesuai dengan file pada server untuk nama file nya. 
Lalu, ada pengecekan apakah file berhasil dipindahkan ke tempat yang telah disediakan. 
Jika, berhasil maka akan memberikan status seperti pada gambar ke-3.
 -->