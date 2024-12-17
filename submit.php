<?php
require_once 'koneksi.php';
session_start();


// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tangkap data dari form
    $nama = $_POST['nama'];
    $nomer_tlp = $_POST['nomer_tlp'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $genre = $_POST['genre'];
    $instagram = $_POST['instagram'];

    // Siapkan query dengan prepared statement untuk mencegah SQL Injection
    $stmt = $koneksi->prepare("INSERT INTO data_kehadiran (nama, nomer_tlp, kota, email, genre, instagram) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nama, $nomer_tlp, $kota, $email, $genre, $instagram);

    // Eksekusi query dan cek apakah berhasil
    if ($stmt->execute()) {
        // Ambil ID yang dihasilkan
        $last_id = $stmt->insert_id;
        $_SESSION['nama'] = $nama;

        // Redirect ke halaman sukses setelah form disubmit
        header("Location: success.php?id=$last_id");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup prepared statement
    $stmt->close();
}
