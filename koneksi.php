<?php

$koneksi = mysqli_connect("localhost", "root", "", "gudang");

if (mysqli_connect_errno()) {
    echo "Gagal Koneksi Bang....!!!" . mysqli_connect_error();
}

?>