<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikum11");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
