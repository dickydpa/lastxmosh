<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <title>XMOSH</title>
</head>
<body>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="4.png" class="d-block w-100" alt="...">
    </div>    
    <div class="carousel-item">
      <img src="5.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <div class="container">
    <div class="logo-container">
            <img src="logo.png" alt="Logo XMOSH"> <!-- Ganti dengan URL logo atau file logo -->
            <h1>Jangan Lupa Isi Ini Dulu YGY!!!</h1>
            <h2>ENJOY THE VIBE</h2>
        </div>
    <form action="submit.php" method="POST">
  <div class="mb-3">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control"  name="nama" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Nomer WA</label>
    <input type="text" class="form-control" name="nomer_tlp" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Asal Kota</label>
    <input type="text" class="form-control" name="kota" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="text" class="form-control" name="email" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Genre Musik Yang Disukai</label>
    <input type="text" class="form-control" name="genre" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Instagram</label>
    <input type="text" class="form-control" name="instagram" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>

<?php
  require_once 'koneksi.php';
  require_once 'submit.php';

?>
