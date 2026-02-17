<?php
$halaman = $_GET['hal'] ?? 'material';

if ($halaman == "hapus") {
    include "material_hapus.php";
    exit; // Stop further output after redirect
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Website</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <ul class="navbar navbar-expand-lg fixed-top bg-primary shadow">
        <li class="nav-item navbar-brand fw-bold">
            <a class="nav-link text-white" href="?hal=material">Gudang Material PLTA Garung</a></li>
    </ul><br><br><br><br>
    <?php
    if ($halaman == "material") {
        include "material.php";
    } else if ($halaman == "tambah_material") {
        include "material_tambah.php";
    } else if ($halaman == "edit") {
        include "material_edit.php";
    }
    ?>
</body>
</html>