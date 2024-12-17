<?php
session_start(); // Memulai sesi untuk mengambil data yang disimpan

// Ambil ID dari query string (URL)
if (isset($_GET['id'])) {
    $last_id = $_GET['id'];
}

// Ambil nama yang disimpan di session
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : 'User';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Success</title>
    <style>
        body {
            background-image: url(BACKGROUND.png);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color:rgba(255, 255, 255, 0.72);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color:rgb(0, 0, 0);
            font-size: 1.1rem;
            margin-top: 5px;
        }
        .id-container {
            font-size: 2.5rem; /* ID lebih besar */
            font-weight: bold;
            color: #0072ff;
            margin-top: 20px;
        }
        .logo {
            width: 150px; /* Atur ukuran logo */
            height: auto;
            margin-bottom: 5px;
        }
        h2 {
            color:rgb(255, 0, 0);
            font-size: 1.1rem;
            margin-top: 5px;
            font-family:Lora;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="logo.png" alt="Logo" class="logo">
        <!-- <h1>Data Berhasil Disimpan</h1> -->
        <h1>Terima kasih, <strong><?php echo htmlspecialchars($nama); ?></strong></h1>
        <h2>Harap Screenshoot Halaman Ini Untuk Ditukarkan Ke Photobooth!!!</h2>
        <div class="id-container">
            ID Anda: XL<strong><?php echo $last_id; ?></strong>
        </div>
    </div>
</body>
</html>
