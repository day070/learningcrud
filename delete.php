<?php 

    include_once("koneksi.php");

    $nama = $_GET['NAMA'];

    $result = mysqli_query($koneksi, "DELETE FROM motor WHERE NAMA=$nama");

    header("Location:index.php");

?>