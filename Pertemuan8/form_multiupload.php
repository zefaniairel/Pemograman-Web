<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <!-- <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx" /> -->
            <input type="file" name="files[]" multiple="multiple" accept=".png, .jpg, .jpeg">
            <input type="submit" value="Unggah" />
        </form>
    </body>
</html>

<!--
    Disini yang menjadi pembeda adalah bisa untuk mengupload file yang banyak atau multiple. 
    Pertama dengan menggunakan multiple=”multiple”. Disitu nantinya user dapat memilih lebih dari satu file yang dituju.   
-->
