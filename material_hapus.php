<?php
include "koneksi.php";

$terserah = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM material WHERE id_material = '$terserah' ") or die(mysqli_error($koneksi));

header("location:index.php?hal=material");
?>

