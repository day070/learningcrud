<?php
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astra Honda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="atas">
        <img src="gambar/honda.svg" alt="">
        <img src="gambar/ahm.svg" alt="">
    </div>
    <div class="navbar">
        <form action="index.php">
            <input type="text" name="cari">
        </form>
        <a href="index.php">Balik</a>
    </div>
    <form action="tambah.php" method="post" name="form" class="input" enctype="multipart/form-data">
        <table width="25%">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="TAMBAH"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga']; 

        $gambar = $_FILES['gambar']['name'];
        $tmp_gambar = $_FILES['gambar']['tmp_name'];
        $folder = 'gambar/';
        move_uploaded_file($tmp_gambar,$folder.$gambar);

        $result = mysqli_query($koneksi, "INSERT INTO motor(NAMA,HARGA,GAMBAR) VALUES('$nama','$harga','$gambar')");
    }
    ?>
</body>
</html>