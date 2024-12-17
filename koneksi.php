<?php


 // konfigurasi database
$koneksi = mysqli_connect("localhost", "root",  "", "data_kehadiran");


// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

mysqli_set_charset($koneksi, "utf8");
?>
