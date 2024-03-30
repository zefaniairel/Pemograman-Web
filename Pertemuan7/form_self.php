<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    // inisalisasi variabel
    $namaErr = "";
    $nama = "";

    // cek apakah form sudah disubmit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // validasi nama (contoh: pastikan nama tidak kosong)
        if(empty($_POST["nama"])){
            $namaErr = "Nama harus diisi";
        }else{
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan";
        }
    }

    // data form akan dikirim melalui metode POST ketika di submit
    // atribut acction menentukan skrip PHP yg akan memproses data form
    // htmlspecialchar untuk mengirim form ke halaman PHP yang sama
    // atribut method="post" menandakan bahwa data form akan dikirim metode POST
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label> 
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>

<!-- formulir HTML sederhanaa yg menggunakan PHP untuk validasi input. 
ketika formulir kosong, PHP memeriksa apakah input nama kosong,jika kosong pesan kesalaahn ditampilkan -->