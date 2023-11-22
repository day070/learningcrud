<?php
include_once("koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM motor");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astra Honda Dealership</title>
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
        <a href="tambah.php">Tambah</a>
    </div>
    <div class="hero"></div>
    <h1>Motor Honda</h1>
    <div class="konten">
        <?php
        while ($data = mysqli_fetch_array($query)) {
            echo "<div class='card'>";
            echo "<img src='gambar/" . $data['GAMBAR'] . "'>";
            echo "<div class='text'>";
            echo "<h3>" . $data['NAMA'] . "</h3>";
            echo "<small>Harga</small>";
            echo "<h3>" . $data['HARGA'] . "</h3>";
            echo "<a href='delete.php?ID=$data[ID]'>Hapus |</a>";
            echo "<a href='edit.php?ID=$data[ID]'> Edit</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>
