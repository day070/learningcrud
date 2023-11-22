<?php

include_once("koneksi.php");

if(isset($_POST['update'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $cita = $_POST['cita_cita'];
    $jnskelamin = $_POST['jnskelamin'];

    $result = mysqli_query($mysqli,"UPDATE SISWA SET NAMA='$nama',CITA_CITA='$cita',JNSKELAMIN='$jnskelamin' WHERE NISN=$nisn");

    header("location: index.php");
}

?>

<?php
$nisn = $_GET['nisn'];

$result = mysqli_query($mysqli, "SELECT * FROM SISWA WHERE NISN=$nisn");

while($data_siswa = mysqli_fetch_array($result))
{
    $nama = $data_siswa['NAMA'];
    $cita = $data_siswa['CITA_CITA'];
    $jnskelamin = $data_siswa['JNSKELAMIN'];
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
    <form action="edit.php" name="edit_siswa" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Cita-cita</td>
                <td><input type="text" name="cita_cita" value="<?php echo $cita; ?>"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td><input type="text" name="jnskelamin" value="<?php echo $jnskelamin; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nisn" value="<?php echo $_GET['nisn']; ?>"></td>
                <td><input type="submit" name="update" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</body>
</html>