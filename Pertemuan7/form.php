<html>
    <head>
    <!-- judul halaman web -->
        <title>
            Form Input PHP
        </title>
    </head>
    <body>
        <h2> Form Input PHP </h2>
        <!-- <form> mendekripsikan formulir  -->
        <form method="post" action="proses_form.php"> 
            <label for="nama"> Nama: </label>
            <input type="text" name="nama" id="nama" required> <br><br>

            <label for="email"> Email: </label>
            <input type="email" name="email" id="nama" required> <br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<!-- <label> ini digunakan untuk memberikan label pada input
    dan <input> digunakan untuk menerima inpur dari pengguna -->
