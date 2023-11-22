<?php
$id = $_GET['ID'];

include_once("koneksi.php");

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $result = mysqli_query($koneksi, "UPDATE motor SET NAMA='$nama',HARGA='$harga' WHERE ID=$id");

    header("location: index.php");
}

?>

<?php

$result = mysqli_query($koneksi, "SELECT * FROM motor WHERE ID=$id");

while ($data_siswa = mysqli_fetch_array($result)) {
    $Nama = $data_siswa['NAMA'];
    $Harga = $data_siswa['HARGA'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>

<body>
    <a href="index.php">Balik</a><br><br>
    <form action='' method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $Nama; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $Harga; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['ID']; ?>"></td>
                <td><input type="submit" name="update" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</body>

</html>
