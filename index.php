<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tokbaku olifia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/main.css">
</head>

<body>
  <?php
  include("components/navbar.php")
  ?>
  <div class="container">
    <div id="carouselExampleSlidesOnly" class="mt-3 carousel slide carousel-home" data-bs-ride="carousel">
      <div class="carousel-inner rounded">
        <div class="carousel-item active">
          <img src="./public/imgs/banner-home-1.png" class="d-block w-100 " alt="banner1">
        </div>
        <div class="carousel-item">
          <img src="./public/imgs/banner-home-2.png" class="d-block w-100" alt="banner2">
        </div>
        <div class="carousel-item">
          <img src="./public/imgs/banner-home-3.png" class="d-block w-100" alt="banner3">
        </div>
      </div>
    </div>
    <div class="menus mt-3 mb-5 d-flex justify-content-center gap-3">
      <div class="cutomer">
        <a class="menu input-customer d-flex align-items-center gap-3 mb-3 px-4 py-2 rounded nav-link" href="./input-data-customer.php">
          <i class="menu-icon bi bi-emoji-wink-fill"></i>
          <h5>Input Customer</h5>
        </a>
        <a class="menu input-customer d-flex align-items-center gap-3 px-4 py-2 rounded nav-link" href="./daftar-customer.php">
          <i class="menu-icon  bi bi-people-fill"></i>
          <h5>Daftar Customer</h5>
        </a>
      </div>
      <div class="barang">
        <a class="menu input-customer d-flex align-items-center gap-3 mb-3 px-4 py-2 rounded nav-link" href="./input-data-barang.php">
          <i class="menu-icon bi bi-archive-fill"></i>
          <h5>Input Barang</h5>
        </a>
        <a class="menu input-customer d-flex align-items-center gap-3 px-4 py-2 rounded nav-link" href="./daftar-barang.php">
          <i class="menu-icon bi bi-collection-fill"></i>
          <h5>Daftar Barang</h5>
        </a>
      </div>
      <div class="transaksi d-flex gap-3">
        <a class=" btn-success input-customer d-flex align-items-center gap-3 px-4 py-2 rounded nav-link" href="./transaksi-penjualan.php">
          <i class="menu-icon bi bi-layer-backward"></i>
          <h5>Transaksi Penjualan</h5>
        </a>
        <a class="btn-success input-customer d-flex align-items-center gap-3 px-4 py-2 rounded nav-link" href="./daftar-transaksi.php">
          <i class="menu-icon vbi bi-file-earmark-fill"></i>
          <h5>Daftar Transaksi</h5>
        </a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>