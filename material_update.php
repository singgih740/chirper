<?php
include "koneksi.php";

$id           = $_POST['id_material'];
$nama      = $_POST['nama'];
$jenis = $_POST['jenis'];
$stok  = $_POST['stok'];
$satuan = $_POST['satuan'];

mysqli_query($koneksi, "UPDATE material SET nama='$nama', jenis='$jenis', stok='$stok', satuan='$satuan' WHERE id_material='$id' ");


header("location:index.php?hal=material");

?>