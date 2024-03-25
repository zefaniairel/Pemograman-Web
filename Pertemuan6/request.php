<html>
    <body>
        <!-- Bagian untuk mengirim data dengan metode POST ke skrip PHP yang sama -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    // membuat untuk memproses data yang dikirim melalui form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // mengumpukan nilai dari input field
        $name = $_REQUEST['fname'];
        // memeriksa apakah input nama kosong
        if(empty($name)){
            echo "Name is empty";
        }else{
            echo $name;
        }
    }
    ?>
    </body>
</html>