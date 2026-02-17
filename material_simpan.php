<?php

include "koneksi.php";


$nama      = $_POST['nama'];
$jenis = $_POST['jenis'];
$stok  = $_POST['stok'];
$satuan = $_POST['satuan'];


mysqli_query($koneksi, "INSERT INTO material VALUES(NULL,'$nama','$jenis','$stok','$satuan')");


header("location:index.php?hal=material");

?>