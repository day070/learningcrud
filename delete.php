<?php

include_once("koneksi.php");

$id = $_GET['ID'];

$result = mysqli_query($koneksi, "DELETE FROM motor WHERE id=$id");
if ($result) {

    header("Location:index.php");
}

?>
